<link rel='stylesheet' type='text/css' href='../../web/css/site.css' />
<link rel='stylesheet' type='text/css' href='../../web/assets/273589de/css/bootstrap.css' />

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

?>

<div class="casting-view">

    <h2>Les vostres dades s'han enviat correctament. Gràcies.</h2>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'nom',
            'cognoms',
            'data_naix',
            'nif',
            'adresa',
            'cp',
            'poblacio',
            'comarca',
            'telf_mobil',
            'email:email',
            'formacio_teatral',
            'formacio_dansa',
            'formacio_arts',
            'formacio_musical',
            'observacions',
        ],
    ]) ?>

    <div class="form-group">
        <a href='javascript:inici()'>
            <?= Html::Button('Tornar a l\'inici', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </a>
    </div>

</div>

<script type="text/javascript">
    function inici(){ // funció per sortir del iframe i tornar a la finestra "pare"
        parent.location.href = "<?php echo 'http://www.ojc.cat'; ?>";
    }
</script>