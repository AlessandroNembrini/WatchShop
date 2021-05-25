<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Watch;
use app\models\Images;
use yii\web\NotFoundHttpException;

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
     * Displays /watch/detail/id page.
     *
     * @return string
     */
    public function actionDetail($watchId)  
    {
        //check if watch exist in db
        $result = Watch::find()
        ->where( [ 'id' => $watchId])
        ->exists(); 

        //if not exist return not found handled by site/error
        if(!$result){
            throw new NotFoundHttpException("This watch does not exist");
        }

        //render detail page, vue will get the param from the route
        return $this->render('detail');
    }

    /**
     * Displays /watch/edit page.
     *
     * @return string
     */
    public function actionEdit()  
    {
        return $this->render('edit');
    }
}
