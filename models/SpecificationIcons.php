<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "specification_icons".
 *
 * @property int $id
 * @property int $fk_specification
 * @property string $label
 * @property string $value
 * @property string $icon_path
 */
class SpecificationIcons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'specification_icons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_specification', 'label', 'value', 'icon_path'], 'required'],
            [['fk_specification'], 'integer'],
            [['label'], 'string', 'max' => 35],
            [['value'], 'string', 'max' => 45],
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
            'fk_specification' => 'Fk Specification',
            'label' => 'Label',
            'value' => 'Value',
            'icon_path' => 'Icon Path',
        ];
    }
}
