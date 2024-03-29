<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */

$this->title = $model->idEvento;
$this->params['breadcrumbs'][] = ['label' => 'Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idEvento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idEvento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idEvento',
            'Sigla',
            'Descricao',
            'local',
            'DataIni',
            'DataFim',
            'Hora',
            'Vagas',
            'cargaHoraria',
            'Tipo_idTipo',
            'imagem',
            'Usuario_idUsuario',
            'detalhe:ntext',
            'horafim',
            'allow',
        ],
    ]) ?>

</div>
