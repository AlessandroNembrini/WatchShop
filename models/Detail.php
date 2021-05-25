<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail".
 *
 * @property int $id
 * @property string $tag
 * @property string $headline
 */
class Detail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tag', 'headline'], 'required'],
            [['tag', 'headline'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag' => 'Tag',
            'headline' => 'Headline',
        ];
    }


     /**
     * map relations
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['fk_detail' => 'id']); 
    }

     /**
     * map relations
     * @return \yii\db\ActiveQuery
     */
    public function getIcons()
    {
        return $this->hasMany(DetailIcons::className(), ['fk_detail' => 'id']); 
    }



}
