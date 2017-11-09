<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Produccions */

$this->title = 'Create Produccions';
$this->params['breadcrumbs'][] = ['label' => 'Produccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produccions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
