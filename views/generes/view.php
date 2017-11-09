<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\Generes */

$this->title = $model->genere;
$this->params['breadcrumbs'][] = ['label' => 'Gèneres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Segur que vols eliminar-ho?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'genere',
        ],
    ]) ?>

</div>
