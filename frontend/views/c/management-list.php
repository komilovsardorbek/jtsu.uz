<?php


$this->params['breadcrumbs'][] = $staffTypeOption->getName();

?>
<section class="gym_servicesdetail_section gym_section_padd">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-9 col-xl-9 col-md-8">
                <div class="gym_team_meditation">
                    <div class="gym_heading mb-0"><br>
                        <img src="assets/images/side_heading_line.png" alt="">
                    </div>
                    <?php foreach ($lastStaff as $item): ?>
                        <div class="swiper-container s1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="gym_team_section mt-5 ">
                                        <div class="gym_leftimg gym_imgeffect_hover ">
                                            <a href="<?= $item->link ?>">
                                                <img src="<?= $item->getPhoto1('450', '320', 'scaleResize', 'transparent', 'center', 'top') ?>" alt="Team Member"/>
                                            </a>
                                        </div>
                                        <div class="gym_rightcontent   p-4">
                                            <h2 class=""><a href="<?= $item->link ?>"><?= $item->getText1() ?></a></h2>
                                            <br>
                                            <b><?= $item->getText2() ?></b>
                                            <ul class="pt-3">
                                                <?php if (!empty($item->getText3())): ?>
                                                    <li class="padding_top card-inner_list row">
                                                        <div class="color-inner col-4"><span><?= Yii::t('app', 'Reception times') ?>:</span></div>
                                                        <span class="col-8"><?= $item->getText3() ?></span>
                                                    </li>
                                                <?php endif ?>
                                                <?php if (!empty($item->getText4())): ?>
                                                    <li class="padding_top row">
                                                        <div class="color-inner col-4"><span><?= Yii::t('app', 'Phone number') ?>:</span></div>
                                                        <span class="col-8"><?= $item->getText4() ?></span>
                                                    </li>
                                                <?php endif ?>
                                                <?php if (!empty($item->getText5())): ?>
                                                    <li class="padding_top row">
                                                        <div class="color-inner col-4"><span><?= Yii::t('app', 'Email') ?>:</span></div>
                                                        <span class="col-8"><?= $item->getText5() ?></span>
                                                    </li>
                                                <?php endif ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>.
