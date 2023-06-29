<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\TempAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

TempAsset::register($this);
$lang = Yii::$app->language;
if($lang == 'en'){
  $l = 'English';
}else{
  $l = 'Русский';
}

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>  
</head>
<body>
<?php $this->beginBody() ?>


<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Hidayah</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero"><?php  echo Yii::t('common', 'Home') ?></a></li>
          <li><a class="nav-link scrollto" href="#about"><?php  echo Yii::t('common', 'About') ?></a></li>
          <li><a class="nav-link scrollto" href="#services"><?php  echo Yii::t('common', 'Services') ?></a></li>
          <li><a class="nav-link scrollto" href="#portfolio"><?php  echo Yii::t('common', 'Portfolio') ?></a></li>
          <li><a class="nav-link scrollto" href="#team"><?php  echo Yii::t('common', 'Team') ?></a></li>
          <li><a class="nav-link scrollto" href="#contact"><?php  echo Yii::t('common', 'Contact') ?></a></li>
          <li class="dropdown"><a href="#"><span><?=$l?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><?php echo Html::a('EN', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'en'])) ?></li>
              <li><?php echo Html::a('RU', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'ru'])) ?></li>
            </ul>
          </li>
        
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>
</header>

<?= $content ?>

  <footer id="footer">

    

    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-links">
                <h4><?php  echo Yii::t('common', 'Useful Links') ?></h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Home') ?></a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'About') ?></a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Services') ?></a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Terms') ?></a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Privacy') ?></a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4><?php  echo Yii::t('common', 'Our Services') ?></h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Web Design') ?></a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Web Development') ?></a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Product Management') ?></a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Marketing') ?></a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php  echo Yii::t('common', 'Graphic Design') ?></a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-contact">
                <h4><?php  echo Yii::t('common', 'Contact Us') ?></h4>
                <p>
                  A108 Adam Street <br>
                  New York, NY 535022<br>
                  United States <br><br>
                  <strong><?php  echo Yii::t('common', 'Phone') ?></strong> +1 5589 55488 55<br>
                  <strong><?php  echo Yii::t('common', 'Email') ?></strong> info@example.com<br>
                </p>

              </div>

              <div class="col-lg-3 col-md-6 footer-info">
                <h3><?php  echo Yii::t('common', 'About Hidayah') ?></h3>
                <p><?php  echo Yii::t('common', 'Example1') ?></p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <?php  echo Yii::t('common', 'Copyright') ?><strong><span>Hidayah</span></strong>. <?php  echo Yii::t('common', 'Rights') ?>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/ -->
      </div>
    </div>
  </footer>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
