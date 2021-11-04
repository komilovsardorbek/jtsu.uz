<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

$this->params['breadcrumbs'][] = ['label' => $category->getName(), 'url' => [$category->link]];
$this->params['breadcrumbs'][] = $item->getText1();
if (($item->entity->text_1 > 0 && empty($item->getText1()))) {
    return Yii::$app->response->redirect(['/site/index']);
}

$category->registerMetaTags();

?>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="wa_item_box">
                    <div class="modal-body1">
                        <div class="label label-default">
                            <a href="<?= $category->link ?>" class="wa_nws_tag"><?= $category->name ?></a>
                            <span class="wa_item_date"><?= Yii::$app->formatter->asDateTime($item->date, 'php:j F , Y'); ?></span>
                        </div>
                        <i class="icons_eye1 fa fa-eye btn btn-info"> <?= $item->views_count ?></i>
                    </div>

                    <div class="wa_item_box">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" style="color: red">
                                <?php foreach ($item->photos as $key => $photo): ?>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="<?= $key === 0 ? 'active' : "" ?>"></li>
                                <?php endforeach; ?>
                            </ol>
                            <div class="carousel-inner">
                                <?php foreach ($item->photos as $key => $photo): ?>
                                    <div class="carousel-item <?= $key === 0 ? 'active' : "" ?>">
                                        <img class="d-block" src="<?= $photo->getPhoto('870', '652', 'zoomCrop', 'transparent', 'center', 'center') ?>" alt="First slide">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span aria-hidden="true"><i class="fas fa-chevron-circle-left icons-owl"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span aria-hidden="true"><i class="fas fa-chevron-circle-right icons-owl"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="wa_item_box">
                        <?= $item->getText2() ?>
                    </div>

                    <div class="wa_item_box">
                        <?= $item->getText3() ?>
                    </div>

                </div>
            </div>


            <div class="col-lg-3 col-md-12 col-sm-12 col-12" style="padding-top: 30px;">
                <div class="wa_sidebar_wrapper">
                    <div class="wa_sidebar-search-wrapper">
                        <form action="<?= Url::to(['search/item']) ?>" method="GET">
                            <input type="text" name="search" placeholder="<?= Yii::t('app', 'Search') ?>...">
                            <a href="javascript:void(0);" type="button"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div class="wa_sidebar_category">
                    <div class="wa_sidebar_heading">
                        <h5><?= Yii::t('app', 'Categories') ?></h5>
                    </div>
                    <div class="wa_sidebar_list">
                        <ul>
                            <?php foreach ($categories as $itemCategory): ?>
                                <li><a href="<?= $itemCategory->link ?>"><?= $itemCategory->name ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="wa_sidebar_item">
                    <div class="wa_sidebar_heading">
                        <h5><?= Yii::t('app', 'Recent news') ?></h5>
                    </div>
                    <div class="wa_latestPost_field">
                        <ul>
                            <?php foreach ($lastItems as $item): ?>
                                <li>
                                    <div class="wa_blog_thumb">
                                        <a href="<?= $item->link ?>">
                                            <img src="<?= $item->getGalleryPhoto('70', '70', 'zoomCrop', 'transparent', 'center', 'top'); ?>" alt="images">
                                        </a>
                                    </div>
                                    <div class="wa_blog_title_wrap">
                                        <a class="wa_blog_title" href="<?= $item->link ?>"><?= StringHelper::truncate(strip_tags($item->getText1()), 30, '...') ?></a>
                                        <p class="wa_blog_date"><?= Yii::$app->formatter->asDateTime($item->date, 'php:j F , Y') ?></p>
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
