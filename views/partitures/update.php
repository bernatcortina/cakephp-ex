<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Partitures */

$this->title = 'Modificar Partitures: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Partitures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="partitures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
