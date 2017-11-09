<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MusicsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="musics-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cognoms') ?>

    <?= $form->field($model, 'nom') ?>

    <?= $form->field($model, 'instrument') ?>

    <?= $form->field($model, 'id_instrument') ?>

    <?php // echo $form->field($model, 'data_naix') ?>

    <?php // echo $form->field($model, 'lloc') ?>

    <?php // echo $form->field($model, 'adresa') ?>

    <?php // echo $form->field($model, 'cp') ?>

    <?php // echo $form->field($model, 'poblacio') ?>

    <?php // echo $form->field($model, 'comarca') ?>

    <?php // echo $form->field($model, 'telefon') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'tel_mobil') ?>

    <?php // echo $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'dni') ?>

    <?php // echo $form->field($model, 'num_ss') ?>

    <?php // echo $form->field($model, 'num_cc') ?>

    <?php // echo $form->field($model, 'aseguransa_instrument') ?>

    <?php // echo $form->field($model, 'titular') ?>

    <?php // echo $form->field($model, 'projecte_pedagogic') ?>

    <?php // echo $form->field($model, 'preu_assistencia') ?>

    <?php // echo $form->field($model, 'preu_concert') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
