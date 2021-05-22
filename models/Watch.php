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
 * @property float $price
 * @property int $fk_header
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
            [['serial_number', 'brand', 'model', 'name', 'price', 'fk_header'], 'required'],
            [['price'], 'number'],
            [['fk_header'], 'integer'],
            [['serial_number'], 'string', 'max' => 20],
            [['brand', 'model', 'name'], 'string', 'max' => 35],
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
        ];
    }


    /**
     * @return ActiveQuery
     */
    public function getHeader()
    {
        return $this->hasOne(Header::class, ['id' => 'fk_header'])->with('images'); //-->@Header.php
    }


    public function getPageModel($watchId)
    {
        $watchHeaders = Watch::find()
        ->where(['watch.id' => $watchId])
        ->with('header') //include relations
        ->asArray() // stream array
        ->one(); // single

        return $watchHeaders;
    }
    

}
