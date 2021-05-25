<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "watch".
 *
 * @property int $id
 * @property string $serial_number
 * @property string $brand
 * @property string $model
 * @property string $name
 * @property string $price
 * @property int $fk_header
 * @property int $fk_detail
 * @property int $fk_description
 */
class Watch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'watch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_number', 'brand', 'model', 'name', 'price', 'fk_header', 'fk_detail', 'fk_description', 'fk_specification'], 'required'],
            [['fk_header', 'fk_detail', 'fk_description'], 'integer'],
            [['serial_number'], 'string', 'max' => 20],
            [['brand', 'model', 'name'], 'string', 'max' => 35],
            [['price'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'serial_number' => 'Serial Number',
            'brand' => 'Brand',
            'model' => 'Model',
            'name' => 'Name',
            'price' => 'Price',
            'fk_header' => 'Fk Header',
            'fk_detail' => 'Fk Detail',
            'fk_description' => 'Fk Description',
            'fk_specification' => 'Fk Description',
            
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getHeader()
    {
        return $this->hasOne(Header::class, ['id' => 'fk_header'])->with('images'); //-->@Header.php
    }


     /**
     * @return ActiveQuery
     */
    public function getDetail()
    {
        return $this->hasOne(Detail::class, ['id' => 'fk_detail'])->with('icons')->with('images'); 
    }

    /**
     * @return ActiveQuery
     */
    public function getDescription()
    {
        return $this->hasOne(Description::class, ['id' => 'fk_description'])->with('images'); 
    }

    /**
     * @return ActiveQuery
     */
    public function getSpecification()
    {
        return $this->hasOne(Specification::class, ['id' => 'fk_specification'])->with('icons')->with('images'); 
    }


    public function getHeaderModel($watchId)
    {
        $watchHeaderModel = Watch::find()
        ->where(['watch.id' => $watchId])
        ->with('header') //include relations      
        ->asArray() // stream array
        ->one(); // single

        return $watchHeaderModel;
    }
    

    public function getDetailModel($watchId)
    {
        $watchDetailModel = Watch::find()
        ->where(['watch.id' => $watchId])
        ->with('detail') //include relations
        ->asArray() // stream array
        ->one(); // single

        return $watchDetailModel;
    }

    public function getDescriptionModel($watchId)
    {
        $watchDescriptionModel = Watch::find()
        ->where(['watch.id' => $watchId])
        ->with('description') //include relations
        ->asArray() // stream array
        ->one(); // single

        return $watchDescriptionModel;
    }


    public function getSpecificationModel($watchId)
    {
        $watchSpecificationModel = Watch::find()
        ->where(['watch.id' => $watchId])
        ->with('description') //include relations
        ->asArray() // stream array
        ->one(); // single

        return $watchSpecificationModel;
    }


}
