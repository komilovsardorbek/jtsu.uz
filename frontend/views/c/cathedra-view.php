<?php

$this->params['breadcrumbs'][] = ['label' => $faculty->collection->name, 'url' => $faculty->collection->link];
$this->params['breadcrumbs'][] = ['label' => $faculty->name, 'url' => $faculty->link];
$this->params['breadcrumbs'][] = $cathedra->getText1();

$cathedra->registerMetaTags();


?>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <section class="wa_about_wrapper pb_80 relative wa_page_about_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow fadeInLeft text-center" data-wow-delay="0.1s">
                            <img src="<?= $cathedra->getPhoto1('400', '400', 'scaleResize', 'transparent', 'center', 'top') ?>" alt="Rasm" />
                        </div>
                        <div class="col-md-12">
                            <div class="wa_about_content wow fadeInRight" data-wow-delay="0.1s">
                                <?= $cathedra->getText2() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 col-12" style="padding-top: 30px;">
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
        </div>
    </div>
</div>
