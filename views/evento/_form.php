<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Sigla')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descricao')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'local')->textInput(['maxlength' => true]) ?>

// - combo box
    <?= $form->field($model, 'local')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>
//


    <?= $form->field($model, 'DataIni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DataFim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hora')->textInput() ?>

    <?= $form->field($model, 'Vagas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargaHoraria')->textInput() ?>

    <?= $form->field($model, 'Tipo_idTipo')->textInput() ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Usuario_idUsuario')->textInput() ?>

    <?= $form->field($model, 'detalhe')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'horafim')->textInput() ?>

    <?= $form->field($model, 'allow')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
