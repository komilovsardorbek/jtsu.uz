<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = $option->name;
if (empty($news)) {
    return Yii::$app->response->redirect(['/site/index']);
}
?>
<div class="page_title_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page_title_text">
                    <h1><?= $option->name ?></h1>
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

<section class="wa_news_wrapper bgcolor">
    <div class="container">
        <div class="row">
            <?php
            if (!empty($news)):
                foreach ($news as $newsItem) : ?>
                    <div class="col-md-4">
                        <div class="wa_news_box wow fadeInUp " data-wow-delay="0.2s">
                            <div class="wa_news_img " style="margin-bottom: 0px;">
                                <a href="<?= Url::to(['news/view', 'id' => $newsItem->id]) ?>">
                                    <img src="<?= $newsItem->getPhoto1('370', '208', 'zoomCrop', 'transparent', 'center', 'top'); ?>" alt="image"/>
                                </a>
                            </div>
                            <span class="wa_nws_tag "><?= \Yii::$app->formatter->asDateTime($newsItem->date, 'php:j F , Y'); ?></span>
                            <div>
                                <h1 class="wa_news_title "><a
                                            href="<?= Url::to(['news/view', 'id' => $newsItem->id]) ?>"><?= StringHelper::truncate(strip_tags($newsItem->getText1()), 80, '...') ?></a></h1>
                                <p><?= StringHelper::truncate(strip_tags($newsItem->getText2()), 100, '...') ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
            else:?>
            <h1 class="page_title_text"><?= Yii::t('app','Nothing found') ?> </h1>
            <?php endif; ?>
        </div>
    </div>
</section>

