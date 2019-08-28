<?php
/*

/* Template Name: Home page

*/
?>

<?php
    get_header();
?>
 <!-- Services Section Start -->
 <section id="services" class="section">
      <div class="container">

        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <h4> <?php echo get_theme_mod('service-section-heading'); ?></h4>
              <p><?php echo get_theme_mod('service-section-text'); ?></p>
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <i class="lni-brush"></i>
              </div>
              <h4><?php echo get_theme_mod('service-section-heading-2'); ?></h4>
              <p><?php echo get_theme_mod('service-section-text-2'); ?></p>
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <h4><?php echo get_theme_mod('service-section-heading-3'); ?></h4>
              <p><?php echo get_theme_mod('service-section-text-3'); ?></p>
            </div>
          </div>
          <!-- End Col -->

        </div>
      </div>
    </section>
    <!-- Services Section End -->
    
    <!-- Business Plan Section Start -->
    <section id="business-plan">
      <div class="container">

        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
            <div class="business-item-img">
              <img src="<?php echo get_theme_mod('business-plan-images'); ?>" class="img-fluid" alt="">
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12 pl-4">
            <div class="business-item-info">
            
              <h3><?php echo get_theme_mod('business-heading'); ?></h3>
              <p><?php echo get_theme_mod('business-plan-text'); ?></p>
            </div>
          </div>
          <!-- End Col -->

        </div>
      </div>
    </section>
    <!-- Business Plan Section End -->

     <!-- Cool Fetatures Section Start -->
     <section id="features" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="features-text section-header text-center">
              <div>
                <h2 class="section-title"><?php echo get_theme_mod('allservice-heading-text'); ?></h2>
                <div class="desc-text">
                  <p><?php echo get_theme_mod('allservice-heading-h4'); ?></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row featured-bg">
         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border1">
               <div class="feature-icon float-left">
                 <i class="lni-coffee-cup"></i>
               </div>
               <div class="feature-info float-left">
                 <h4><?php echo get_theme_mod('allservice-coloumn-heading'); ?></h4>
                 <p><?php echo get_theme_mod('allservice-coloumn-para'); ?></p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->

         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border2">
               <div class="feature-icon float-left">
                 <i class="lni-briefcase"></i>
               </div>
               <div class="feature-info float-left">
                 <h4><?php echo get_theme_mod('allservice-coloumn-heading1'); ?></h4>
                 <p><?php echo get_theme_mod('allservice-coloumn-para1'); ?></p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->

         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border1">
               <div class="feature-icon float-left">
                 <i class="lni-invention"></i>
               </div>
               <div class="feature-info float-left">
               <h4><?php echo get_theme_mod('allservice-coloumn-heading2'); ?></h4>
               <p><?php echo get_theme_mod('allservice-coloumn-para2'); ?></p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->

         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border2">
               <div class="feature-icon float-left">
                <i class="lni-layers"></i>
               </div>
               <div class="feature-info float-left">
               <h4><?php echo get_theme_mod('allservice-coloumn-heading3'); ?></h4>
               <p><?php echo get_theme_mod('allservice-coloumn-para3'); ?></p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->

         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border3">
               <div class="feature-icon float-left">
                 <i class="lni-reload"></i>
               </div>
               <div class="feature-info float-left">
               <h4><?php echo get_theme_mod('allservice-coloumn-heading4'); ?></h4>
               <p><?php echo get_theme_mod('allservice-coloumn-para4'); ?></p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->

         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item">
               <div class="feature-icon float-left">
                 <i class="lni-support"></i>
               </div>
               <div class="feature-info float-left">
               <h4><?php echo get_theme_mod('allservice-coloumn-heading5'); ?></h4>
               <p><?php echo get_theme_mod('allservice-coloumn-para5'); ?></p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->


        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Cool Fetatures Section End -->

    
    <!-- Recent Showcase Section Start -->
    <section id="showcase">
      <div class="container-fluid right-position">
        <!-- Start Row -->
        <div class="row gradient-bg">
          <div class="col-lg-12">
            <div class="showcase-text section-header text-center">
              <div>
                <h2 class="section-title">Recent Works</h2>
                <div class="desc-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                  <p>eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row justify-content-center showcase-area">
          <div class="col-lg-12 col-md-12 col-xs-12 pr-0">
            <div class="showcase-slider owl-carousel">
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/01.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/02.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/02.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/03.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/03.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/04.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/04.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/05.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/05.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/01.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/02.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/02.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/03.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/03.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/04.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/04.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/05.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/05.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/01.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/02.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/03.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/04.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/05.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/01.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/02.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/03.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/04.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?> /img/showcase/05.jpg" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p>Icon , Web</p>
                          <h5>Redesign Slack</h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Recent Showcase Section End -->

      <!-- Our Pricing Plan Section Start -->
      <section id="pricing" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="pricing-text section-header text-center">
              <div>
                <h2 class="section-title"><?php echo get_theme_mod('pricing-heading-text'); ?></h2>
                <div class="desc-text">
                  <p><?php echo get_theme_mod('pricing-sub-text'); ?></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row pricing-tables">
         <!--  Start Col -->
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table text-center">
              <div class="pricing-details">
                <h3>Free</h3>
                <h1><span>$</span><?php echo get_theme_mod('price-text'); ?></h1>
                <ul>
                  <li><?php echo get_theme_mod('price-feature-1'); ?></li>
                  <li><?php echo get_theme_mod('price-feature-2'); ?></li>
                  <li><?php echo get_theme_mod('price-feature-3'); ?></li>
                  <li><?php echo get_theme_mod('price-feature-4'); ?></li>
                  <li><?php echo get_theme_mod('price-feature-5'); ?></li>
                  <li><?php echo get_theme_mod('price-feature-6'); ?></li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Purchase</a>
              </div>
            </div>
          </div>
           <!--  End Col -->
         <!--  Start Col -->
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table text-center">
              <div class="pricing-details">
                <h3>standard</h3>
                <h1><span>$</span><?php echo get_theme_mod('standard-price-text'); ?></h1>
                <ul>
                  <li><?php echo get_theme_mod('standard-feature1-text'); ?></li>
                  <li><?php echo get_theme_mod('standard-feature2-text'); ?></li>
                  <li><?php echo get_theme_mod('standard-feature3-text'); ?></li>
                  <li><?php echo get_theme_mod('standard-feature4-text'); ?></li>
                  <li><?php echo get_theme_mod('standard-feature5-text'); ?></li>
                  <li><?php echo get_theme_mod('standard-feature6-text'); ?></li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Purchase</a>
              </div>
            </div>
          </div>
           <!--  End Col -->
         <!--  Start Col -->
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table text-center">
              <div class="pricing-details">
                <h3>Business</h3>
                <h1><span>$</span><?php echo get_theme_mod('business-price-text'); ?></h1>
                <ul>
                  <li><?php echo get_theme_mod('business-feature1-text'); ?></li>
                  <li><?php echo get_theme_mod('business-feature2-text'); ?></li>
                  <li><?php echo get_theme_mod('business-feature3-text'); ?></li>
                  <li><?php echo get_theme_mod('business-feature4-text'); ?></li>
                  <li><?php echo get_theme_mod('business-feature5-text'); ?></li>
                  <li><?php echo get_theme_mod('business-feature6-text'); ?></li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Purchase</a>
              </div>
            </div>
          </div>
           <!--  End Col -->

        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Our Pricing Plan Section End -->

     <!-- Client Testimoninals Section Start -->
     <section id="testimonial" class="section">
      <div class="container right-position">
        <!-- Start Row -->
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="video-promo-content text-center">

              <a id="play-video" class="video-play-button video-popup" href="https://www.youtube.com/watch?v=Y4fodpIwal8&list=RDXCElIIYx_8s&index=13">
                <span></span>
              </a>

            </div>
          </div>
        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row justify-content-center testimonial-area">
          <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pr-20 pl-20" style="overflow: hidden;padding-bottom: 60px">
            <div id="client-testimonial" class="text-center owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="content-inner">
                    <p class="description"><?php echo get_theme_mod('testimonial-client-text'); ?></p>
                    <div class="author-info">
                      <h5><?php echo get_theme_mod('testimonial-heading-text'); ?> ; <span> <?php echo get_theme_mod('testimonial-heading-position-text'); ?></span></h5>
                    </div>
                  </div>
                  <div class="client-thumb">
                    <img src="img/testimonial/01.png" alt="">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content-inner">
                    <p class="description"><?php echo get_theme_mod('testimonial-client2-text'); ?></p>
                    <div class="author-info">
                      <h5><?php echo get_theme_mod('testimonial-heading-text2'); ?> <span><?php echo get_theme_mod('testimonial-heading-position2-text'); ?></span></h5>
                    </div>
                  </div>
                  <div class="client-thumb">
                    <img src="img/testimonial/01.png" alt="">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                    <div class="author-info">
                      <h5>Tahmina Anny ; <span> Siam Computing Customer</span></h5>
                    </div>
                  </div>
                  <div class="client-thumb">
                    <img src="img/testimonial/01.png" alt="">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                    <div class="author-info">
                      <h5>Tahmina Anny ; <span> Siam Computing Customer</span></h5>
                    </div>
                  </div>
                  <div class="client-thumb">
                    <img src="img/testimonial/01.png" alt="">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                    <div class="author-info">
                      <h5>Tahmina Anny ; <span> Siam Computing Customer</span></h5>
                    </div>
                  </div>
                  <div class="client-thumb">
                    <img src="img/testimonial/01.png" alt="">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                    <div class="author-info">
                      <h5>Tahmina Anny ; <span> Siam Computing Customer</span></h5>
                    </div>
                  </div>
                  <div class="client-thumb">
                    <img src="img/testimonial/01.png" alt="">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Client Testimoninals Section End -->

      <!-- Team section Start -->
      <section id="team" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="team-text section-header text-center">
              <div>
                <h2 class="section-title">Team Members</h2>
                <div class="desc-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                  <p>eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <div class="team-thumb">
                <img src="<?php echo get_theme_mod('team-member-image'); ?>" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list">
                    <li><a href="<?php echo get_theme_mod('team-member-fb'); ?>"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="<?php echo get_theme_mod('team-member-tw'); ?>"><i class="lni-twitter-filled"></i></a></li>
                    <li><a href="<?php echo get_theme_mod('team-member-g'); ?>"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="team-inner text-center">
                  <h5 class="team-title"><?php echo get_theme_mod('team-member-name'); ?></h5>
                  <p><?php echo get_theme_mod('team-member-position'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->

          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/02.jpg" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list">
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="team-inner text-center">
                  <h5 class="team-title">Celina D Cruze</h5>
                  <p>Front-end Developer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->

          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/03.jpg" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list">
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="team-inner text-center">
                  <h5 class="team-title">Daryl Dixon</h5>
                  <p>Content Writer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->

          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/04.jpg" class="img-fluid" alt="">
              </div>

              <div class="team-details">
                <div class="team-social-icons">
                  <ul class="social-list">
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="team-inner text-center">
                  <h5 class="team-title">Mark Parker</h5>
                  <p>Support Engineer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->


        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Team section End -->

    <section>
      <div class="container">
         <?php echo do_shortcode ('[wp_blog_designer id="1"]'); ?>
         <p>
          s
         </p>
      </div>
      
    </section>
 <!-- Contact Us Section -->
 <section id="contact" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-text section-header text-center">
              <div>
                <h2 class="section-title">Get In Touch</h2>
                <div class="desc-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                  <p>eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12">
          <form id="contactForm">
            <div class="row">
            <?php echo do_shortcode ('[contact-form-7 id="92" title="Contact form 1"]'); ?>
            </div>
          </form>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1">

          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-4 col-md-12">
            <div class="contact-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/contact/01.png" class="img-fluid" alt="">
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1">
          </div>
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Contact Us Section End -->

<?php
    get_footer();
?>