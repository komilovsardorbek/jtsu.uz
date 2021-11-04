<?php

use yii\helpers\Url;
use frontend\widgets\PaginationWidget;
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = Yii::t('app','Photo gallery');
?>
<section class="wa_started_wrapper relative" style="padding-top: 40px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wa_project_gallery text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery_container ">
                        <div class="gallery_grid">
                            <?php foreach ($items as $photo) : ?>
                                <div class="grid-item design wow zoomIn" data-wow-delay="0.2s">
                                    <a href="<?= $photo->link ?>">
                                        <div class="grid_img">
                                            <img src="<?= $photo->getGalleryPhoto('370', '280', 'zoomCrop', 'transparent', 'center', 'top'); ?>" alt="project-img">
                                        </div>
                                        <div class="grid-content">
                                            <h3><?= $photo->getText1() ?></h3>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?= PaginationWidget::widget(['page' => $pages]); ?> <br>
            </div>
        </div>
    </div>
</section>
