<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\FileInput;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\DepDrop;
use kartik\checkbox\CheckboxX;
use kartik\tabs\TabsX;
use kartik\popover\PopoverX;

use app\models\Autors;
use app\models\Localitzacions;
use app\models\Generes;

/* @var $this yii\web\View */
/* @var $model app\Models\Partitures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partitures-form">

    <?php $form = ActiveForm::begin([
        'type'=>ActiveForm::TYPE_HORIZONTAL,
    ]); ?>

    <?= $form->field($model, 'num_catalogacio')->textInput() ?>

    <?= $form->field($model, 'fk_autor')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Autors::find()->asArray()->all(), 'id', 'autor'),
            'options' => [
                'placeholder' => 'Autor...',
            ],
        ]);
    ?>

    <?= $form->field($model, 'titol')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'fk_localitzacio')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Localitzacions::find()->asArray()->all(), 'id', 'localitzacio'),
            'options' => [
                'placeholder' => 'Localització...',
            ],
        ]);
    ?>

    <?= $form->field($model, 'orq_simfonica')->widget(Select2::classname(), [
            'value' => '2',
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
        ]);
    ?>

    <?= $form->field($model, 'orq_classica')->widget(Select2::classname(), [
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
            // 'options' => [
            //     'placeholder' => 'Orquestra Clàssica...',
            // ],
        ]);
    ?>

    <?= $form->field($model, 'corda')->widget(Select2::classname(), [
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
            // 'options' => [
            //     'placeholder' => 'Corda...',
            // ],
        ]);
    ?>

    <?= $form->field($model, 'orq_corda')->widget(Select2::classname(), [
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
            // 'options' => [
            //     'placeholder' => 'Orquestra Corda...',
            // ],
        ]);
    ?>

    <?= $form->field($model, 'vent')->widget(Select2::classname(), [
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
            // 'options' => [
            //     'placeholder' => 'Vent...',
            // ],
        ]);
    ?>

    <?= $form->field($model, 'cambra_mixta')->widget(Select2::classname(), [
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
            // 'options' => [
            //     'placeholder' => 'Cambra mixta...',
            // ],
        ]);
    ?>

    <?= $form->field($model, 'partitura')->widget(Select2::classname(), [
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
            // 'options' => [
            //     'placeholder' => 'Partitura...',
            // ],
        ]);
    ?>

    <?= $form->field($model, 'particella')->widget(Select2::classname(), [
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
            // 'options' => [
            //     'placeholder' => 'Particella...',
            // ],
        ]);
    ?>

    <?= $form->field($model, 'copia_seguretat')->widget(Select2::classname(), [
            'data' => [
                '0'=>'NO',
                '1'=>'SI',
            ],
            // 'options' => [
            //     'placeholder' => 'Còpia de Seguretat...',
            // ],
        ]);
    ?>

    <?= $form->field($model, 'fk_genere')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Generes::find()->asArray()->all(), 'id', 'genere'),
            'options' => [
                'placeholder' => 'Gènere...',
            ],
        ]);
    ?>

    <?= $form->field($model, 'plantilla')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <div class="boto-form">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success btn-lg' : 'btn btn-primary btn-lg']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
