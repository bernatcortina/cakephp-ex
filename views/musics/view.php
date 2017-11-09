<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Musics */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Musics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="musics-view">

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
            'cognoms',
            'nom',
            'instrument',
            'id_instrument',
            'data_naix',
            'lloc',
            'adresa',
            'cp',
            'poblacio',
            'comarca',
            'telefon',
            'fax',
            'tel_mobil',
            'mail',
            'dni',
            'num_ss',
            'num_cc',
            'aseguransa_instrument',
            'titular',
            'projecte_pedagogic',
            'preu_assistencia',
            'preu_concert',
        ],
    ]) ?>

</div>
