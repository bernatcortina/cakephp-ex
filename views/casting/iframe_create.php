<link rel='stylesheet' type='text/css' href='../../web/css/site.css' />
<link rel='stylesheet' type='text/css' href='../../web/assets/273589de/css/bootstrap.css' />


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

    <?= $this->render('iframe_form', [
        'model' => $model,
    ]) ?>

</div>
