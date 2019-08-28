
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Siam Computing - task</title>
    <link rel="shortcut icon" href="img/favi.png" type="image/png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php wp_head() ?>
  </head>

  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- adding custom logo -->
          <?php 
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          ?>
          <a href="index.html" class="navbar-brand"><img src="<?php echo $image[0]; ?>" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <?Php 
                  $args= array(
                  'theme_location' => 'primary'
                  );
                ?>
                <?php wp_nav_menu( $args ); ?>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title"><?php echo get_theme_mod('banner-section-heading'); ?></h2>
              <p><?php echo get_theme_mod('banner-section-text'); ?></p>
              <div class="header-button">
                <a href="<?php echo get_theme_mod('banner-section-button1'); ?>" class="btn btn-border-filled">Get Started</a>
                <a href="#contact" class="btn btn-border page-scroll">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
              <img src="<?php echo get_theme_mod('banner-section-image'); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </header>