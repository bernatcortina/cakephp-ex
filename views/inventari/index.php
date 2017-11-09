<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\Inventari;
use app\models\InventariSearch;
use app\models\Personal;
use app\models\PersonalSearch;
use kartik\grid\EditableColumn;
use kartik\editable\Editable;
use kartik\export\ExportMenu;
use kartik\widgets\Typeahead;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InventariSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventari';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventari-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Afegir element a l\'inventari', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'ubicacio',
            'nom',
            'descripcio',
            'valor',
            'data_sortida',
            [
                'class' => '\kartik\grid\DataColumn',
                'attribute'=> 'responsable_sortida',
                'value' => function($model) { return $model->responsableSortida->nom .' '. $model->responsableSortida->cognoms ;},
                'pageSummary' => true
            ],
            'lloc_sortida',
            'data_entrada',
            [
                'class' => '\kartik\grid\DataColumn',
                'attribute'=> 'responsable_entrada',
                'value' => function($model) { return $model->responsableEntrada->nom .' '. $model->responsableEntrada->cognoms ;},
                'pageSummary' => true
            ],
            'observacions',
            

            ['class' => 'yii\grid\ActionColumn'],
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
                    'filename' => 'Inventari',
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
                            'title' => 'Inventari',
                            'subject' => 'OJC',
                            // 'keywords' => Yii::t('kvgrid', 'krajee, grid, export, yii2-grid, pdf')
                        ],
                    ],
                ],
                GridView::EXCEL => [
                    'filename' => 'Inventari',
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
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i>  Inventari</h3>',
        ],


    ]); ?>

</div>
