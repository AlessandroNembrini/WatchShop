<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property string $preview-image
 * @property string $thumbnail-image
 * @property int $fk_preview
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preview-image', 'thumbnail-image', 'fk_preview'], 'required'],
            [['fk_preview'], 'integer'],
            [['preview-image', 'thumbnail-image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'preview-image' => 'Preview Image',
            'thumbnail-image' => 'Thumbnail Image',
            'fk_preview' => 'Fk Preview',
        ];
    }
}
