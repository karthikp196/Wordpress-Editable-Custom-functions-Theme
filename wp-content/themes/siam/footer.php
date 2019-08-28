  <!-- Footer Section Start -->
  <footer>
      <!-- Footer Area Start -->
      <section id="footer-Content">
        <div class="container">
          <!-- Start Row -->
          <div class="row">

          <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">

              <div class="footer-logo">
               <img src="img/siam.png" alt="">
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Company</h3>
                <ul class="menu">
                    <?Php 
                      $args= array(
                      'theme_location' => 'footer-1'
                      );
                    ?>
                    <?php wp_nav_menu( $args ); ?>
                </ul>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Product</h3>
                <ul class="menu">
                   <?Php 
                      $args= array(
                      'theme_location' => 'footer-2'
                      );
                    ?>
                    <?php wp_nav_menu( $args ); ?>
                </ul>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Download App</h3>
                <ul class="menu">
                    <?Php 
                      $args= array(
                      'theme_location' => 'footer-3'
                      );
                    ?>
                    <?php wp_nav_menu( $args ); ?>
                </ul>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Subscribe Now</h3>
                <p>Appropriately implement calysts for change visa wireless catalysts for change. </p>
                <div class="subscribe-area">
                  <input type="email" class="form-control" placeholder="Enter Email">
                  <span><i class="lni-chevron-right"></i></span>
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- Copyright Start  -->

        <div class="copyright">
          <div class="container">
            <!-- Star Row -->
            <div class="row">
              <div class="col-md-12">
                <div class="site-info text-center">
                  <p>Crafted by <a href="http://siamcomputing.com" rel="nofollow">Siam Computing</a></p>
                </div>

              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      <!-- Copyright End -->
      </section>
      <!-- Footer area End -->

    </footer>
    <!-- Footer Section End -->


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

 
    <?php wp_footer(); ?>
  </body>
</html>
