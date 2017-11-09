<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Casting */

$this->title = 'Update: ' . ' ' . $model->nom.' '.$model->cognoms;
// $this->params['breadcrumbs'][] = ['label' => 'Castings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="casting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
