<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_icons".
 *
 * @property int $id
 * @property int $fk_detail
 * @property string $label
 * @property string $value
 * @property string $icon_path
 */
class DetailIcons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_icons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_detail', 'label', 'value', 'icon_path'], 'required'],
            [['fk_detail'], 'integer'],
            [['label', 'value'], 'string', 'max' => 60],
            [['icon_path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_detail' => 'Fk Detail',
            'label' => 'Label',
            'value' => 'Value',
            'icon_path' => 'Icon Path',
        ];
    }

    
}
