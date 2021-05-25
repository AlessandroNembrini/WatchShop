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
use yii\web\NotFoundHttpException;
use yii\web\BadRequestHttpException;

class WatchController extends Controller
{

    public $enableCsrfValidation = false;
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
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
     * Displays /watch/detail/:watchId page.
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
        return $this->render('detail');
    }

    /**
     * Displays /watch/edit/:watchId page.
     *
     * @return string
     */
    public function actionEdit($watchId)  
    {   
         
         $file = new Images();

        if (Yii::$app->request->isPost) {
            $model = new Images();
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully
                $image = new Images();
                $image->fk_header = 1;
                $image->preview_image = '/'.'uploads/' . $model->imageFile->baseName . '.' . $model->imageFile->extension;
                $image->save();
                print_r($image->errors);

            }else{
                //return 400
                throw new BadRequestHttpException("Error while uploading file");
            }
        }

        //Load Data
        $watch = Watch::find()
        ->where( [ 'id' => $watchId])->with('header')->one();


        //Pass model instance to active form in view
        return $this->render('edit', ['watch' => $watch, 'file' => $file]);
    }

}
