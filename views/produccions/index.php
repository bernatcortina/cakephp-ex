<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProduccionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produccions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produccions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Produccions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nom',
            'data',
            'fitxa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
