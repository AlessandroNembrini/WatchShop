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

class ApiController extends Controller
{  
     /**
     *
     * @return string
     */
    public function actionHeader()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $model = new Watch();
        $watch = $model->getPageModel(1); //Piaget Altiplano Ultimate 910P
        
        return $watch;
    }

}
