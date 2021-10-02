<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contem-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Contem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'quantidade',
            //'precoVenda',
            //'prod_id',
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
