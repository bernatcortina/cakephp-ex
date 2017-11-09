<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\Casting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="casting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cognoms')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'data_naix')->textInput() ?>

    <?= $form->field($model, 'nif')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'adresa')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cp')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'poblacio')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'comarca')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'telf_mobil')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'formacio_teatral')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'formacio_dansa')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'formacio_arts')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'formacio_musical')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'observacions')->textInput(['maxlength' => 500]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Enviar dades' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
