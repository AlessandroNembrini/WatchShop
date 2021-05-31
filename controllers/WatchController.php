<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use app\models\Watch;
use app\models\Images;
use app\models\Header;
use yii\web\NotFoundHttpException;
use yii\web\BadRequestHttpException;

class WatchController extends Controller
{

    public $enableCsrfValidation = true;

    /**
     * Error handler
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
   

    /**
     * Displays /watch/detail/:watchId page
     *
     * @return string
     */
    public function actionDetail($watchId)  
    {
        //check if watch exist in db
        $result = Watch::find()
        ->where( [ 'id' => $watchId])
        ->exists(); 

        //if not exist return 404 handled by site/error
        if(!$result){
            throw new NotFoundHttpException("This watch does not exist");
        }

        //render detail page
        //data is loaded over ajax @vue-component
        return $this->render('detail');
    }

    /**
     * Displays /watch/edit/:watchId page and
     * handle Update and FileUpload
     *
     * @return string
     */
    public function actionEdit($watchId)  
    {   
        //Load watch/header model
        $watch = Watch::find()
        ->where([ 'id' => $watchId])->with('header')->one();

        $image = new Images();
       
        if(empty($watch)){
            throw new NotFoundHttpException("This watch does not exist");
        }else{
             //Upload Imagefile
            if (Yii::$app->request->isPost) {   
                $image->imageFile = UploadedFile::getInstance($image, 'imageFile');
                //Check if a file is uploaded https://stackoverflow.com/questions/25237661/skip-on-empty-not-working-in-yii2-file-upload
                if(!empty($image->imageFile) && $image->imageFile->size !== 0){
                    //create guid @(components/functions)
                    $guid = Yii::$app->functions->guidv4();
                    if ($image->upload($guid)) {
                        //file is uploaded successfully
                        $image->fk_header = $watch->header->id;
                        $image->preview_image = '/'.'uploads/' . $guid . '_'. $image->imageFile->baseName . '.' . $image->imageFile->extension;
                        $image->save(false);  
                        //refresh page     
                        return $this->refresh();              
                    }else{
                        //return 400
                        throw new BadRequestHttpException("Error while uploading file -> {print_r($image->errors)}");
                    }    
                }
                //Load model data from post-obj
                $watch->load(Yii::$app->request->post());
                $watch->header->load(Yii::$app->request->post());
                //save changes
                $watch->save();  
                $watch->header->save();       
            }      
        }
        //Pass model instance to active form in view
        return $this->render('edit', ['watch' => $watch, 'file' => $image]);
         
     }
}
