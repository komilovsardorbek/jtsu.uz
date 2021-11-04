<?php
use yii\helpers\StringHelper;
use yii\helpers\Url;
?>
        <div class="col-md-4">
            <div class="wa_news_box wow fadeInUp" data-wow-delay="0.2s">
                <div class="wa_news_img ">
                    <img src="<?= $model->getPhoto1('270', '152', 'zoomCrop', 'transparent', 'center', 'top') ?>" alt="image"/>
                </div>
                <span class="wa_news_date"><?= \Yii::$app->formatter->asDateTime($model->date, 'php:j F , Y'); ?></span>
                <br>
                <a href="<?= Url::to(['sections/view', 'id' => $model->id]) ?>" class="wa_news_title"><?= StringHelper::truncate(strip_tags($model->getText1()), 80, '...') ?></a>
                <p><?= StringHelper::truncate(strip_tags($model->getText2()), 100, '...') ?></p>
            </div>
        </div>
