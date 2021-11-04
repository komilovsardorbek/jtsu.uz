<?php

/* @var $this View */

/* @var $content string */

use frontend\assets\AppAsset;
use frontend\widgets\FooterWidget;
use frontend\widgets\MenuWidget;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <?php $this->head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/images/logo.png">

    <?php if (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index'): ?>
        <style>
            #bgimages {
                background-image: url("/images/a3.jpg");
                background-size: cover;
                background-repeat: no-repeat;
            }
            @media (max-width: 991px) {
                #bgimages {
                    background-image: url("/images/a12.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                }
            }
        </style>
    <?php endif; ?>

</head>
<body>
<?php $this->beginBody() ?>

<?= MenuWidget::widget() ?>

<?php if (Yii::$app->controller->id !== 'site' || Yii::$app->controller->action->id !== 'index'): ?>
    <div class="page_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page_title_text">
                        <h1><?= array_pop($this->params['breadcrumbs']) ?></h1>
                        <?= Breadcrumbs::widget(
                            [
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                'class' => '',
                            ]
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?= $content ?>

<?= FooterWidget::widget() ?>

<?php $this->endBody() ?>
<script>
    $(document).ready(function(){
        $('.sub-inner1').click(function(){
            $(this).next('.sub-top1').slideToggle();
            $(this).find('.icons_mega').toggleClass('rotate');
            $(this).find('.icons_mega1').toggleClass('rotate1');
        });
    });


    $(document).ready(function(){
        $('.sub-inner').click(function(){
            $(this).next('.sub-top').slideToggle();
            $(this).find('.icons_mega').toggleClass('rotate');
            $(this).find('.icons_mega1').toggleClass('rotate1');
        });
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
