<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quantidade')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'precoVenda')->textInput() ?>

    <?= $form->field($model, 'prod_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

   

</div>
