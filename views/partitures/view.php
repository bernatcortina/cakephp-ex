<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\Partitures */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Partitures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partitures-view">

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
            #'fk_autor',
            [
                'attribute'=>'fk_autor',
                'value'=>$model->fkAutor->autor,
            ],
            'titol',
            #'fk_localitzacio',
            [
                'attribute'=>'fk_localitzacio',
                'value'=>$model->fkLocalitzacio->localitzacio,
            ],
            #'orq_simfonica',
            [
                'attribute'=>'orq_simfonica',
                'format'=>'raw',
                'value'=>$model->orq_simfonica == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'orq_classica',
            [
                'attribute'=>'orq_classica',
                'format'=>'raw',
                'value'=>$model->orq_classica == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'corda',
            [
                'attribute'=>'corda',
                'format'=>'raw',
                'value'=>$model->corda == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'orq_corda',
            [
                'attribute'=>'orq_corda',
                'format'=>'raw',
                'value'=>$model->orq_corda == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'vent',
            [
                'attribute'=>'vent',
                'format'=>'raw',
                'value'=>$model->vent == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'cambra_mixta',
            [
                'attribute'=>'cambra_mixta',
                'format'=>'raw',
                'value'=>$model->cambra_mixta == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'partitura',
            [
                'attribute'=>'partitura',
                'format'=>'raw',
                'value'=>$model->partitura == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'particella',
            [
                'attribute'=>'particella',
                'format'=>'raw',
                'value'=>$model->particella == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'copia_seguretat',
            [
                'attribute'=>'copia_seguretat',
                'format'=>'raw',
                'value'=>$model->copia_seguretat == 1 ? '<span class="label label-success">Si</span>' : '<span class="label label-danger">No</span>',
            ],
            #'fk_genere',
            [
                'attribute'=>'fk_genere',
                'value'=>$model->fkGenere->genere,
            ],
            'plantilla',
            'num_catalogacio',
        ],
    ]) ?>

</div>
