<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\Partitures;
use app\models\PartituresSearch;
use app\models\Autors;
use app\models\AutorsSearch;
use kartik\grid\EditableColumn;
use kartik\editable\Editable;
use kartik\export\ExportMenu;
use kartik\widgets\Typeahead;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\PartituresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Partitures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partitures-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Afegir Partitura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= 
        GridView::widget([
            'dataProvider'=> $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                [
                    'class' => '\kartik\grid\DataColumn',
                    'attribute'=> 'num_catalogacio',
                    'value'=> 'num_catalogacio',
                    //'header' => 'Num.<br />Catalo-<br />gació',
                    'pageSummary' => true
                ],
                [
                    'class' => '\kartik\grid\DataColumn',
                    'attribute'=>'fkAutor.autor',
                    'value'=> 'fkAutor.autor',
                    'filter'=>ArrayHelper::map(Autors::find()->orderBy('autor')->asArray()->all(), 'autor', 'autor'),
                    // ------------------------------------
                    // 'class' => '\kartik\grid\DataColumn',
                    // 'attribute'=> 'fkAutor.autor',
                    // 'value'=> 'fkAutor.autor',
                    // 'pageSummary' => true,
                    // 'filter' => Typeahead::widget([
                    //     'model' => $searchModel,
                    //     'attribute'=> 'fkAutor.autor',
                    //     'dataset'=>[
                    //         [
                    //             'local' =>ArrayHelper::map(Autors::find()->orderBy('autor')->asArray()->all(), 'id', 'autor'),
                    //         ],
                    //     ],
                    // ]),
                    // ------------------------------------
                    // ------------------------------------
                    // 'class' => '\kartik\grid\DataColumn',
                    // 'attribute'=> 'fkAutor.autor',
                    // 'value'=> 'fkAutor.autor',
                    // 'pageSummary' => true
                    // ------------------------------------
                ],
                [
                    'class' => '\kartik\grid\DataColumn',
                    'attribute'=> 'titol',
                    'value'=> 'titol',
                    'pageSummary' => true
                ],
                [
                    'class' => '\kartik\grid\DataColumn',
                    'attribute'=> 'fk_localitzacio',
                    'value'=> 'fkLocalitzacio.localitzacio',
                    'pageSummary' => true
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'orq_simfonica',
                    'header' => 'Orq.<br />Simfònica',
                    'value'=> 'orq_simfonica',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'orq_classica',
                    'value'=> 'orq_classica',
                    'header' => 'Orq.<br />Clàssica',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'corda',
                    'value'=> 'corda',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'orq_corda',
                    'value'=> 'orq_corda',
                    'header' => 'Orq.<br />Corda',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'vent',
                    'value'=> 'vent',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'cambra_mixta',
                    'value'=> 'cambra_mixta',
                    'header' => 'Cambra<br />Mixta',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'partitura',
                    'value'=> 'partitura',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'particella',
                    'value'=> 'particella',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\BooleanColumn',
                    'attribute'=> 'copia_seguretat',
                    'value'=> 'copia_seguretat',
                    'header' => 'Còpia<br />Seguretat',
                    'pageSummary' => true,
                    'vAlign' => 'middle',
                ],
                [
                    'class' => '\kartik\grid\DataColumn',
                    'attribute'=> 'fk_genere',
                    'value'=> 'fkGenere.genere',
                    'pageSummary' => true
                ],
                [
                    'class' => '\kartik\grid\DataColumn',
                    'attribute'=> 'plantilla',
                    'value'=> 'plantilla',
                    'pageSummary' => true
                ],
                [
                    'class' => 'kartik\grid\ActionColumn',
                    'dropdown' => false,
                    'vAlign' => 'middle',
                    'header' => 'Accions',
                    'viewOptions' => ['title'=>'Veure','data-toggle'=>'tooltip'],
                    'updateOptions' => ['title'=>'Modificar','data-toggle'=>'tooltip'],
                    'deleteOptions' => ['title'=>'Eliminar','data-toggle'=>'tooltip'],
                    // 'buttons' => [
                    //     'view'=> function($url, $model) {
                    //         return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['alumnes/view?id='.$model->dni]);
                    //     },
                    // ],
                ],
            ],
            'headerRowOptions'=>['class'=>'kartik-sheet-style'],
            'filterRowOptions'=>['class'=>'kartik-sheet-style'],
            'pjax' => true, // pjax is set to always true for this demo
            // 'beforeHeader'=>[
            //     [
            //         'columns'=>[
            //             ['content'=>'Dades dels Alumnes', 'options'=>['colspan'=>5, 'class'=>'text-center warning']],
            //             ['content'=>'Dades dels Professors', 'options'=>['colspan'=>3, 'class'=>'text-center warning']],
            //             ['content'=>'Eines', 'options'=>['colspan'=>3, 'class'=>'text-center warning']],
            //         ],
            //         'options'=>['class'=>'skip-export'] // remove this row from export
            //     ]
            // ],
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
                        'filename' => 'Partitures',
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
                                'title' => 'sdasdsadsa',
                                'subject' => 'aaaaaaaaa',
                                // 'keywords' => Yii::t('kvgrid', 'krajee, grid, export, yii2-grid, pdf')
                            ],
                        ],
                    ],
                    GridView::EXCEL => [
                        'filename' => 'Partitures',
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
                'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  Partitures</h3>',
            ],
            'rowOptions' => function ($model, $index, $widget, $grid){
                if (($model->fk_autor=='ARREGLAR') || ($model->fk_localitzacio=='ARREGLAR') || ($model->fk_genere=='ARREGLAR') || ($model->plantilla=='ARREGLAR')) {
                    return ['class' => GridView::TYPE_DANGER ];
                }
                else { return [];
                }
            },
        ]);
    ?>




</div>
