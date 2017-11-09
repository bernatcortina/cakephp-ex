<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cognoms')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'empresa')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'telefon')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
