<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\grid\EditableColumn;
use kartik\editable\Editable;
use kartik\export\ExportMenu;
use kartik\widgets\Typeahead;
use yii\helpers\ArrayHelper;
use kartik\popover\PopoverX;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\CastingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'INSCRITS CASTING GOYESCAS';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="casting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Afegir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            'id',
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'nom',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'cognoms',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'data_naix',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'nif',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'adresa',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'cp',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'poblacio',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'comarca',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'telf_mobil',
                'editableOptions' => [
                    'format' => Editable::FORMAT_LINK,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            'email:email',
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'formacio_teatral',
                'editableOptions' => [
                    'format' => Editable::FORMAT_BUTTON,
                    'placement' => PopoverX::ALIGN_LEFT,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'formacio_dansa',
                'editableOptions' => [
                    'format' => Editable::FORMAT_BUTTON,
                    'placement' => PopoverX::ALIGN_LEFT,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'formacio_arts',
                'editableOptions' => [
                    'format' => Editable::FORMAT_BUTTON,
                    'placement' => PopoverX::ALIGN_LEFT,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'formacio_musical',
                'editableOptions' => [
                    'format' => Editable::FORMAT_BUTTON,
                    'placement' => PopoverX::ALIGN_LEFT,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
            [   
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'observacions',
                'editableOptions' => [
                    'format' => Editable::FORMAT_BUTTON,
                    'placement' => PopoverX::ALIGN_LEFT,
                    'size' => 'lg',
                    'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                    'options' => [
                        'class'=>'form-control',
                    ],
                ],
            ],
        ],
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'pjax' => true, // pjax is set to always true for this demo
        'toolbar' => [

            '{export}',
            //Editat el fitxer vendor/kartik-v/yii2-grid/gridview.php alla buscar pagination alla buscar un comentari
            // '{toggleData}',

        ],
        // set export properties
        'export' => [
            'fontAwesome' => false,
            'label' => 'Exportar',
            'target' => '_self',
            'options' => [
                'class' => 'btn btn-success',
            ],
            'showConfirmAlert' => false,
        ],
        'exportConfig' => [
                GridView::PDF => [
                    'filename' => 'INSCRITS_CASTING_GOYESCAS',
                    'config' => [
                        'methods' => [
                            'SetHeader' => [
                                ['odd' => 'odd', 'even' => 'odd2']
                            ],
                            'SetFooter' => [
                                ['odd' => 'even', 'even' => 'even']
                            ],
                        ],
                        'options' => [
                            'title' => 'INSCRITS_CASTING_GOYESCAS',
                            'subject' => 'OJC',
                            // 'keywords' => Yii::t('kvgrid', 'krajee, grid, export, yii2-grid, pdf')
                        ],
                    ],
                ],
                GridView::EXCEL => [
                    'filename' => 'INSCRITS_CASTING_GOYESCAS',
                ],

        ],
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'panel' => [
            'type' => GridView::TYPE_INFO,
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i>  Inscrits Casting GOYESCAS</h3>',
        ],
    ]); ?>

</div>
