<?php

use afzalroq\cms\entities\front\Items;

/* @var $this yii\web\View */
/* @var $interactiveServices Items */

$this->title = Yii::t('app', 'Interactive services');
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="wa_banner_wrapper">
    <div class="workimages10">
        <div class="wa_partner_wrapper padding_nd ">
            <div class="container">
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

</section>




