<?php
use yii\helpers\Html;
use yii\helpers\Url;

use yii\widgets\ActiveForm;


/* @var $this yii\web\View */

$this->title = '🌺Fashion Strore';

?>

<link rel="stylesheet" href="web/css/site.css">
<link rel="stylesheet" href="web/css/style.css">
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <?php echo Html::img('@web/assets/images/fashion.jpg',['alt'=>'logo', 'class'=>'meu-item']); ?>

        <p class="lead">Vista-se com elegância e conforto!</p>
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
       
       <div class="container">
       <h2>Promoções</h2>
            <a data-id="20211020" data-name="MOSAICO1" data-position="M03" data-category="HOMEPAGE" data-criativo="CATEGORIA_BLUSAS" href="<?=Url::to(['/produto/index']);?>" tabindex="0"><img class="m-w-100 h-auto" src="https://images2.marisa.com.br/medias/sys_master/images/images/h5e/h16/13092982128670/20211020-HOMEPAGE-MOSAICO1-BLUSAS.png" alt="Blusas" title="20211020-HOMEPAGE-MOSAICO1-MOBILE-M03-CATEGORIA_BLUSAS" width="128" height="157" data-gtm-vis-recent-on-screen-7562000_1389="4345" data-gtm-vis-first-on-screen-7562000_1389="4345" data-gtm-vis-total-visible-time-7562000_1389="500" data-gtm-vis-has-fired-7562000_1389="1"></a>
            <a data-id="20211020" data-name="MOSAICO1" data-position="M02" data-category="HOMEPAGE" data-criativo="CATEGORIA_VESTIDOS" href="<?=Url::to(['/produto/index']);?>" tabindex="0"><img class="m-w-100 h-auto" src="https://images2.marisa.com.br/medias/sys_master/images/images/h27/h7f/13092981604382/20211020-HOMEPAGE-MOSAICO1-VESTIDOS.png" alt="Vestidos" title="20211020-HOMEPAGE-MOSAICO1-MOBILE-M02-CATEGORIA_VESTIDOS" width="128" height="157" data-gtm-vis-recent-on-screen-7562000_1389="4344" data-gtm-vis-first-on-screen-7562000_1389="4344" data-gtm-vis-total-visible-time-7562000_1389="500" data-gtm-vis-has-fired-7562000_1389="1"></a>
            <a data-id="20211020" data-name="MOSAICO1" data-position="M04" data-category="HOMEPAGE" data-criativo="CATEGORIA_BIQUINIS" href="<?=Url::to(['/produto/index']);?>" tabindex="-1"><img class="m-w-100 h-auto" src="https://images2.marisa.com.br/medias/sys_master/images/images/h43/had/13092983144478/20211020-HOMEPAGE-MOSAICO1-BIQUINIS.png" alt="Biquinis" title="20211020-HOMEPAGE-MOSAICO1-MOBILE-M04-CATEGORIA_BIQUINIS" width="128" height="157" data-gtm-vis-recent-on-screen-7562000_1389="4345" data-gtm-vis-first-on-screen-7562000_1389="4345" data-gtm-vis-total-visible-time-7562000_1389="500" data-gtm-vis-has-fired-7562000_1389="1"></a>
        </div>
  
       <div class="column  static-links">
            <h3 class="st-footer-title destaque-footer pb-1">Siga-nos</h3>
                <div class="row">
                    <ul>
					
                        <li class="instagram">
                            <a href="https://www.instagram.com/fashionstoreoficial08/" target="_blank" title="">
                                <p>💌 Instagram</p>
                                <span class="d-none"></span>
                            </a>
                        </li>

                        <li class="whatsapp">
                            <a href="https://l.instagram.com/?u=https%3A%2F%2Fchat.whatsapp.com%2FKtlHFaZTG5BJ3nOM599GSD&e=ATN0H2723Ai5qkoQOyuJuva1sax7g9pLg6KmU7ZWlTNfisuGbjOM_N_po13G2Gh9w9bEQTOiNuRyVDum3lsTMw&s=1!" target="_blank" title="">
                                <p>📞 Whatsapp</p>
                                <span class="d-none">(38) 99257-8471</span>
                            </a>
                        </li>

                    </ul>
                </div>
        </div>

  
</div>
