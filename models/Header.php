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
 * @property int $fk_preview
 * @property file $eventImage
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
            [['tag', 'description', 'headline', 'fk_preview'], 'required'],
            [['fk_preview'], 'integer'],
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
            'fk_preview' => 'Fk Preview',
        ];
    }

    /**
     * map relations
     * @return \yii\db\ActiveQuery
     */
    public function getPreview()
    {
        return $this->hasOne(Preview::className(), ['id' => 'fk_preview'])->with('images'); // --> @Preview.php
    }



   
}
