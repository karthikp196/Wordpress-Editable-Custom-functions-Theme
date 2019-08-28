<?php
/**
 * The template for displaying all single posts and attachments
 *

 */
 
get_header(); ?>

    <div class="full_cont">
    <div id="" class="container">
        <main id="main" class="site-main" role="main">
            
        <div class="col-lg-11 mywords">
                 
        <?php
        // Start the loop.
        while ( have_posts() ) : 
            ?>
     
        

      <div class="comm">
      <div class="col-lg-12 blg_img">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
        <img class="responsive" src="<?php echo $url ?>" />
        </div>
            <p>
            
            </p>
        <h1 class="blg_title">
       <?php
       the_title(); 
       ?>
       </h1> 
        
        <div class="ad">
       
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2195200211232142",
            enable_page_level_ads: true
        });
        </script>
        </div>
       

        
        <?php
            the_post(); 
        ?>
        <div class="col-lg-10 blg_cont">
            <p class="blg_txt">
            <?php
                 the_content();
            ?>
            </p>
        </div>
        
      </div>
       

        <?php
       
 
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
 
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
 
        // End the loop.
        endwhile;
        ?>
      
        </div>
 
      
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
    </div>
 
  
<?php get_footer(); ?>