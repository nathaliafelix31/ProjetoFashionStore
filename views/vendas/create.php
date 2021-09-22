<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vendas */

$this->title = 'Create Vendas';
$this->params['breadcrumbs'][] = ['label' => 'Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
