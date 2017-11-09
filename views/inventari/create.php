<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Inventari */

$this->title = 'Create Inventari';
$this->params['breadcrumbs'][] = ['label' => 'Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventari-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
