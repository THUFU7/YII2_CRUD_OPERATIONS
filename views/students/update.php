<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Students $model */

$this->title = 'Update Students: ' . $model->Reg_number;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Reg_number, 'url' => ['view', 'Reg_number' => $model->Reg_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="students-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
