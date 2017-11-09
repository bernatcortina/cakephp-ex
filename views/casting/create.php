<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\Casting */

// $this->title = 'Create Casting';
// $this->params['breadcrumbs'][] = ['label' => 'Castings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="casting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
