<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\Localitzacions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="localitzacions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'localitzacio')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
