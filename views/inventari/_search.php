<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InventariSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventari-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ubicacio') ?>

    <?= $form->field($model, 'nom') ?>

    <?= $form->field($model, 'descripcio') ?>

    <?= $form->field($model, 'valor') ?>

    <?php // echo $form->field($model, 'data_sortida') ?>

    <?php // echo $form->field($model, 'responsable_sortida') ?>

    <?php // echo $form->field($model, 'lloc_sortida') ?>

    <?php // echo $form->field($model, 'data_entrada') ?>

    <?php // echo $form->field($model, 'responsable_entrada') ?>

    <?php // echo $form->field($model, 'observacions') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
