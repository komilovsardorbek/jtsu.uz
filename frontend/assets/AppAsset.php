<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/bootstrap.min.css',
        '/css/animate.css',
        '/css/swiper.min.css',
        '/css/magnific-popup.css',
        '/css/font.css',
        '/css/font-awesome.min.css',
        '/css/jquery-jvectormap-2.0.3.css',
        '/css/comman.css',
        '/css/style.css',
        '/css/header-responsive.css',
        '/css/header_black.css',
        '/css/dropdown.css',
        '/css/counter.css',
        '/css/audio.css',
        '/css/mega-menu.css',
        '/css/owl.carousel.min.css',
        '/css/owl.theme.default.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',
        '/css/toast.css',
        '/css/bgimages.css',
        '/css/map.css',
        '/css/nice-select.css',
        '/css/particles.css',
         '/css/main.css'

    ];
    public $js = [
       '/js/jquery.min.js',
       '/js/bootstrap.min.js',
        '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        '/js/SmoothScroll.min.js',
        '/js/swiper.min.js',
        '/js/wow.min.js',
        '/js/tilt.js',
        '/js/jquery.magnific-popup.min.js',
        '/js/isotope.pkgd.min.js',
        '/js/jquery-jvectormap.min.js',
        '/js/jquery-jvectormap-world-mill.js',
        '/js/custom1.js',
        '/js/drop.js',
        '/js/main.js',
        '//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js',
        '/js/owl.carousel.js',
        '/js/owl.carousel.min.js',
        '/js/app.js',
        '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        '/js/own.js',
        '/js/toast.js',
        '/js/nice-select.min.js',
        '/js/particles.js',
        '////cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js',
        '/js/counter.js'
    ];
    public $depends = [
        YiiAsset::class,
    ];
}
