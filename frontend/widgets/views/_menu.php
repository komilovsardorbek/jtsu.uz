<?php

use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Menu;
use afzalroq\cms\entities\unit\Unit;
use common\helpers\MenuHelper;
use frontend\widgets\LanguagesWidget;
use yii\helpers\Url;

$url = Yii::$app->language;
$menuItems = Menu::getMenu('main');

$flag = Items::findOne(['slug' => 'flag']);
$gerb = Items::findOne(['slug' => 'gerb']);
$plasm = Items::findOne(['slug' => 'plasm']);

?>

<div class="searchBox">
    <div class="searchBoxContainer">
        <a href="#" class="closeBtn" onclick="document.getElementById('search-input').focus();">
            <svg id="Capa_1" viewBox="0 0 413.348 413.348" xmlns="http://www.w3.org/2000/svg">
                <path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"/>
            </svg>
        </a>
        <div class="search_bar_inner">
            <form id="SearchForm" method="get" action="<?= Url::to(['site/search']) ?>">
                <div class="search_bar_inner">
                    <input type="text" name="q" placeholder="<?= Yii::t('app', 'Search') ?>">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="header_top">
    <div class="header_top-inner">
        <div class="container-fluid">
            <div class="header-black ">
                <div class="azaners">
                    <div class="azon_time pr-2"><a href="<?= $flag->link ?>">
                            <img src="/images/bayroquz.png" alt="bayroq" style="width: 2rem;"></a>
                    </div>
                    <div class="after"></div>
                    <div class="px-2"><a href="<?= $gerb->link ?>"><img src="/images/gerb.png" alt="gerb"
                                                                        style="width: 2rem;"></a></div>
                    <div class="after"></div>
                    <div class=" month_day px-3"><a href="<?= $plasm->link ?>"><i style="color: #00A3FF; font-size:20px"
                                                                                  class="fas fa-music"></i></a></div>
                    <div class="after"></div>
                    <div class=" pochta px-3"><a href=""><i class="fas fa-sitemap"></i></a></div>
                    <div class="after"></div>
                    <div class="px-3 pochta">
                        <i class="fas fa-mail-bulk pr-2"></i>
                        <a href="mailto:<?= Unit::findOne(['slug' => 'mail'])->getModelByType()->get() ?>">
                            <?= Unit::findOne(['slug' => 'mail'])->getModelByType()->get() ?>
                        </a>
                    </div>
                    <div class="after"></div>
                    <div class="pochta px-3 ">
                        <i class="fas fa-phone-alt pr-2"></i>
                        <a class="phone-media"
                           href="tel:<?= Unit::findOne(['slug' => 'phone'])->getModelByType()->get() ?>">
                            <?= Unit::findOne(['slug' => 'phone'])->getModelByType()->get() ?>
                        </a>
                    </div>
                </div>

                <div id="section2">
                    <div class="icons_social px-4">
                        <a href="<?= Unit::findOne(['slug' => 'instagram'])->getModelByType()->get() ?>"><i
                                    class=" icons_inner fab fa-instagram"></i></a>
                        <a href="<?= Unit::findOne(['slug' => 'telegram'])->getModelByType()->get() ?>"><i
                                    class=" icons_inner fab fa-telegram-plane px-4"></i></a>
                        <a href="<?= Unit::findOne(['slug' => 'twitter'])->getModelByType()->get() ?>"><i
                                    class=" icons_inner fab fa-twitter"></i></a>
                        <a href="<?= Unit::findOne(['slug' => 'facebook'])->getModelByType()->get() ?>"><i
                                    class=" icons_inner fab fa-facebook-f px-4"></i></a>
                        <a href="<?= Unit::findOne(['slug' => 'moodle'])->getModelByType()->get() ?>"><i
                                    class=" icons_inner fas fa-graduation-cap"></i></a>
                    </div>
                    <div class="col-middle specialFeatured">
                        <a href="#" class="specialFeaturedBtn">
                            <span> <i id="glasses" class="fas fa-glasses"></i></span>
                            <span class="special_inner"><?= Yii::t('app', 'Special abilities') ?></span>
                        </a>
                        <div class="specialFeaturedBlock">
                            <div class="specialFeaturedBlockWraps">
                                <span>Ko'rinish:</span>
                                <div class="typeView">
                                    <a href="javascript:void(0);" class="default">A</a>
                                    <a href="javascript:void(0);" class="blackWhite">A</a>
                                </div>
                                <span>Shrift o'lchami:</span>
                                <div class="typeSizeFonts">
                                    <ul>
                                        <li class="inc1">
                                            <input type="radio" id="inc1" name="selector">
                                            <label for="inc1">A</label>
                                            <div class="check"></div>
                                        </li>
                                        <li class="inc2">
                                            <input type="radio" id="inc2" name="selector">
                                            <label for="inc2">A</label>
                                            <div class="check"></div>
                                        </li>
                                        <li class="inc3">
                                            <input type="radio" id="inc3" name="selector">
                                            <label for="inc3">A</label>
                                            <div class="check"></div>
                                        </li>
                                        <li class="inc4">
                                            <input type="radio" id="inc4" name="selector">
                                            <label for="inc4">A</label>
                                            <div class="check"></div>
                                        </li>
                                        <li class="inc5">
                                            <input type="radio" id="inc5" name="selector">
                                            <label for="inc5">A</label>
                                            <div class="check"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="site-nav__item pl-2" href="http://uzdjtsu.uz">
                            <?= Yii::t('app', 'Previous site') ?> <i class="px-2 fas fa-globe"></i>
                        </a>
                    </div>
                    <div class="dropdown " data-type="toggler" data-target="site-nav__2">
                        <a class="site-nav__item pl-2" href="#">
                            <img style="width:20px;" src="/images/<?= Yii::$app->language ?>.svg" alt="">
                            <?= Yii::$app->params['cms']['languages'][Yii::$app->params['cms']['languageIds'][Yii::$app->language]] ?>
                            <i class="px-2 fas fa-chevron-down"></i>
                        </a>
                        <ul class="site-nav__dropdown dropdown__item dropdown__item--mobile " id="site-nav__2">
                            <?= LanguagesWidget::widget() ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="wa_header_wrapper fixed_header">
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-xl-4 col-lg-3 col-md-8 col-sm-9 col-8">
                <div class="wa_logo d-flex align-items-center">
                    <a href="<?= Url::to(['/']) ?>">
                        <img class="logoimg1"
                             src="/logo/logo-<?= Yii::$app->params['l'][Yii::$app->language] ?>.png" alt="logo"/>
                    </a>
                </div>
            </div>


            <div class=" col-xl-8 col-lg-9 col-md-4 col-sm-3 col-4">
                <div class="wa_main_menu main_menu_parent">
                    <!-- Header Menus -->
                    <div class="wa_nav_items main_menu_wrapper text-right">
                        <ul>
                            <div class="bgcolor-menu">
                                <div id="responsive_mega-menu1">
                                    <div class="azaners">
                                        <div class="azon_time pr-2"><a href="<?= Url::to(['state-symbols/flag']) ?>"><img
                                                        src="/images/bayroquz.png" alt="bayroq" style="width: 2rem;"></a>
                                        </div>
                                        <div class="px-2"><a href="<?= Url::to(['state-symbols/gerb']) ?>"><img
                                                        src="/images/gerb.png" alt="gerb" style="width: 2rem;"></a></div>
                                        <div class=" month_day px-2"><a href="<?= Url::to(['state-symbols/plasm']) ?>"><i
                                                        style="color: #00A3FF; font-size:15px" class="fas fa-music"></i></a>
                                        </div>
                                        <div class=" pochta px-2"><a href=""><i style="color: #FFAE0D;"
                                                                                class="fas fa-sitemap"></i></a></div>
                                        <div class=" pochta px-2"><a href=""><i style="color: #FFAE0D;" class="fas fa-globe"></i></a></div>
                                    </div>
                                </div>
                                <div class="phoneemail">
                                    <a class="language_menu-inner1" href="tel:<?= Unit::findOne(['slug' => 'phone'])->getModelByType()->get() ?>"><i class="fas fa-phone-alt"><?= Unit::findOne(['slug' => 'phone'])->getModelByType()->get() ?></i></i></a>
                                    <a class="language_menu-inner1" href="mailto:<?= Unit::findOne(['slug' => 'mail'])->getModelByType()->get() ?>"><i class="fas fa-envelope-open-text"><?= Unit::findOne(['slug' => 'mail'])->getModelByType()->get() ?></i></a>
                                </div>

                                <div class="language_menu">
                                    <?= LanguagesWidget::widget(['mobile' => true]) ?>
                                </div>

                            </div>
                            <?php foreach ($menuItems as $i => $menu): ?>
                                <?php if (!empty($menu['children']) && MenuHelper::checkMegaMenu($menu)): ?>
                                    <li id="sardor">
                                        <a class="sub-inner" href="<?= $menu['link'] ?>"><?= $menu['content'] ?> <i class="icons_mega fas fa-plus"></i><i class="icons_mega1 fas fa-minus"></i></a>
                                        <ul id="sub-top" class="sub-top">
                                            <?php foreach ($menu['children'] as $megaChild): ?>
                                                <?php if (empty($megaChild['children'])): ?>
                                                    <li>
                                                        <a href="<?= $megaChild['link'] ?>"><?= $megaChild['content'] ?></a>
                                                    </li>
                                                <?php else: ?>
                                                    <li><a class="sub-inner1"><?= $megaChild['content'] ?><i class="icons_mega fas fa-plus"></i><i class="icons_mega1 fas fa-minus"></i></a>
                                                        <ul id="sub-top1" class="sub-top1 ">
                                                            <?php foreach ($megaChild['children'] as $megaMegaChild): ?>
                                                            <li>
                                                                <a href="<?= $megaMegaChild['link'] ?>"><?= $megaMegaChild['content'] ?></a>
                                                            </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>
                                <?php endif; ?>
                                <?php if (!empty($menu['children']) && MenuHelper::checkMegaMenu($menu)): ?>
                                    <li id="responsive_mega-menu" class="has_submenu">
                                        <a class="responsive_mega-menu " href="<?= $menu['link'] ?>"
                                           data-target="#mega-menu-1"><?= $menu['content'] ?>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub_menu had_menu" id="mega-menu-1">
                                            <li>
                                                <?php
                                                $i = 0;
                                                foreach ($menu['children'] as $megaChild) {
                                                    $i++;
                                                    if (in_array($i, [1, 4])) {
                                                        echo '<div class="row">';
                                                    }
                                                    ?>
                                                    <div class="col-menu col-4">
                                                        <h6 class="title1"><?= $megaChild['content'] ?></h6>
                                                        <div class="content">
                                                            <ul class="menu-col">
                                                                <?php foreach ($megaChild['children'] as $child2): ?>
                                                                    <?php if (empty($child2['children'])): ?>
                                                                        <li>
                                                                            <a href="<?= $child2['link'] ?>"><?= $child2['content'] ?></a>
                                                                        </li>
                                                                    <?php else: ?>
                                                                        <li class="mega-menu__wrap">
                                                                            <a class="mega-menu__button"
                                                                               data-target="#menu-5" href="#">
                                                                                <?= $child2['content'] ?>
                                                                                <i class="icons_fas fas fa-angle-right"></i></a>
                                                                            <ul class="mega-menu__item" id="menu-5">
                                                                                <?php foreach ($child2['children'] as $megaMegaChild): ?>
                                                                                    <li>
                                                                                        <a class="mega-menu__inner"
                                                                                           href="<?= $megaMegaChild['link'] ?>">
                                                                                            <?= $megaMegaChild['content'] ?>
                                                                                        </a>
                                                                                    </li>
                                                                                <?php endforeach; ?>
                                                                            </ul>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    if (in_array($i, [3, 6])) {
                                                        echo '</div>';
                                                    }
                                                } ?>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                                <?php if (!empty($menu['children']) && !MenuHelper::checkMegaMenu($menu)): ?>
                                    <li class="has_submenu">
                                        <a href="<?= $menu['link'] ?>"><?= $menu['content'] ?> <i
                                                    class="fa fa-angle-down angelicon"></i></a>
                                        <ul class="sub_menu">
                                            <?php foreach ($menu['children'] as $child) : ?>
                                                <?php if (empty($child['children'])): ?>
                                                    <li><a href="<?= $child['link'] ?>"><?= $child['content'] ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if (empty($menu['children'])): ?>
                                    <li><a href="<?= $menu['link'] ?>"><?= $menu['content'] ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div class="bottom_fixed">
                                <li id="responsive_mega-menu1">
                                    <div style="font-weight: 500; padding:8px 22px;" class="site_icons">Obuna bo'ling
                                    </div>
                                    <div class="icons_social px-4">
                                        <a href="<?= Unit::findOne(['slug' => 'instagram'])->getModelByType()->get() ?>"><i
                                                    style="color: rgb(190, 64, 120);"
                                                    class=" icons_inner fab fa-instagram"></i></a>
                                        <a href="<?= Unit::findOne(['slug' => 'telegram'])->getModelByType()->get() ?>"><i
                                                    style="color: #0088cc;"
                                                    class=" icons_inner fab fa-telegram-plane px-3"></i></a>
                                        <a href="<?= Unit::findOne(['slug' => 'twitter'])->getModelByType()->get() ?>"><i
                                                    style="color: #1DA1F2;"
                                                    class=" icons_inner fab fa-twitter"></i></a>
                                        <a href="<?= Unit::findOne(['slug' => 'facebook'])->getModelByType()->get() ?>"><i
                                                    style="color:#4267B2"
                                                    class=" icons_inner fab fa-facebook-f px-3"></i></a>
                                        <a href="<?= Unit::findOne(['slug' => 'moodle'])->getModelByType()->get() ?>"><i
                                                    style="color:#000;"
                                                    class=" icons_inner fas fa-graduation-cap"></i></a>
                                    </div>
                                </li>
                            </div>

                        </ul>
                    </div>

                    <div class="wa_search_wrapper menu_btn_wrap">
                        <ul class="display_flex">
                            <li>
                                <a href="javascript:void(0);" class="wa_search_btn searchBtn"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu_btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
