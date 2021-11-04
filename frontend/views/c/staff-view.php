<?php

$this->params['breadcrumbs'][] = $staffType->getName();
$item->registerMetaTags();

?>
<section class="gym_servicesdetail_section gym_section_padd">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="gym_team_meditation">
                    <div class="gym_heading mb-0">
                        <img src="assets/images/side_heading_line.png" alt="">
                    </div>
                    <div class="swiper-container s1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gym_team_section ">
                                    <div class="gym_leftimg gym_imgeffect_hover ">
                                        <img src="<?= $item->getPhoto1('450', '320', 'scaleResize', 'transparent', 'center', 'top') ?>" alt="Team Member"/>
                                    </div>

                                    <div class="gym_rightcontent   p-4">
                                        <h2 class=""><?= $item->getText1() ?></h2>
                                        <br>
                                        <b><?= $item->getText2() ?></b>
                                        <ul class="pt-3">
                                            <?php if (!empty($item->getText3())): ?>
                                                <li class="padding_top card-inner_list row">
                                                    <div class="color-inner col-3"><span><?= Yii::t('app', 'Reception times') ?>:</span></div>
                                                    <span class="col-8"><?= $item->getText3() ?></span>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($item->getText4())): ?>
                                                <li class="padding_top row">
                                                    <div class="color-inner col-3"><span><?= Yii::t('app', 'Phone number') ?>:</span></div>
                                                    <span class="col-8"><?= $item->getText4() ?></span>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($item->getText5())): ?>
                                                <li class="padding_top row">
                                                    <div class="color-inner col-3"><span><?= Yii::t('app', 'Email') ?>:</span></div>
                                                    <span class="col-8"><?= $item->getText5() ?></span>
                                                </li>
                                            <?php endif ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div><?= $item->getText6() ?></div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="wa_sidebar_category">
                    <div class="wa_sidebar_heading">
                        <h5><a href="<?= $staffType->link ?>"><?= $staffType->name ?></a></h5>
                    </div>

                    <div class="wa_latestPost_field">
                        <ul>
                            <?php foreach ($relatedStaff as $related_staff): ?>
                                <li><a href="<?= $related_staff->link ?>"><?= $related_staff->text1 ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="wa_sidebar_category">
                    <div class="wa_sidebar_heading">
                        <h5><?= Yii::t('app', 'Faculties') ?></h5>
                    </div>

                    <div class="wa_latestPost_field">
                        <ul>
                            <?php foreach ($facultieCategories as $facultieCategory): ?>
                                <li><a href="<?= $facultieCategory->link ?>"><?= $facultieCategory->name ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
