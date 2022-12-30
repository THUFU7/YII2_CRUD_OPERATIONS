<?php

use app\models\Classes;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Students $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'Reg_number')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'First_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Second_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_name')->dropDownList(
        ArrayHelper::map(Classes::find()->all(), 'class_name', 'class_name'),
        ['prompt'=>'Select class']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>