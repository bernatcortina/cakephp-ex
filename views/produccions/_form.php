<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\widgets\FileInput;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Produccions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produccions-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'fitxa_prod')->widget(FileInput::classname(), [
    		'options' => ['accept' => 'jpg, gif, png, tif, bmp, pdf, doc'],
    		// 'pluginOptions'=>[
      //               'showPreview' => true,
      //               'showCaption' => false,
      //               'elCaptionText' => '#customCaption',
      //               'allowedFileExtensions'=>['jpg','gif','png'],
      //           ],
    	]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
