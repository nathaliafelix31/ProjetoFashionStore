<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contem */

$this->title = 'Create Contem';
$this->params['breadcrumbs'][] = ['label' => 'Contems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
