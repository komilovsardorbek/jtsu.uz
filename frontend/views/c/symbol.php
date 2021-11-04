<?php

use yii\helpers\StringHelper;


$this->params['breadcrumbs'][] = Yii::t('app', 'State symbols');
$this->params['breadcrumbs'][] = $items->getText1();
$items->registerMetaTags();

?>

<section class="wa_news_wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="wa_news_box">
                    <?php if ($items->slug == 'plasm') : ?>
                        <div>
                            <audio class="audio-player" controls style="width: 65%;">
                                <source src="/horse.ogg" type="audio/ogg">
                                <source style="width: 600px;" src="/audio/anthem.mp3" type="audio/mpeg">
                            </audio>
                        </div>
                        <br>
                    <?php endif; ?>
                    <div>
                        <?= $items->getText2() ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3" style="padding:59px 20px;">
                <div class="wa_sidebar_item">
                    <div class="wa_sidebar_heading">
                        <h5><?= Yii::t('app', 'Last News') ?></h5>
                    </div>
                    <div class="wa_latestPost_field">
                        <ul>
                            <?php foreach ($lastItems as $key => $item): 
                                if ($key === 6 ): break;  endif?>
                                <li>
                                    <div class="wa_blog_thumb">
                                        <a href="<?= $item->link ?>">
                                            <img src="<?= $item->getPhoto1('70', '70', 'zoomCrop', 'transparent', 'center', 'top'); ?>" alt="images">
                                        </a>
                                    </div>
                                    <div class="wa_blog_title_wrap">
                                        <a class="wa_blog_title" href="<?= $item->link ?>"><?= StringHelper::truncate(strip_tags($item->getText1()), 30, '...') ?></a>
                                        <p class="wa_blog_date"><?= \Yii::$app->formatter->asDateTime($item->date, 'php:j F , Y') ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>
