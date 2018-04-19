<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefkabupatenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-kabupaten-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idKabupaten') ?>

    <?= $form->field($model, 'NamaKabupaten') ?>

    <?= $form->field($model, 'kodeKabupaten') ?>

    <?= $form->field($model, 'idPropinsi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>