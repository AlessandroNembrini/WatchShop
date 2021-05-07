<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property string $preview_image
 * @property string $thumbnail_image
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
            [['preview_image', 'thumbnail_image', 'fk_preview'], 'required'],
            [['fk_preview'], 'integer'],
            [['preview_image', 'thumbnail_image'], 'string', 'max' => 255],
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
