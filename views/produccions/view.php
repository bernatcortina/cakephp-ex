<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Produccions */

$ext = explode(".", $model->fitxa);
$imatge = '../../fitxes_produccions/'.$ext[0].'/'.$model->fitxa;


$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Produccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="produccions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nom',
            'data',
            [
                'attribute'=>'fitxa', 
                'format'=>'raw', 
                'value'=>Html::a($model->fitxa,$imatge,['target'=>'_blank'])
            ],
        ],
    ]) ?>

</div>
