<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\LocalitzacionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Localitzacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localitzacions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Localitzacions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'localitzacio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
