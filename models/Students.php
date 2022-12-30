<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Students".
 *
 * @property string|null $First_name
 * @property string|null $Second_name
 * @property string|null $class_name
 * @property string $Reg_number
 *
 * @property Classes $className
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Reg_number'], 'required'],
            [['First_name', 'Second_name', 'class_name', 'Reg_number'], 'string', 'max' => 50],
            [['Reg_number'], 'unique'],
            [['class_name'], 'exist', 'skipOnError' => true, 'targetClass' => Classes::class, 'targetAttribute' => ['class_name' => 'class_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'First_name' => 'First Name',
            'Second_name' => 'Second Name',
            'class_name' => 'Class Name',
            'Reg_number' => 'Reg Number',
        ];
    }

    /**
     * Gets query for [[ClassName]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClassName()
    {
        return $this->hasOne(Classes::class, ['class_name' => 'class_name']);
    }
}
