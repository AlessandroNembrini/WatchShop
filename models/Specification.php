<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "specification".
 *
 * @property int $id
 * @property string $tag
 * @property string $headline
 */
class Specification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'specification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tag', 'headline'], 'required'],
            [['tag', 'headline'], 'string', 'max' => 35],
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
        return $this->hasMany(Images::className(), ['fk_specification' => 'id']); 
    }

     /**
     * map relations
     * @return \yii\db\ActiveQuery
     */
    public function getIcons()
    {
        return $this->hasMany(DetailIcons::className(), ['fk_specification' => 'id']); 
    }

}
