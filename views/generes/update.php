<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Generes */

$this->title = 'Modificar Gèneres: ' . ' ' . $model->genere;
$this->params['breadcrumbs'][] = ['label' => 'Gèneres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->genere, 'url' => ['view', 'id' => $model->genere]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="generes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
