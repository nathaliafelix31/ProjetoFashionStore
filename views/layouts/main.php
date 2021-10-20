
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use kartik\widgets\SideNav;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php

   echo SideNav::widget([
        'type' => SideNav::TYPE_DEFAULT,
        'heading' => 'Fashion Store',
        'items' => [
            [
                'url' => ['/site/index'],
                'label' => 'Home',
                'icon' => 'home',
                
            ],
            [
                'url' => ['/pessoa/index'],
                'label' => 'Cadastro',
                'icon' => 'glyphicon glyphicon-user'
            ],
            [
                'url' => ['/vendas/index'],
                'label' => 'Carrinho',
                'icon' => 'glyphicon glyphicon-shopping-cart'
            ],
            [
                
                'label' => 'Produto',
                'icon' => 'glyphicon glyphicon-heart',
                'items' => [
                    ['label' => 'Novo', 'icon'=>'
                    glyphicon glyphicon-plus-sign', 'url'=>'/produto/index'],
                    ['label' => 'Biquinis', 'icon'=>'glyphicon glyphicon-star', 'url'=>'#'],
                    ['label' => 'Blusas', 'icon'=>'glyphicon glyphicon-star', 'url'=>'#'],
                    ['label' => 'Calças', 'icon'=>'glyphicon glyphicon-star', 'url'=>'#'],
                    ['label' => 'Shorts', 'icon'=>'glyphicon glyphicon-star', 'url'=>'#'],
                    ['label' => 'Vestidos', 'icon'=>'glyphicon glyphicon-star', 'url'=>'#'],
                   
                ],
                Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->nome . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                ),
            ],
           
            [
                'label' => 'Help',
                'icon' => 'question-sign',
                'items' => [
                    ['label' => 'About', 'icon'=>'info-sign', 'url'=>'#'],
                    ['label' => 'Contact', 'icon'=>'phone', 'url'=>'#'],
                ],
            ],
        ],
    ]);
    


    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="text-center">&copy; Roneide Oliveira💜<?= date('Y') ?></p>
        <p class="float-right"></p>
        
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
