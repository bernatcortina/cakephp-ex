<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Autors */

$this->title = 'Modificar Autor: ' . ' ' . $model->autor;
$this->params['breadcrumbs'][] = ['label' => 'Autors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->autor, 'url' => ['view', 'id' => $model->autor]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="autors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
