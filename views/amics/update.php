<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Amics */

$this->title = 'Actualitzar Amic: ' . ' ' . $model->numero;
$this->params['breadcrumbs'][] = ['label' => 'Amics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->numero, 'url' => ['view', 'id' => $model->numero]];
$this->params['breadcrumbs'][] = 'Actualitzar Amic';
?>
<div class="amics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
