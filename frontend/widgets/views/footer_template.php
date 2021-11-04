<?php


use afzalroq\cms\entities\front\Menu;
use afzalroq\cms\entities\unit\Unit;


$menuTree = Menu::getMenu('footer-main');

?>
<section class="wa_footer_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                <div class="gym_widgets gym_footer_about">
                    <a href="/" style="display: flex; align-items: center;margin-top:12px;margin-bottom:24px; ">
                        <img src="/logo/logo-<?= Yii::$app->params['l'][Yii::$app->language] ?>.png" alt="">
                    </a>
                    <div class="gym_address_wrap">
                        <p><?= Unit::get('footer-text') ?></p>
                    </div>
                    <div style="padding: 12px 0">
                        <a href="https://t.me/uzdjtsu_rasmiy" class="mr-2">
                            <i class="icon-white fab fa-telegram-plane"></i>
                        </a>
                        <a href="https://twitter.com/uzdjtsu" class="mr-2">
                            <i class="icon-white fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/uzdjtsu.uzdjtsu" class="mr-2">
                            <i class="icon-white fab fa-facebook-square"></i>
                        </a>
                        <a href="https://www.youtube.com/" class="mr-2">
                            <i class="icon-white fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php foreach ($menuTree as $i => $menu):
                if ($i === 2): continue; endif; ?>
                <?php if (empty($menu['children'])): ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <div class="gym_widgets gym_footer_menu">
                        <h4 class="gym_sub_heading relative"><?= $menu['content'] ?></h4>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <div class="gym_widgets gym_footer_menu">
                        <h4 class="gym_sub_heading relative"><?= $menu['content'] ?></h4>
                        <ul>
                            <?php foreach ($menu['children'] as $child): ?>
                                <li class="gym_sub_heading-inner"><a href="<?= $child['link'] ?>"><i class="icons-footer fas fa-chevron-right"></i><?= $child['content'] ?> </a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <!-- Yandex.Metrika informer -->
        <a href="https://metrika.yandex.ru/stat/?id=77310028&amp;from=informer"
           target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/77310028/3_1_FFFFFFFF_FFFFFFFF_0_pageviews"
                                               style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                                               class="ym-advanced-informer" data-cid="77310028" data-lang="ru"/></a>
        <!-- /Yandex.Metrika informer -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(77310028, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true,
                trackHash: true
            });
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/77310028" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    </div>
</section>

<!-- Copyright section start -->
<div class="wa_copyright_wrapper" style="background: linear-gradient(
141deg ,rgb(54 134 39) 50%, rgb(42 132 49) 100%);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <div class="wa_copy_inner ">
                    <p class="" style="color: #fff;padding:40px 0">
                        &copy; <?= Yii::t('app', 'When using the materials on the site in full or in part, it is necessary to refer to this resource') ?> <br>
                        &copy; <?= date('Y'); ?> <?= Yii::t('app', 'Uzbek state university of physical culture and sport') ?> <br>
                        <?= Yii::t('app', 'Developed by <a href="{url}">PROACTIVE MEDIA</a>', ['url' => "https://proactive.uz"]) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- GO To Top -->
<a href="javascript:void(0);" id="scroll"><span class="fa fa-angle-double-up"></span></a>
<?php if (!isset($_COOKIE['toast'])) : ?>
    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" id="toast">
        <div class="toast-header">
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span onclick="myFunction()" style="color:#fff;" id="close_times" aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class=" telegram_icons1">
            <div><i class="fab fa-telegram-plane"></i></div>
            <div class="toast-body" style="padding-top: 10px !important;"><?= Yii::t('app', 'Join to our Telegram channel') ?></div>
            <div><a class="button_inner" href="<?= Unit::findOne(['slug' => 'telegram'])->getModelByType()->get() ?>" onclick="myFunction()" target="_blank" style="position: static;"><?= Yii::t('app', 'Join') ?></a></div>
        </div>
    </div>
<?php endif; ?>
