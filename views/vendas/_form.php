<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Produto;
use app\models\Pessoa;


/* @var $this yii\web\View */
/* @var $model app\models\Vendas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'datavenda')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'desconto')->textInput() ?>

    <?= $form->field($model, 'precototal')->textInput() ?>

    <?= $form->field($model, 'qtd')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'produto_id')->
       dropDownList(ArrayHelper::map(Produto::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um produto'] )
    ?>

    <?= $form->field($model, 'pessoa_id')->
       dropDownList(ArrayHelper::map(Pessoa::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um Cliente'] )
    ?>


    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
