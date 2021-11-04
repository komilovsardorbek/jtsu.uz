<?php

use yii\helpers\Url;
use frontend\widgets\PaginationWidget;
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] =$entity->name;
?>
<section style="padding-top: 40px" class="wa_started_wrapper relative wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wa_project_gallery text-center">
                    <div class="gallery_container">
                        <div class="gallery_grid">
                            <div class="row">
                                <?php foreach ($items as $video) : ?>
                                    <div class="grid-item design wow zoomIn" data-wow-delay="0.2s">
                                            <?= $video->getText2() ?>
                                    </div>
                                    <div class="grid-content">
                                        <h3><?= $video->getText1() ?></h3>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?= PaginationWidget::widget(['page' => $pages]); ?>
            </div>
        </div>
    </div>
</section>
