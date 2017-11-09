<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\PartituresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partitures-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_autor') ?>

    <?= $form->field($model, 'titol') ?>

    <?= $form->field($model, 'fk_localitzacio') ?>

    <?= $form->field($model, 'orq_simfonica') ?>

    <?php // echo $form->field($model, 'orq_classica') ?>

    <?php // echo $form->field($model, 'corda') ?>

    <?php // echo $form->field($model, 'orq_corda') ?>

    <?php // echo $form->field($model, 'vent') ?>

    <?php // echo $form->field($model, 'cambra_mixta') ?>

    <?php // echo $form->field($model, 'partitura') ?>

    <?php // echo $form->field($model, 'particella') ?>

    <?php // echo $form->field($model, 'copia_seguretat') ?>

    <?php // echo $form->field($model, 'fk_genere') ?>

    <?php // echo $form->field($model, 'plantilla') ?>

    <?php // echo $form->field($model, 'num_catalogacio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
