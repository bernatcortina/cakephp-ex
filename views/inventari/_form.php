<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inventari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventari-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ubicacio')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'descripcio')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'data_sortida')->textInput() ?>

    <?= $form->field($model, 'responsable_sortida')->textInput() ?>

    <?= $form->field($model, 'lloc_sortida')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'data_entrada')->textInput() ?>

    <?= $form->field($model, 'responsable_entrada')->textInput() ?>

    <?= $form->field($model, 'observacions')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
