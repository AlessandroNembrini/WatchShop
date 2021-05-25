<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "description".
 *
 * @property int $id
 * @property string $tag
 * @property string $headline
 * @property string $text1
 * @property string $text2
 */
class Description extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'description';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tag', 'headline', 'text1', 'text2'], 'required'],
            [['tag'], 'string', 'max' => 25],
            [['headline'], 'string', 'max' => 250],
            [['text1', 'text2'], 'string', 'max' => 500],
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
            'text1' => 'Text1',
            'text2' => 'Text2',
        ];
    }

      /**
     * map relations
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['fk_description' => 'id']); 
    }
}
