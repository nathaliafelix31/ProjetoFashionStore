<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Coleção';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="web/css/style.css">
<div class="produto-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',

        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            
            'nome',
            
            
            [ 
                'class' => 'yii\grid\ActionColumn',
                'template'=> '{view}{update}{delete}',
                'buttons'=>[ 
                    'delete' => function($url, $model){
                      
                        return Html::a('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>',['delete', 'id'=>$model->id],[
                            'class'=>'',
                            'data' =>[
                                'confirm' => 'Deseja realmente excluir este item?',
                            'method'=>'post',
                            ],
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>
    <div class="row">  
      <div class="col-md-4">
          <div class="card" style="width: 18rem;">
              <?php echo Html::img('@web/assets/images/1.jpg',['alt'=>'Biquini', 'class'=>'card-img-top']); ?>
            <div class="card-body">
              <h5 class="card-title">Biquini Asa Delta Verde Militar</h5>
              <a href="#" class="btn btn-info">Comprar</a>
            </div>
          </div>
      </div>

      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <?php echo Html::img('@web/assets/images/3.jpg',['alt'=>'biquini', 'class'=>'card-img-top']); ?>
          <div class="card-body">
            <h5 class="card-title">Biquíni Noronha</h5>
            <a href="#" class="btn btn-info">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <?php echo Html::img('@web/assets/images/2.jpg',['alt'=>'biquini', 'class'=>'card-img-top']); ?>
          <div class="card-body">
            <h5 class="card-title">Biquíni Larissa</h5>
            <a href="#" class="btn btn-info">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <?php echo Html::img('@web/assets/images/4.jpg',['alt'=>'biquini', 'class'=>'card-img-top']); ?>
          <div class="card-body">
            <h5 class="card-title">Biquíni Beijocas</h5>
            <a href="#" class="btn btn-info">Comprar</a>
          </div>
        </div>

    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/5.jpeg',['alt'=>'biquini', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Biquíni Geovanna</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/6.jpg',['alt'=>'Short', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Short AnaBella</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/7.jpg',['alt'=>'Short', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Short Jeans</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/8.jpg',['alt'=>'Short', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Short Jeans</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/9.jpg',['alt'=>'Short', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Short Jeans</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/10.jpg',['alt'=>'Calça', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Calça Samara</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/11.jpg',['alt'=>'Calça', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Calça Jogger</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/12.jpg',['alt'=>'Calça', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Calça Jeans</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/13.jpg',['alt'=>'Calça', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Calça Jeans</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/14.PNG',['alt'=>'Vestido', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Vestido</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/15.jpg',['alt'=>'Vestido', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Vestido</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/16.jpg',['alt'=>'Vestido', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Vestido</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/17.jpg',['alt'=>'Vestido', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Vestido</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/18.PNG',['alt'=>'Vestido', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Vestido</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/19.jpg',['alt'=>'Vestido', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Vestido</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/20.PNG',['alt'=>'blusa', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Blusa</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/21.jpg',['alt'=>'blusa', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Blusa</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/22.jpeg',['alt'=>'blusa', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Blusa</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/23.jpeg',['alt'=>'blusa', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Blusa</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>
      
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/24.jpeg',['alt'=>'blusa', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Blusa</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/25.jpeg',['alt'=>'blusa', 'class'=>'card-img-top']); ?>
        <div class="card-body">
            <h5 class="card-title">Blusa</h5>
            <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <?php echo Html::img('@web/assets/images/26.jpeg',['alt'=>'blusa', 'class'=>'card-img-top']); ?>
        <div class="card-body">
          <h5 class="card-title">Blusa</h5>
          <a href="#" class="btn btn-info">Comprar</a>
        </div>
      </div>
    </div>
 


</div>
