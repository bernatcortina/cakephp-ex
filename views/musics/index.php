<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\grid\EditableColumn;
use kartik\editable\Editable;
use kartik\export\ExportMenu;
use kartik\widgets\Typeahead;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MusicsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Músics OJC';
$this->params['breadcrumbs'][] = $this->title;
$dataProvider->pagination->pageSize=12;


?>
<div class="musics-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nou Músic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            'id',
            'cognoms',
            'nom',
            'instrument',
            //'id_instrument',
            'telefon',
            // 'fax',
            'tel_mobil',
            'mail:email',
            // 'data_naix',
            'lloc',
            'adresa',
            'cp',
            'poblacio',
            'comarca',
            // 'dni',
            // 'num_ss',
            // 'num_cc',
            // 'aseguransa_instrument',
            // 'titular',
            // 'projecte_pedagogic',
            // 'preu_assistencia',
            // 'preu_concert',

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
            'label' => 'Exportar taula',
            'target' => '_self',
            'options' => [
                'class' => 'btn btn-success',
            ],
            'showConfirmAlert' => false,
        ],
        'exportConfig' => [
                GridView::PDF => [
                    'filename' => 'MUSICS_OJC',
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
                            'title' => 'MUSICS_OJC',
                            'subject' => 'OJC',
                            // 'keywords' => Yii::t('kvgrid', 'krajee, grid, export, yii2-grid, pdf')
                        ],
                    ],
                ],
                GridView::EXCEL => [
                    'filename' => 'MUSICS_OJC',
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
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i>  MÚSICS OJC</h3>',
        ],
    ]); ?>

</div>
