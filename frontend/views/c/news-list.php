<?php

use yii\helpers\StringHelper;

$this->params['breadcrumbs'][] = $option->name;
?>

<section class="wa_news_wrapper bgcolor padding_nd">
    <div class="container">
        <div class="row">
            <?php
            if (!empty($news)) {
                foreach ($news as $newsItem):
                    if (empty($newsItem->getText1())) : continue; endif    
                ?>
                    <div class="col-md-4">
                        <div class="wa_news_box wow fadeInUp " data-wow-delay="0.2s">
                            <div class="wa_news_img " style="margin-bottom: 15px;">
                                <a href="<?= $newsItem->link ?>">
                                    <img src="<?= $newsItem->getGalleryPhoto('370', '208', 'zoomCrop', 'transparent', 'center', 'top') ?>" alt="image"/>
                                </a>
                            </div>
                            <span class="wa_nws_tag pull-left"><?= Yii::$app->formatter->asDateTime($newsItem->date, 'php:j F , Y') ?></span>
                            <span class="wa_nws_tag pull-right"><i class="fa fa-eye"> <?= $newsItem->views_count ?></i></span>
                            <div>
                                <h1 class="wa_news_title">
                                    <a href="<?= $newsItem->link ?>"><?= StringHelper::truncate(strip_tags($newsItem->getText1()), 80, '...') ?></a>
                                </h1>
                                <p><?= StringHelper::truncate(strip_tags($newsItem->getText2()), 150, '...') ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            } else {
                ?>
                <h4 class="page_title_text"><?= Yii::t('app', 'Nothing found') ?> </h4>
            <?php } ?>
        </div>
    </div>
</section>
