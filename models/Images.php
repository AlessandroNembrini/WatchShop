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
 * @property int $fk_header
 */
class Images extends \yii\db\ActiveRecord
{

     /**
      * hold uploaded image
     * @var UploadedFile
     */
    public $imageFile;

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
            [['preview_image'], 'required'],
            [['fk_header'], 'integer'],
            [['preview_image'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'preview_image' => 'Preview Image',
            'fk_header' => 'Fk Header',
            'imageFile' => 'Bild',
        ];
    }

    public function upload()
    {
        //if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
       // } else {
           // return false;
        //}
    }

}
