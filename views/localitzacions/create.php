<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\Localitzacions */

$this->title = 'Crear Localitzacions';
$this->params['breadcrumbs'][] = ['label' => 'Localitzacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localitzacions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
