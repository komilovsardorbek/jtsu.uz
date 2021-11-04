<?php

use afzalroq\cms\entities\Entities;
use yii\helpers\StringHelper;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faculties'), 'url' => $faculty->collection->link];
$this->params['breadcrumbs'][] = $faculty->getName();
// $menuTree = \afzalroq\cms\entities\front\Menu::getMenu('kupkurash-f-menu');

$faculty->registerMetaTags();

?>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <section class="wa_about_wrapper pb_80 relative wa_page_about_wrapper">
                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                    <img src="<?= $faculty->getPhoto1('600', '400', 'cropResize', 'transparent', 'center', 'top') ?>" alt="image"/>
                </div>
                <br>
                <div class="wa_about_content wow fadeInRight" data-wow-delay="0.1s">
                    <?= $faculty->getContent() ?>
                </div>
            </section>
            <?php if (!empty($stuffsWorking) && $stuffsWorking): ?>
                <section class="wa_Testimonial_wrapper relative">
                    <div class="wa_heading1 text-center wow fadeInDown" data-wow-delay="0.1s">
                        <h1 class="title h1_title1"><?= Entities::findOne(['slug' => 'staff'])->getName(); ?></h1> <br>
                    </div>
                    <?php foreach ($stuffsWorking as $stuff): ?>
                        <div class="row">
                            <a href="<?= $stuff->link ?>">
                                <div class="offset-lg-1 col-lg-10 offset-md-0 col-md-12">
                                    <div class=" wow fadeInUp" data-wow-delay="0.2s">
                                        <!-- Swiper -->
                                        <div class="swiper-container s2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="wa_testimonial_sec">
                                                        <div class="wa_testimonial_img">
                                                            <div class="wa_img_inner">
                                                                <img src="<?= $stuff->getPhoto1('143', '145', 'zoomCrop', 'transparent', 'center', 'top'); ?>" alt="image"/>
                                                                <div class="wa_dot_wrap">
                                                                    <span class="wa_text_dot dot1"></span>
                                                                    <span class="wa_text_dot dot2"></span>
                                                                    <span class="wa_text_dot dot3"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wa_testimonial_content">
                                                            <h1><?= $stuff->getText1() ?> <span>- <?= $stuff->getText2() ?></span></h1>
                                                            <b><i class="fa fa-phone"></i> <?= Yii::t('app', 'Phone') ?>: <a href="tel:<?= $stuff->getText4() ?>"><?= $stuff->getText4() ?></a> </b>
                                                            <br>
                                                            <b><i class="fa fa-envelope"></i> <?= Yii::t('app', 'Email') ?>: <?= $stuff->getText5() ?> </b>
                                                            <svg class="test_quotsvg" width="209px" height="157px">
                                                                <path fill-rule="evenodd" opacity="0.059" fill="rgb(149, 112, 238)"
                                                                      d="M130.625,156.999 L130.625,-0.001 L209.000,-0.001 L209.000,78.500 L130.625,156.999 ZM-0.000,-0.001 L78.375,-0.001 L78.375,78.500 L-0.000,156.999 L-0.000,-0.001 Z"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <br>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 col-12" style="padding-top: 30px;">
            <!-- <div id="accordion" class="accordion"> -->
            <!-- <h4 class="card_header"><//?= Yii::t('app', 'Faculty menu') ?></h4> -->
            <!-- <//?php foreach ($menuTree as $i => $menu): ?> -->
            <!-- <div class="col-xl-3 col-lg-3 col-sm-3 col-6"> -->
            <!-- <div class="wa_link_inner wow fadeInUp" data-wow-delay="0.1s"> -->
            <!-- <//?php  if (empty($menu['children'])): ?> -->
            <!-- <h1><a class="card-header-empty" href="javascript:void(0);"><//?= $menu['content'] ?></a></h1> -->
            <!-- <//?php else: ?> -->
            <!-- <h1><a class="card-header-empty" href="javascript:void(0);"><//?= $menu['content'] ?></a></h1> -->
            <!-- <ul id="site-nav__<//?= $i ?>"> -->
            <!-- <//?php  foreach ($menu['children'] as $child): ?> -->
            <!-- <li><a class="card-header-empty" href="<//?=   $child['link'] ?>"><//?=  $child['content'] ?> </a></li> -->
            <!-- <//?php  endforeach; ?> -->
            <!-- </ul> -->
            <!-- <//?php endif; ?> -->
            <!-- </div> -->
            <!-- </div> -->
            <!-- <//?php endforeach; ?> -->
            <!-- </div> -->


            <div class="wa_sidebar_category">
                <div class="wa_sidebar_heading">
                    <h5><?= Yii::t('app', 'Faculties') ?></h5>
                </div>
                <div class="wa_sidebar_list">
                    <ul>
                        <?php foreach ($facultieCategories as $facultieCategory): ?>
                            <li><a href="<?= $facultieCategory->link ?>"><?= $facultieCategory->name ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <br>
            <div class="wa_sidebar_category">
                <div class="wa_sidebar_heading">
                    <h5><?= Yii::t('app', 'Cathedras') ?></h5>
                </div>
                <div class="wa_sidebar_list">
                    <ul>
                        <?php foreach ($cathedrasCategories as $cathedrasCategory): ?>
                            <li><a href="<?= $cathedrasCategory->link ?>"><?= $cathedrasCategory->getText1() ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <br>
            <?php if (!empty($honors) && $honors): ?>
            <div class="wa_sidebar_category">
                <div class="wa_sidebar_heading">
                    <h5><?= Yii::t('app', 'Honorary teachers') ?></h5>
                </div>

                <div class="wa_latestPost_field">
                    <ul>
                        <?php foreach ($honors as $honor): ?>
                            <li>
                                <div class="wa_blog_thumb">
                                    <a href="<?= $honor->link ?>">
                                        <img src="<?= $honor->getPhoto1('70', '70', 'zoomCrop', 'transparent', 'center', 'top'); ?>" alt="images">
                                    </a>
                                </div>
                                <div class="wa_blog_title_wrap">
                                    <a class="wa_blog_title" href="<?= $honor->link ?>"><?= StringHelper::truncate(strip_tags($honor->getText1()), 30, '...') ?></a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
