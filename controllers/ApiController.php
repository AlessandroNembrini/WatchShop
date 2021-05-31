<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\Watch;

class ApiController extends Controller
{  

     /**
     *
     * @return string
     */
    public function actionHeader($watchId)
    {
        //get request obj
        $request = Yii::$app->request;
        //check if methode is get
       if($request->isGet){
            Yii::$app->response->format = Response::FORMAT_JSON;
            //get model for header component
            $model = new Watch();
            $watch = $model->getHeaderModel($watchId); //Piaget Altiplano Ultimate 910P           
            //return model
            return $watch;
       }
       else
        {   //Error handler will render error page...
           throw new yii\web\BadRequestHttpException;
        }     
    }
    

    /**
     *
     * @return string
     */
    public function actionDetail()
    {     
         //get request obj
         $request = Yii::$app->request;
         //check if methode is get
         if($request->isGet){
             Yii::$app->response->format = Response::FORMAT_JSON;
             $model = new Watch();
             $watch = $model->getDetailModel(1); //Piaget Altiplano Ultimate 910P   
             return $watch;
         }
         else
         {   
            throw new yii\web\BadRequestHttpException("Not allowed http methode");
         }     
    }

     /**
     *
     * @return string
     */
    public function actionDescription()
    {
         $request = Yii::$app->request;
         if($request->isGet){
             Yii::$app->response->format = Response::FORMAT_JSON;
             $model = new Watch();
             $watch = $model->getDescriptionModel(1); //Piaget Altiplano Ultimate 910P
             return $watch;
         }
         else
         {   
            //Error handler will render error page...
            throw new yii\web\BadRequestHttpException;
         }     
    }

     /**
     *
     * @return string
     */
    public function actionSpecification()
    {
         $request = Yii::$app->request;
         if($request->isGet){
             Yii::$app->response->format = Response::FORMAT_JSON;
             $model = new Watch();
             $watch = $model->getSpecificationModel(1); //Piaget Altiplano Ultimate 910P
             return $watch;
         }
         else
         {  
            throw new yii\web\BadRequestHttpException;
         }     
    }

}
