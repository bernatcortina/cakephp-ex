<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\CastingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="casting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nom') ?>

    <?= $form->field($model, 'cognoms') ?>

    <?= $form->field($model, 'data_naix') ?>

    <?= $form->field($model, 'nif') ?>

    <?php // echo $form->field($model, 'adresa') ?>

    <?php // echo $form->field($model, 'cp') ?>

    <?php // echo $form->field($model, 'poblacio') ?>

    <?php // echo $form->field($model, 'comarca') ?>

    <?php // echo $form->field($model, 'telf_mobil') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'formacio_teatral') ?>

    <?php // echo $form->field($model, 'formacio_dansa') ?>

    <?php // echo $form->field($model, 'formacio_arts') ?>

    <?php // echo $form->field($model, 'formacio_musical') ?>

    <?php // echo $form->field($model, 'observacions') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
