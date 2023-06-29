<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TempAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',
        'Hidayah/assets/vendor/animate.css/animate.min.css',
        'Hidayah/assets/vendor/bootstrap/css/bootstrap.min.css',
        'Hidayah/assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'Hidayah/assets/vendor/boxicons/css/boxicons.min.css',
        'Hidayah/assets/vendor/glightbox/css/glightbox.min.css',
        'Hidayah/assets/vendor/remixicon/remixicon.css',
        'Hidayah/assets/vendor/swiper/swiper-bundle.min.css',
        'Hidayah/assets/css/style.css',


    ];
    public $js = [
        'Hidayah/assets/vendor/purecounter/purecounter_vanilla.js',
        'Hidayah/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'Hidayah/assets/vendor/glightbox/js/glightbox.min.js',
        'Hidayah/assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'Hidayah/assets/vendor/swiper/swiper-bundle.min.js',
        'Hidayah/assets/vendor/waypoints/noframework.waypoints.js',
        'Hidayah/assets/vendor/php-email-form/validate.js',
        'Hidayah/assets/js/main.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
