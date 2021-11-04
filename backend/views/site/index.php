<?php

use backend\models\Count;
use yii\helpers\Url;
$this->title = Yii::t('app', 'Admin panel')
?>
<h1 class="text-center"><?= $this->title ?></h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/menu/index?slug=main']) ?>">
                        <h4>Bosh menyu </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/menu/index?slug=footer-main']) ?>">
                        <h4>Pastki menyu  </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=main-cards']) ?>">
                        <h4>Bosh sahifadagi kartochkalar
                            <mark><?= Count::countItem('main-cards') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=interactive-services']) ?>">
                        <h4>Interaktiv <br> xizmatlar
                            <mark><?= Count::countItem('interactive-services') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/options/index?slug=admission']) ?>">
                        <h4>Mavsumlar
                            <mark><?= Count::countOption('admission') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-font"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=admission-pages']) ?>">
                        <h4>Mavsum <br> sahifalari
                            <mark><?= Count::countItem('admission-pages') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/options/index?slug=site-sections']) ?>">
                        <h4>Sayt bo`limlari
                        <mark><?= Count::countOption('site-sections') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-white"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=pages']) ?>">
                        <h4>Sahifalar
                            <mark><?= Count::countItem('pages') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-edit"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=blog']) ?>">
                        <h4>Blog
                            <mark><?= Count::countItem('blog') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-video-camera"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/options/index?slug=faculties']) ?>">
                        <h4>Fakultetlar
                            <mark><?= Count::countOption('faculties') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=cathedra']) ?>">
                        <h4>Kafedralar
                            <mark><?= Count::countItem('cathedra') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-info"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=staff']) ?>">
                        <h4>Xodimlar
                            <mark><?= Count::countItem('staff') ?></mark>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
