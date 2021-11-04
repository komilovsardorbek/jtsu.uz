<?php

use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\unit\Unit;
use common\models\Feedback;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $news Items */
/* @var $notifications Items */
/* @var $choices Items */
/* @var $ourPride Items */
/* @var $photoGallery Items */
/* @var $partners Items */
/* @var $resources Items */
/* @var $model Feedback */

$this->title = Yii::t('app', 'Uzbek state university of physical culture and sport');
?>
<section class="wa_banner_wrapper" >
    <div class="preloader_wrapper preloader_active preloader_open">
        <div class="preloader_holder ">
            <div class="preloader d-flex justify-content-center align-items-center h-100 ">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div id="bgimages" class="bgimages1">
        <section class="wa_banner_wrapper">
            <div class="container-fluid p-0">
                <div class="count-particles">
                    <div class="wa_banner_main">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12 margintop">
                                <div class="wa_banner_text wow fadeInLeft text-right" data-wow-delay="0.1s">
                                    <div class="wa_banner_btn" style="padding-bottom: 20px;">
                                        <h1 class="text-center1">
                                            <div style="white-space: nowrap;">"<?= Unit::findOne(['slug' => 'main-page-title'])->getModelByType()->get() ?>"</div>
                                        </h1>
                                        <a href="https://portal.jtsu.uz" class="wa_btn wa_btn2" style="padding-right: 20px;margin-bottom:20px" target="_blank">
                                            <span class="wa_btn2text" style="padding-right: 10px;"><?= Yii::t('app', 'Go to platform') ?></span>
                                            <span class="wa_btn_svg">
                                    <i class="fas fa-external-link-alt"></i>
                                </span>
                                        </a>
                                    </div>
                                </div>


                                <div class="row">
                                    <?php foreach ($mainCards as $mainCard): ?>
                                        <div class="col-lg-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                                            <a href="<?= $mainCard->getText2() ?>">
                                                <div class="wa_whtayou_box">
                                                    <div class="whtayou_img">
                                                        <img src="<?= $mainCard->getPhoto1('123', '108', 'zoomCrop', 'transparent', 'center', 'center'); ?>" alt="">
                                                    </div>
                                                    <h1 class="title h1_title2 text-center"><?= $mainCard->getText1() ?></h1>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="wa_banner_img">
                                    <a href="https://portal.jtsu.uz"><img src="images/51.png" class="wow zoomIn" data-wow-delay="0.1s" alt="banner_images" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div id="bgimages"  class="bgimages2">
        <section class="wa_banner_wrapper">
            <div class="container-fluid p-0">
                    <div class="wa_banner_main">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12 margintop">
                                <div class="wa_banner_text wow fadeInLeft text-right" data-wow-delay="0.1s">
                                    <div class="wa_banner_btn" style="padding-bottom: 20px;">
                                        <h1 class="text-center1">
                                            <div style="white-space: nowrap;">"<?= Unit::findOne(['slug' => 'main-page-title'])->getModelByType()->get() ?>"</div>
                                        </h1>
                                        <a href="https://portal.jtsu.uz" class="wa_btn wa_btn2" style="padding-right: 20px;margin-bottom:20px" target="_blank">
                                            <span class="wa_btn2text" style="padding-right: 10px;"><?= Yii::t('app', 'Go to platform') ?></span>
                                            <span class="wa_btn_svg">
                                    <i class="fas fa-external-link-alt"></i>
                                </span>
                                        </a>
                                    </div>
                                </div>


                                <div class="row">
                                    <?php foreach ($mainCards as $mainCard): ?>
                                        <div class="col-lg-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                                            <a href="<?= $mainCard->getText2() ?>">
                                                <div class="wa_whtayou_box">
                                                    <div class="whtayou_img">
                                                        <img src="<?= $mainCard->getPhoto1('123', '108', 'zoomCrop', 'transparent', 'center', 'center'); ?>" alt="">
                                                    </div>
                                                    <h1 class="title h1_title2 text-center"><?= $mainCard->getText1() ?></h1>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="wa_banner_img">
                                    <a href="https://portal.jtsu.uz"><img src="images/51.png" class="wow zoomIn" data-wow-delay="0.1s" alt="banner_images" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
    </div>

    <div class="workimages9">
        <section class="wa_news_wrapper padding_nd">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <h1 class="title h1_title1 pb-3">SAYLOVGACHA <span style="color: red" id="days"></span><span style="color: red" id="hours"></span><span style="color: red" id="minutes"></span><span style="color: red" id="secondes"></span>
                              QOLDI</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <video style="width: 100%;box-shadow: 0 14px 28px rgb(0 0 0 / 12%), 0 10px 10px rgb(0 0 0 / 2%);}" loop autoplay muted>
                            <source src="/audio/saylov.mp4" type="video/mp4">
                            <source src="/audio/saylov.mp4" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Project section start -->
    <div class="workimages8">
        <section class="wa_news_wrapper center_padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <h1 class="title h1_title1"><?= Yii::t('app', 'LAST <span>NEWS</span>') ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($news as $newsItem) : ?>
                        <div class="col-md-4">
                            <div class="wa_news_box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="wa_news_img ">
                                    <img src="<?= $newsItem->mainPhoto ? $newsItem->mainPhoto->getPhoto('370', '208', 'zoomCrop', 'transparent', 'center', 'top') : '/images/logo.png' ?>" alt="image"/>
                                </div>

                                <div class="sardor">
                                    <div>
                                        <a href="<?=$newsOption->link ?>" class="wa_nws_tag colortext2"><?= $newsOption->getName() ?></a>
                                        <span class="wa_news_date">
                                    <?= Yii::$app->formatter->asDateTime($newsItem->date, 'php:j F, Y'); ?>
                                </span>
                                    </div>
                                    <label class="icons_info ">
                                        <i style="margin:0;" class="icons_eye fa fa-eye"></i>
                                        <?= $newsItem->views_count ?>
                                    </label>

                                </div>

                                <a href="<?= $newsItem->link ?>" class="wa_news_title">
                                    <?= StringHelper::truncate(strip_tags($newsItem->getText1()), 80, '...') ?>
                                </a>
                                <p><?= StringHelper::truncate(strip_tags($newsItem->getText2()), 100, '...') ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <a href="<?= $newsOption->link ?>" class="wa_btn"><?= Yii::t('app', 'Show more') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="workimages">
        <section class="wa_news_wrapper bgcolor padding_nd workimages">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <h1 class="title h1_title1" style="color: #fff;"><?= Yii::t('app', "LAST <span>ANNOUNCEMENT</span>") ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($notifications as $notificationItem) : ?>
                        <div class="col-md-4">
                            <div class="wa_news_box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="wa_news_img ">
                                    <img src="<?= $notificationItem->mainPhoto ? $notificationItem->mainPhoto->getPhoto('370', '208', 'zoomCrop', 'transparent', 'center', 'top') : '/images/logo.png' ?>"
                                         alt="image"/>
                                </div>

                                <div class="sardor">
                                    <div>
                                        <a href="<?= $notificationOption->link ?>" class="wa_nws_tag1"><?= Yii::t('app', 'Announcement') ?></a>
                                        <span style="color:#f9f9f9 ;" class="wa_news_date">
                                    <?= Yii::$app->formatter->asDateTime($notificationItem->date, 'php:j F, Y'); ?>
                                </span>
                                    </div>
                                    <label class="icons_info1">
                                        <i style="margin:0;" class="icons_eye fa fa-eye"></i>
                                        <?= $notificationItem->views_count ?> </label>
                                </div>

                                <a href="<?= $notificationItem->link ?>" class="wa_news_title1">
                                    <?= StringHelper::truncate(strip_tags($notificationItem->getText1()), 80, '...') ?>
                                </a>
                                <p style="color: #f9f9f9;"><?= StringHelper::truncate(strip_tags($notificationItem->getText2()), 100, '...') ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <a href="<?= $notificationOption->link ?>" class="wa_btn"><?= Yii::t('app', 'Show more') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="workimages9">
        <section class="wa_news_wrapper padding_nd">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <h1 class="title h1_title1"><?= Yii::t('app', 'LAST <span>CONTESTS</span>') ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($choices as $choicesItem) : ?>
                        <div class="col-md-4">
                            <div class="wa_news_box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="wa_news_img ">
                                    <img src="<?= $choicesItem->mainPhoto ? $choicesItem->mainPhoto->getPhoto('370', '208', 'zoomCrop', 'transparent', 'center', 'top') : '/images/logo.png' ?>"
                                         alt="image"/>
                                </div>

                                <div class="sardor">
                                    <div>
                                        <a href="<?= $choiceOption->link ?>" class="wa_nws_tag"><?= Yii::t('app', 'Contests') ?></a>
                                        <span class="wa_news_date">
                                    <?= Yii::$app->formatter->asDateTime($choicesItem->date, 'php:j F, Y'); ?>
                                </span>
                                    </div>
                                    <label class="icons_info">
                                        <i style="margin:0;" class="icons_eye fa fa-eye"></i>
                                        <?= $choicesItem->views_count ?>
                                </div>

                                <a href="<?= $choicesItem->link ?>" class="wa_news_title">
                                    <?= StringHelper::truncate(strip_tags($choicesItem->getText1()), 80, '...') ?>
                                </a>
                                <p><?= StringHelper::truncate(strip_tags($choicesItem->getText2()), 100, '...') ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <a href="<?= $choiceOption->link ?>" class="wa_btn"><?= Yii::t('app', 'Show more') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="work_top">
        <div class="workimages1">
            <div class="container" id="counter-container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center icons_center">
                        <div>
                            <img src="<?= Unit::findOne(['slug' => 'students_picture'])->getModelByType()->get() ?>" alt="" class="counter">
                        </div>
                        <div class="counter-inner" data-target="<?= Unit::findOne(['slug' => 'students'])->getModelByType()->get() ?>"><?= Unit::findOne(['slug' => 'students'])->getModelByType()->get() ?></div>
                        <div class="counter-top"><?= Unit::findOne(['slug' => 'students-title'])->getModelByType()->get() ?></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center icons_center">
                        <div>
                            <img src="<?= Unit::findOne(['slug' => 'teachers_picture'])->getModelByType()->get() ?>" alt="" class="counter">
                        </div>
                        <div class="counter-inner" data-target="<?= Unit::findOne(['slug' => 'teachers'])->getModelByType()->get() ?>"><?= Unit::findOne(['slug' => 'teachers'])->getModelByType()->get() ?></div>
                        <div class="counter-top"><?= Unit::findOne(['slug' => 'teachers-title'])->getModelByType()->get() ?></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center icons_center">
                        <div>
                            <img src="<?= Unit::findOne(['slug' => 'library_picture'])->getModelByType()->get() ?>" alt="" class="counter">
                        </div>
                        <div class="counter-inner" data-target="<?= Unit::findOne(['slug' => 'library'])->getModelByType()->get() ?>"><?= Unit::findOne(['slug' => 'library'])->getModelByType()->get() ?></div>
                        <div class="counter-top"><?= Unit::findOne(['slug' => 'library-title'])->getModelByType()->get() ?></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center icons_center">
                        <div>
                            <img src="<?= Unit::findOne(['slug' => 'articles_picture'])->getModelByType()->get() ?>" alt="" class="counter">
                        </div>
                        <div class="counter-inner" data-target="<?= Unit::findOne(['slug' => 'articles'])->getModelByType()->get() ?>"><?= Unit::findOne(['slug' => 'articles'])->getModelByType()->get() ?></div>
                        <div class="counter-top"><?= Unit::findOne(['slug' => 'articles-title'])->getModelByType()->get() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="workimages10">
        <div class="wa_partner_wrapper padding_nd ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s" style="padding-bottom: 30px;">
                            <h1 class="title h1_title1"><?= Yii::t('app', 'Interactive services') ?></h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($interactiveServices as $service): ?>
                        <div class="col-lg-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="<?= $service->getText2() ?>">
                                <div class="wa_whtayou_box">
                                    <div class="whtayou_img">
                                        <img src="<?= $service->getPhoto1('62', '55', null, 'transparent', 'center', 'top'); ?>" alt="">
                                    </div>
                                    <h5 class="title h1_title2 text-center"><?= $service->getText1() ?></h5>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Partner section start -->
    <div class="workimages9">
        <div class="wa_partner_wrapper " style="padding-top:50px; padding-bottom:60px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <h1 class="title h1_title1"><?= Yii::t('app', 'Partners') ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 40px 0;">
                    <div class="col-12">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($partners as $partner) : ?>
                                    <a href="<?= $partner->getText2() ?>" target="_blank">
                                        <div class="swiper-slide">
                                            <div class="wa_partner_sec">
                                                <img src="<?= $partner->getPhoto1('250', '90', 'cropResize', 'transparent', 'center', 'top'); ?>" alt="<?= $partner->getText1() ?>"
                                                     title="<?= $partner->getText1() ?>">
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="wa_test_next">
                            <svg width="53px" height="16px">
                                <path fill-rule="evenodd" fill="rgb(148, 111, 237)"
                                      d="M0.314,7.217 L7.158,0.283 C7.576,-0.140 8.253,-0.140 8.670,0.283 C9.088,0.706 9.088,1.392 8.670,1.815 L3.652,6.899 L51.931,6.899 C52.521,6.899 53.000,7.384 53.000,7.983 C53.000,8.581 52.521,9.066 51.931,9.066 L3.652,9.066 L8.670,14.150 C9.088,14.573 9.088,15.259 8.670,15.682 C8.462,15.894 8.188,16.000 7.914,16.000 C7.641,16.000 7.367,15.894 7.158,15.682 L0.314,8.749 C-0.104,8.325 -0.104,7.640 0.314,7.217 L0.314,7.217 Z"/>
                            </svg>
                        </div>
                        <div class="wa_test_prev">
                            <svg width="53px" height="16px">
                                <path fill-rule="evenodd" fill="rgb(148, 111, 237)"
                                      d="M0.314,7.217 L7.158,0.283 C7.576,-0.140 8.253,-0.140 8.670,0.283 C9.088,0.706 9.088,1.392 8.670,1.815 L3.652,6.899 L51.931,6.899 C52.521,6.899 53.000,7.384 53.000,7.983 C53.000,8.581 52.521,9.066 51.931,9.066 L3.652,9.066 L8.670,14.150 C9.088,14.573 9.088,15.259 8.670,15.682 C8.462,15.894 8.188,16.000 7.914,16.000 C7.641,16.000 7.367,15.894 7.158,15.682 L0.314,8.749 C-0.104,8.325 -0.104,7.640 0.314,7.217 L0.314,7.217 Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=" workimages2">
        <div class="wa_partner_wrapper" style="padding:30px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($resources as $resource) : ?>
                                    <div class="swiper-slide">
                                        <a href="<?= $resource->getText2() ?>" target="_blank">
                                            <div class="wa_partner_sec text-center">
                                                <img src="<?= $resource->getPhoto1('170', '90', 'resize', 'transparent', 'center', 'top'); ?>" alt="">
                                                <h5 class="txt_color" style="padding-top: 20px;"><?= $resource->getText1() ?></h5>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="wa_test_next">
                            <svg width="53px" height="16px">
                                <path fill-rule="evenodd" fill="rgb(148, 111, 237)"
                                      d="M0.314,7.217 L7.158,0.283 C7.576,-0.140 8.253,-0.140 8.670,0.283 C9.088,0.706 9.088,1.392 8.670,1.815 L3.652,6.899 L51.931,6.899 C52.521,6.899 53.000,7.384 53.000,7.983 C53.000,8.581 52.521,9.066 51.931,9.066 L3.652,9.066 L8.670,14.150 C9.088,14.573 9.088,15.259 8.670,15.682 C8.462,15.894 8.188,16.000 7.914,16.000 C7.641,16.000 7.367,15.894 7.158,15.682 L0.314,8.749 C-0.104,8.325 -0.104,7.640 0.314,7.217 L0.314,7.217 Z"/>
                            </svg>
                        </div>
                        <div class="wa_test_prev">
                            <svg width="53px" height="16px">
                                <path fill-rule="evenodd" fill="rgb(148, 111, 237)"
                                      d="M0.314,7.217 L7.158,0.283 C7.576,-0.140 8.253,-0.140 8.670,0.283 C9.088,0.706 9.088,1.392 8.670,1.815 L3.652,6.899 L51.931,6.899 C52.521,6.899 53.000,7.384 53.000,7.983 C53.000,8.581 52.521,9.066 51.931,9.066 L3.652,9.066 L8.670,14.150 C9.088,14.573 9.088,15.259 8.670,15.682 C8.462,15.894 8.188,16.000 7.914,16.000 C7.641,16.000 7.367,15.894 7.158,15.682 L0.314,8.749 C-0.104,8.325 -0.104,7.640 0.314,7.217 L0.314,7.217 Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="workimages10">
        <section class="wa_project_wrapper relative wa_page_project_wrapper " style="padding: 60px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                            <h1 class="title h1_title1"><?= $videoEntity->name ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="padding-top: 40px ;padding-bottom: 10px">
                        <div class="wa_project_gallery text-center">
                            <div class="gallery_container">
                                <div class="gallery_grid">
                                    <div class="row">
                                        <?php foreach ($videoGallery as $video) : ?>
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
                    </div>
                </div>
                <div class="col-12">
                    <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                        <a href="<?= $videoEntity->link ?>" class="wa_btn"><?= Yii::t('app', 'Show more') ?></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Project section start -->

    <section class="wa_project_wrapper relative wa_page_project_wrapper workimages6" style="padding-top: 60px; padding-bottom:60px;">
        <div class="container">
            <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                <h1 class="footer-inner_text1" class="title h1_title1"><?= $photoEntity->name ?></h1>
            </div>
            <div class="wa_project_gallery text-center row" style="padding: 40px 0;">
                <?php foreach ($photoGallery as $photo) : ?>
                    <div class="design wow zoomIn col-4" data-wow-delay="0.2s">
                        <a href="<?= $photo->link ?>" class="view">
                            <div class="grid_img"><img src="<?= $photo->getGalleryPhoto('370', '280', 'zoomCrop', 'transparent', 'center', 'top'); ?>" alt="project-img"></div>
                            <div class="grid-content"><h3><?= $photo->getText1() ?></h3></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                <a href="<?= $photoEntity->link ?>" class="wa_btn"><?= Yii::t('app', 'Show more') ?></a>
            </div>
        </div>
    </section>

    <section class="wa_map_wrapper relative">
        <div class="wa_map_box">
            <div class="map_box maxw-1000 mx-auto map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1495.5465366578323!2d69.53450412949078!3d41.43720207524846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aefb04418e5385%3A0xb7ec275ca7b0aae8!2sGosudarstvennyy%20Institut%20Fizicheskoy%20Kul&#39;tury%20Respubliki%20Uzbekistan!5e0!3m2!1sen!2s!4v1623034513014!5m2!1sen!2s"
                        width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</section>




