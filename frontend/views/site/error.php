<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->params['breadcrumbs'][] = nl2br(Html::encode($message));

$this->title = $name;
?>
<section class="wa_news_wrapper ">
    <div class="container">
        <div class="wa_banner_btn" style="padding-bottom: 20px;">
            <h1 class="text-center">
                <div class="wa_banner_img">
                    <img src="/images/404.png" class="wow zoomIn" data-wow-delay="0.1s" alt="banner_images" width="50%">
                </div>
            </h1>
        </div>
        <div class="wa_banner_btn" style="padding-bottom: 20px;">
            <h1 class="text-center">
                <a href="#">
                    <?= nl2br(Html::encode($message)) ?>
                </a>
            </h1>
        </div>
        <br>
        <br>
        <br>
    </div>
</section>
