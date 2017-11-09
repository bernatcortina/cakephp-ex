<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Musics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="musics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cognoms')->textInput(['maxlength' => 39]) ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => 22]) ?>

    <?= $form->field($model, 'instrument')->textInput(['maxlength' => 24]) ?>

    <?= $form->field($model, 'id_instrument')->textInput() ?>

    <?= $form->field($model, 'data_naix')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'lloc')->textInput(['maxlength' => 31]) ?>

    <?= $form->field($model, 'adresa')->textInput(['maxlength' => 58]) ?>

    <?= $form->field($model, 'cp')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'poblacio')->textInput(['maxlength' => 39]) ?>

    <?= $form->field($model, 'comarca')->textInput(['maxlength' => 21]) ?>

    <?= $form->field($model, 'telefon')->textInput(['maxlength' => 31]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'tel_mobil')->textInput(['maxlength' => 82]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'dni')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'num_ss')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'num_cc')->textInput(['maxlength' => 26]) ?>

    <?= $form->field($model, 'aseguransa_instrument')->textInput(['maxlength' => 29]) ?>

    <?= $form->field($model, 'titular')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'projecte_pedagogic')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'preu_assistencia')->textInput() ?>

    <?= $form->field($model, 'preu_concert')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
