<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PessoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pessoas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute'=>'nome',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o nome do cliente...'
                ], 
            ],

            //'sexo',
            [
                'attribute'=>'cpf',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o CPF do cliente...'
                ], 
            ],
            //'rg',
            //'datanascimento',
            //'email:email',
            //'telefone',
            //'endereco_id',
            //'obs',
            //'login',
            //'senha',
            //'nivelacesso',

            [
                'class' => 'yiigrid\ActionColumn',
                'template'=> '{update}{delete}',
                'buttons'=>[ 
                    'delete' => function($url, $model){
                        return Html::a('<span class"glyphicon glyphicon-trash"></span>',['delete', 'id'=>$model->id],[
                            'class'=>'',
                            'data' =>[
                                'confirm' => 'Deseja realmente excluir este item?',
                            'method'=>'post',
                            ],
                        ]);
                    }
                ]
            ]
        ],
    ]); ?>


</div>
