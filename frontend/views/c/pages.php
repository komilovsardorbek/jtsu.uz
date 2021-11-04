<?php

use yii\helpers\StringHelper;

$this->params['breadcrumbs'][] = ['label' => $category->getName(), 'url' => [$category->link]];
$this->params['breadcrumbs'][] = $item->getText1();

$item->registerMetaTags();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-12">
            <br>
            <section class="wa_about_wrapper pb_80 relative wa_page_about_wrapper">
                <?php if (!empty($item->file_1_0)): ?>
                <div class="wow fadeInLeft text-center" data-wow-delay="0.1s">
                    <img src="<?= $item->getPhoto1('600', '400', 'cropResize', 'transparent', 'center', 'top') ?>" alt="image"/>
                </div>
                <?php endif; ?>
                <br>
                <div class="wa_about_content wow fadeInRight" data-wow-delay="0.1s">
                    <?= $item->getText2() ?>
                </div>
            </section>
            <br>
            <br>
            <br>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12 col-12" style="padding-top: 30px;">
            <div class="wa_sidebar_category">
                <div class="wa_sidebar_heading">
                    <h5><?= $collection->getName() ?></h5>
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
                    <h5><?= $category->getName() ?></h5>
                </div>
                <div class="wa_latestPost_field">
                    <ul>
                        <?php foreach ($lastItems as $item): ?>
                            <li>
                                <div class="wa_blog_title_wrap">
                                    <a class="wa_blog_title" href="<?= $item->link ?>"><?= StringHelper::truncate(strip_tags($item->getText1()), 30, '...') ?></a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
