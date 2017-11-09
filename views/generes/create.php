<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\Generes */

$this->title = 'Crear Gènere';
$this->params['breadcrumbs'][] = ['label' => 'Gèneres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
