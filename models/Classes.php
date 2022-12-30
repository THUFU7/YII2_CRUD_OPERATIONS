<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Classes".
 *
 * @property string $class_name
 */
class Classes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Classes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class_name'], 'required'],
            [['class_name'], 'string', 'max' => 50],
            [['class_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'class_name' => 'Class Name',
        ];
    }
}
