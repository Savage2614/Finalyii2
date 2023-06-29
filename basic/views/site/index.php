<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
$lang = Yii::$app -> language;

if($lang == 'ru'){
  $title = 'titleru';
  $description ='descriptionru';
  $name = 'nameru';
  $post = 'postru';
  $quote = 'quoteru';
  $workername = 'workernameru';
  $workerpost = 'workerpostru';
}else{
  $title = 'title';
  $description ='description';
  $name = 'name';
  $post = 'post';
  $quote = 'quote';
  $workername = 'workername';
  $workerpost = 'workerpost';
}

$this->title = 'My Yii Application';
?>
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <?php foreach ($mainsliders as $mainslider) { ?>
        <div class="carousel-item active" style="background: url('/uploads/mainslider/<?php echo $mainslider -> bgimage?>')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown"><?php echo $mainslider -> $title?></span></h2>
              <p class="animated fadeInUp"><?php echo $mainslider -> $description?></p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto"><?php  echo Yii::t('common', 'Read More') ?></a>
            </div>
          </div>
        </div>
          <?php }?>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3><?php  echo Yii::t('common', 'Text-fish') ?></h3>
            <p><?php  echo Yii::t('common', 'Example1') ?></p>
            <?php foreach ($aboutsection as $aboutsec) { ?>
            <div class="icon-box">
              <div class="icon"><i class="<?php echo $aboutsec -> icon?>"></i></div>
              <h4 class="title"><a href=""><?php  echo $aboutsec -> $title?></a></h4>
              <p class="description"><?php  echo $aboutsec -> $description ?></p>
            </div>
            <?php }?>
            

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container-fluid">

        <div class="row justify-content-center skills-content">

          <div class="col-xl-5 col-lg-6">

          <?php foreach ($percentsLeft as $percentleft) { ?>
            <div class="progress">
              <span class="skill"><?php echo $percentleft -> name?><i class="val"><?php echo $percentleft -> percent?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percentleft -> percent?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          <?php }?>
          </div>

          <div class="col-xl-5 col-lg-6">
            <?php foreach ($percentsRight as $percentright) { ?> 
            <div class="progress">
              <span class="skill"><?php echo $percentright -> name?><i class="val"><?php echo $percentright -> percent?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percentright -> percent?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <?php }?>
            </php>
          </div>
        
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container-fluid">

        <div class="row counters">
          <?php foreach($aboutinfo as $about) { ?>
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $about -> clients ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php  echo Yii::t('common', 'Clients') ?></p>
          </div>
          
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $about -> projects ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php  echo Yii::t('common', 'Projects') ?></p>
          </div>
          
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $about -> hoursofsupport ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php  echo Yii::t('common', 'Hours') ?></p>
          </div>
          
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $about -> hardworkers ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php  echo Yii::t('common', 'Workers') ?></p>
          </div>
          <?php }?>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container-fluid">

        <div class="section-title">
          <h2><?php  echo Yii::t('common', 'Services') ?></h2>
          <h3><?php  echo Yii::t('common', 'Check') ?><span><?php  echo Yii::t('common', 'Services') ?></span></h3>
          <p><?php  echo Yii::t('common', 'Example1') ?></p>
        </div>

        <div class="row justify-content-center">
         <div class="col-xl-10">
            <div class="row">
              <?php foreach($services as $service) { ?>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="<?php echo $service -> icon?>"></i></div>
                <h4 class="title"><a href=""><?php echo $service -> $title?></a></h4>
                <p class="description"><?php echo $service -> $description?></p>
              </div>
              <?php }?>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3><?php  echo Yii::t('common', 'Call') ?></h3>
          <p><?php  echo Yii::t('common', 'Example1') ?></p>
          <a class="cta-btn" href="tel:+1 5589 55488 55"><?php  echo Yii::t('common', 'Call') ?></a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2><?php  echo Yii::t('common', 'Portfolio') ?></h2>
          <h3><?php  echo Yii::t('common', 'Check') ?><span><?php  echo Yii::t('common', 'Portfolio') ?></span></h3>
          <p><?php  echo Yii::t('common', 'Example1') ?></p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach($categorys as $category){?>
                <li data-filter=".filter-<?php echo $category -> id ?>"><?php echo $category -> categoryname ?></li>
              <?php } ?>            
            </ul>
          </div>
        </div>

        <div class="row portfolio-container justify-content-center">

          <?php foreach($portfoliophotos as $photo) {?>
          <div class="col-xl-10">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo $photo -> categoryid?>">
                <div class="portfolio-wrap">
                  <img src="/uploads/portfoliophotos/<?php echo $photo -> image?>" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><?php echo $photo -> title?></h4>
                    <p><?php echo $photo -> description?></p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->
              <?php }?>

    

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2><?php  echo Yii::t('common', 'Testimonials') ?></h2>
          <h3><?php  echo Yii::t('common', 'What they') ?><span><?php  echo Yii::t('common', 'Are saying') ?></span><?php  echo Yii::t('common', 'About us') ?></h3>
          <p><?php  echo Yii::t('common', 'Example1') ?></p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">

            <div class="row">

            <?php foreach($staffs as $staff) {?>

              <div class="col-lg-6">
                <div class="testimonial-item">
                  <img src="/Hidayah/assets/img/testimonials/<?php echo $staff -> img?>" class="testimonial-img" alt="">
                  <h3><?php echo $staff -> $name ?></h3>
                  <h4> <?php echo $staff -> $post ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php echo $staff ->  $quote ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <?php }?>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container-fluid">

        <div class="section-title">
          <h2><?php  echo Yii::t('common', 'Team') ?></h2>
          <h3><?php  echo Yii::t('common', 'Our') ?><span><?php  echo Yii::t('common', 'Team') ?></span></h3>
          <p><?php  echo Yii::t('common', 'Example1') ?></p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <?php foreach($workingteam as $workers) { ?>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member">
                  <img src="/uploads/workers/<?php echo $workers -> workerimage?>" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4><?php echo $workers -> $workername?></h4>
                      <span><?php echo $workers -> $workerpost?></span>
                    </div>
                    <div class="social">
                      <a href="<?php echo $workers -> twitterurl?>"><i class="bi bi-twitter"></i></a>
                      <a href="<?php echo $workers -> facebookurl?>"><i class="bi bi-facebook"></i></a>
                      <a href="<?php echo $workers -> instagramurl?>"><i class="bi bi-instagram"></i></a>
                      <a href="<?php echo $workers -> linkedinurl?>"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->
              <?php }?>

              <!-- End Member Item -->

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2><?php  echo Yii::t('common', 'Contact') ?></h2>
          <h3><?php  echo Yii::t('common', 'Get') ?><span><?php  echo Yii::t('common', 'Us') ?></span></h3>
          <p><?php  echo Yii::t('common', 'Example1') ?></p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4><?php  echo Yii::t('common', 'Address') ?></h4>
                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4><?php  echo Yii::t('common', 'Call') ?></h4>
                    <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4><?php  echo Yii::t('common', 'Email Us') ?></h4>
                    <p>contact@example.com<br>info@example.com</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-time-five"></i>
                    <h4><?php  echo Yii::t('common', 'Wk') ?></h4>
                    <p><?php  echo Yii::t('common', 'Monfri') ?><br><?php  echo Yii::t('common', 'Sunday') ?></p>
                  </div>

                </div>

              </div>

              <div class="col-lg-6">

          


                <?php $form = ActiveForm::begin([
                  'fieldConfig' => [
                    'template' => "{input}{hint}",
                    'options' => [
                      'tag' => false
                    ],
                  ],
                    'options' => [
                      'class' => 'php-email-form'
                    ]
                  
                ]); ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name" class="control-label"><?php  echo Yii::t('common', 'Your Name') ?></label>
                      <?= $form->field($forms, 'name')->textInput(['maxlength' => true ]) ?>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="email" class="control-label"><?php  echo Yii::t('common', 'Your Email') ?></label>
                      <?= $form->field($forms, 'email')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="subject" class="control-label"><?php  echo Yii::t('common', 'Subject') ?></label>
                    <?= $form->field($forms, 'subject')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="form-group mt-3">
                    <label for="message" class="control-label"><?php  echo Yii::t('common', 'Message') ?></label>
                    <?= $form->field($forms, 'message')->textarea(['rows' => 6]) ?>
                </div>
                <div class="text-center my-3">
                    <?= Html::submitButton(Yii::t('common', 'Send Message')) ?>
                </div>

                <?php ActiveForm::end(); ?>

              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>