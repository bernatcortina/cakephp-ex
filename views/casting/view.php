<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\Casting */

$this->title = $model->nom.' '.$model->cognoms;
// $this->params['breadcrumbs'][] = ['label' => 'Castings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="casting-view">

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
            'cognoms',
            'data_naix',
            'nif',
            'adresa',
            'cp',
            'poblacio',
            'comarca',
            'telf_mobil',
            'email:email',
            'formacio_teatral',
            'formacio_dansa',
            'formacio_arts',
            'formacio_musical',
            'observacions',
        ],
    ]) ?>

</div>
