<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VendasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'datavenda') ?>

    <?= $form->field($model, 'desconto') ?>

    <?= $form->field($model, 'precototal') ?>

    <?= $form->field($model, 'qtd') ?>

    <?php // echo $form->field($model, 'produto_id') ?>

    <?php // echo $form->field($model, 'pessoa_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
