<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Localitzacions */

$this->title = 'Modificar Localització: ' . ' ' . $model->localitzacio;
$this->params['breadcrumbs'][] = ['label' => 'Localitzacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->localitzacio, 'url' => ['view', 'id' => $model->localitzacio]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="localitzacions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
