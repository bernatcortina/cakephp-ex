<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\Casting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="casting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => 100])->label('Nom*') ?>

    <?= $form->field($model, 'cognoms')->textInput(['maxlength' => 100])->label('Cognoms*') ?>

    <?= $form->field($model, 'data_naix')->textInput()->label('Data de naixement* (AAAA-MM-DD)') ?>

    <?= $form->field($model, 'nif')->textInput(['maxlength' => 100])->label('NIF*') ?>

    <?= $form->field($model, 'adresa')->textInput(['maxlength' => 100])->label('Adreça Postal*') ?>

    <?= $form->field($model, 'cp')->textInput(['maxlength' => 100])->label('Codi Postal*') ?>

    <?= $form->field($model, 'poblacio')->textInput(['maxlength' => 100])->label('Població*') ?>

    <?= $form->field($model, 'comarca')->textInput(['maxlength' => 100])->label('Comarca*') ?>

    <?= $form->field($model, 'telf_mobil')->textInput()->label('Telèfon mòbil*') ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100])->label('E-mail*') ?>

    <?= $form->field($model, 'formacio_teatral')->textInput(['maxlength' => 500])->label('Tens experiència teatral? Quina?*') ?>

    <?= $form->field($model, 'formacio_dansa')->textInput(['maxlength' => 500])->label('Tens experiència de ballar en grup ja sigui colla sardanista, esbart o grup de dansa en general? Quina?*') ?>

    <?= $form->field($model, 'formacio_arts')->textInput(['maxlength' => 500])->label('Has cursat alguns estudis d\'arts escèniques? Quins?*') ?>

    <?= $form->field($model, 'formacio_musical')->textInput(['maxlength' => 500])->label('Tens nocions de música?*') ?>

    <?= $form->field($model, 'observacions')->textInput(['maxlength' => 500])->label('Observacions') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Enviar dades' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
