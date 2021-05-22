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
     * Displays /watch/detail page.
     *
     * @return string
     */
    public function actionDetail()  
    {
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
