<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\Partitures */

$this->title = 'Crear Partitures';
$this->params['breadcrumbs'][] = ['label' => 'Partitures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partitures-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <br />

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
