<?php
use yii\helpers\Html;

use yii\widgets\ActiveForm;

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '🌺Fashion Strore';

?>

<link rel="stylesheet" href="web/css/site.css">
<link rel="stylesheet" href="web/css/style.css">
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Fashion Store</h1>

        <p class="lead">🌺Vista-se com elegância e conforto!🌺</p>
    </div>
          
</div>
    <section class="container">
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo Html::img('@web/assets/images/23.jpeg',['alt'=>'blusa ursinho poo', 'class'=>'meu-item']); ?>
                </div>
                <div class="carousel-item">
                    <?php echo Html::img('@web/assets/images/24.jpeg',['alt'=>'blusa smile', 'class'=>'meu-item']); ?> 
                </div>
                <div class="carousel-item">
                    <?php echo Html::img('@web/assets/images/25.jpeg',['alt'=>'blusa florzinha', 'class'=>'meu-item']); ?>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

       </section>
  
    

  
</div>
