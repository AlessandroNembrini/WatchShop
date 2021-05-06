<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Watch;

class WatchController extends Controller
{
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
     * test to check json-structure 
     *
     * @return string
     */
    public function actionGetJson()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $model = new Watch();
        $watch = $model->getPageModel(1);
        
        return $watch;
    }

    /**
     * Displays /watch/detail page.
     *
     * @return string
     */
    public function actionDetail($id = 1)  
    {
        //create watch domain model
        $model = new Watch();
        //get pageModel from Watch active record
        $pageModel = $model->getPageModel($id);

        //pass pageModel as json to global view-data
        //accessed by script tag in main.php and passed as data to vue instance
        // in php we can pass the data as v-binf to components
        Yii::$app->view->params['response'] = json_encode($pageModel);

        return $this->render('detail');
    }
}
