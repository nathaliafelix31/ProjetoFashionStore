<?php
use yii\helpers\Html;

use yii\widgets\ActiveForm;

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '🌺Fashion Strore';

?>

<link rel="stylesheet" href="web/css/site.css">
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Fashion Strore</h1>

        <p class="lead">🌺Vista-se com elegância e conforto!🌺</p>
    </div>
          
</div>

    <section class="container">

        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            
                
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div >
                       <?php echo Html::img('@web/assets/images/1.jpg',['alt'=>'asa delta verde militar', 'class'=>'meu-item', 'height'=>'500', 'width'=>'500']); ?> 
                                          
                    </div>
                    <div>
                        <?php echo Html::img('@web/assets/images/2.jpg',['alt'=>'asa delta verde militar', 'class'=>'meu-item','height'=>'500', 'width'=>'500']); ?> 
                    </div>
                    <div>
                        <?php echo Html::img('@web/assets/images/3.jpg',['alt'=>'asa delta verde militar', 'class'=>'meu-item','height'=>'500', 'width'=>'500']); ?>
                    </div>
                
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
  
    

  
</div>
