<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "header".
 *
 * @property int $id
 * @property string $tag
 * @property string $description
 * @property string $headline
 * 
 */
class Header extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'header';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tag', 'description', 'headline'], 'required', 'message' => 'Feld ist pflicht'],
            [['tag', 'headline'], 'string', 'max' => 35],
            [['description'], 'string', 'max' => 250],          

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
            'description' => 'Description',
            'headline' => 'Headline',
        ];
    }

      /**
     * map relations
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['fk_header' => 'id']); 
    }

}
