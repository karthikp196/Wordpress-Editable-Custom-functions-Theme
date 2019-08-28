
<?php

add_action( 'customize_register', 'banner_customize' );
function banner_customize( $wp_customize ) {

  
    $wp_customize->add_section( 'banner-section' , array(
        'title'      => 'banner Section',
        
    ) );

    //coloumn 1 start
    $wp_customize->add_setting( 'banner-section-heading' , array(
        'default'     => 'Example heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner-heading-control', array(
        'label'        => 'first coloumn title',
        'section'    => 'banner-section',
        'settings'   => 'banner-section-heading',
    ) ) );  
    $wp_customize->add_setting( 'banner-section-text' , array(
        'default'     => 'Example text',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner-text-control', array(
        'label'        => 'first coloumn text',
        'section'    => 'banner-section',
        'settings'   => 'banner-section-text',
        'type' => 'textarea',
    ) ) );  

         
    $wp_customize->add_setting( 'banner-section-image');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner-section-image-control', array(
        'label'        => 'banner image',
        'section'    => 'banner-section',
        'settings'   => 'banner-section-image',
    ) ) );  
    $wp_customize->add_setting( 'banner-section-button1' , array(
        'default'     => 'button link',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner-button-control', array(
        'label'        => 'get started button link',
        'section'    => 'banner-section',
        'settings'   => 'banner-section-button1',
    ) ) );  
}

add_action( 'customize_register', 'service_customize' );
function service_customize( $wp_customize ) {

  
    $wp_customize->add_section( 'service-section' , array(
        'title'      => 'Service Section',
        
    ) );

    //coloumn 1 start
    $wp_customize->add_setting( 'service-section-heading' , array(
        'default'     => 'Example heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service-control', array(
        'label'        => 'first coloumn title',
        'section'    => 'service-section',
        'settings'   => 'service-section-heading',
    ) ) );  

    $wp_customize->add_setting( 'service-section-text' , array(
        'default'     => 'Example para',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service-text-control', array(
        'label'        => 'first coloumn Text',
        'section'    => 'service-section',
        'settings'   => 'service-section-text',
        'type' => 'textarea',
    ) ) );  
    //coloumn 1 end 

    //coloumn 2 start
      $wp_customize->add_setting( 'service-section-heading-2' , array(
        'default'     => 'Example heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service-control-2', array(
        'label'        => 'second coloumn title',
        'section'    => 'service-section',
        'settings'   => 'service-section-heading-2',
    ) ) );  

    $wp_customize->add_setting( 'service-section-text-2' , array(
        'default'     => 'Example para',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service-text-control-2', array(
        'label'        => 'second coloumn Text',
        'section'    => 'service-section',
        'settings'   => 'service-section-text-2',
        'type' => 'textarea',
    ) ) );  
    //coloumn 2 end 

     //coloumn 3 start
     $wp_customize->add_setting( 'service-section-heading-3' , array(
        'default'     => 'Example heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service-control-3', array(
        'label'        => 'third coloumn title',
        'section'    => 'service-section',
        'settings'   => 'service-section-heading-3',
    ) ) );  

    $wp_customize->add_setting( 'service-section-text-3' , array(
        'default'     => 'Example para',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service-text-control-3', array(
        'label'        => 'third coloumn Text',
        'section'    => 'service-section',
        'settings'   => 'service-section-text-3',
        'type' => 'textarea',
    ) ) );  
    //coloumn 3 end 

}


add_action( 'customize_register', 'business_customize' );
function business_customize( $wp_customize ) {

  
    $wp_customize->add_section( 'business-plan' , array(
        'title'      => 'Business plan',
        
    ) );


    $wp_customize->add_setting( 'business-heading' , array(
        'default'     => 'Example heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-head-text-control', array(
        'label'        => 'Business Plan Title',
        'section'    => 'business-plan',
        'settings'   => 'business-heading',
        'type' => 'textarea',
    ) ) );  

    $wp_customize->add_setting( 'business-plan-text' , array(
        'default'     => 'Example para',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-text-control', array(
        'label'        => 'business plan text Text',
        'section'    => 'business-plan',
        'settings'   => 'business-plan-text',
        'type' => 'textarea',
    ) ) );  

    
    $wp_customize->add_setting( 'business-plan-images');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'business-plan-images-control', array(
        'label'        => 'business plan image',
        'section'    => 'business-plan',
        'settings'   => 'business-plan-images',
    
       
    ) ) );  

 
}

//all service section customization


add_action( 'customize_register', 'allservice_customize' );
function allservice_customize( $wp_customize ) {

  
    $wp_customize->add_section( 'allservice-customization' , array(
        'title'      => 'allservice-customization',
        
    ) );

    // title customization
    $wp_customize->add_setting( 'allservice-heading-text' , array(
        'default'     => 'all services',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-heading-control', array(
        'label'        => 'all service heading',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-heading-text',
    ) ) );  

    $wp_customize->add_setting( 'allservice-heading-h4' , array(
        'default'     => 'inner text of services',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-heading-inner-control', array(
        'label'        => 'all service inner text',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-heading-h4',
        'type'   => 'textarea'
    ) ) );  
    //coloumn 1 customization 
    $wp_customize->add_setting( 'allservice-coloumn-heading' , array(
        'default'     => 'all services coloumn 1 heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-heading-coloumn-control', array(
        'label'        => 'first coloumn heading',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-heading',
    ) ) );  

    $wp_customize->add_setting( 'allservice-coloumn-para' , array(
        'default'     => 'inner text of services',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-coloumn-para-control', array(
        'label'        => 'first coloumn text',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-para',
        'type'   => 'textarea'
    ) ) );  
    // end of coloumn1 customization

    //coloumn 2 customization 
    $wp_customize->add_setting( 'allservice-coloumn-heading1' , array(
        'default'     => 'all services coloumn 2 heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-heading-coloumn2-control', array(
        'label'        => 'second coloumn heading',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-heading1',
    ) ) );  

    $wp_customize->add_setting( 'allservice-coloumn-para1' , array(
        'default'     => 'inner text of services1',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-coloumn-para1-control', array(
        'label'        => 'second coloumn text',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-para1',
        'type'   => 'textarea'
    ) ) );  
    // end of coloumn 2 customization
    
    //coloumn 3 customization 
    $wp_customize->add_setting( 'allservice-coloumn-heading2' , array(
        'default'     => 'all services coloumn 3 heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-heading-coloumn3-control', array(
        'label'        => 'third coloumn heading',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-heading2',
    ) ) );  

    $wp_customize->add_setting( 'allservice-coloumn-para2' , array(
        'default'     => 'inner text of services2',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-coloumn-para2-control', array(
        'label'        => 'third coloumn text',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-para2',
        'type'   => 'textarea'
    ) ) );  
    // end of coloumn 3 customization

    //coloumn 4 customization 
      $wp_customize->add_setting( 'allservice-coloumn-heading3' , array(
        'default'     => 'all services coloumn 4 heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-heading-coloumn4-control', array(
        'label'        => 'fourth coloumn heading',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-heading3',
    ) ) );  

    $wp_customize->add_setting( 'allservice-coloumn-para3' , array(
        'default'     => 'inner text of services 3',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-coloumn-para3-control', array(
        'label'        => 'fourth coloumn text',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-para3',
        'type'   => 'textarea'
    ) ) );  
    // end of coloumn 4 customization

    //coloumn 5 customization 
    $wp_customize->add_setting( 'allservice-coloumn-heading4' , array(
        'default'     => 'all services coloumn 5 heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-heading-coloumn5-control', array(
        'label'        => 'fifth coloumn heading',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-heading4',
    ) ) );  

    $wp_customize->add_setting( 'allservice-coloumn-para4' , array(
        'default'     => 'inner text of services 4',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-coloumn-para4-control', array(
        'label'        => 'fifth coloumn text',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-para4',
        'type'   => 'textarea'
    ) ) );  
    // end of coloumn 4 customization

    //coloumn 6 customization 
      $wp_customize->add_setting( 'allservice-coloumn-heading5' , array(
        'default'     => 'all services coloumn 5 heading',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-heading-coloumn6-control', array(
        'label'        => 'sixth coloumn heading',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-heading5',
    ) ) );  

    $wp_customize->add_setting( 'allservice-coloumn-para5' , array(
        'default'     => 'inner text of services 5',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'allservice-coloumn-para5-control', array(
        'label'        => 'sixth coloumn text',
        'section'    => 'allservice-customization',
        'settings'   => 'allservice-coloumn-para5',
        'type'   => 'textarea'
    ) ) );  
    // end of coloumn 6 customization

}


add_action( 'customize_register', 'pricing_customize' );
function pricing_customize( $wp_customize ) {

  
    $wp_customize->add_section( 'pricing-customization' , array(
        'title'      => 'pricing',
        
    ) );

    // title customization
    $wp_customize->add_setting( 'pricing-heading-text' , array(
        'default'     => 'all services',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing-heading-control', array(
        'label'        => 'pricing heading',
        'section'    => 'pricing-customization',
        'settings'   => 'pricing-heading-text',
    ) ) );  
    //text cutomization
    $wp_customize->add_setting( 'pricing-sub-text' , array(
        'default'     => 'pricing services',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing-sub-heading-control', array(
        'label'        => 'pricing sub heading',
        'section'    => 'pricing-customization',
        'settings'   => 'pricing-sub-text',
        'type' => 'textarea',
    ) ) );  
    
    //free
    $wp_customize->add_setting( 'price-text' , array(
        'default'     => '10',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'price-text-control', array(
        'label'        => 'free coloumn price',
        'section'    => 'pricing-customization',
        'settings'   => 'price-text',
    ) ) ); 

    $wp_customize->add_setting( 'price-feature-1' , array(
        'default'     => 'free internet',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'price-feature-1-control', array(
        'label'        => 'free feature 1',
        'section'    => 'pricing-customization',
        'settings'   => 'price-feature-1',
    ) ) );  

    $wp_customize->add_setting( 'price-feature-2' , array(
        'default'     => 'free internet',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'price-feature-2-control', array(
        'label'        => 'free feature 2',
        'section'    => 'pricing-customization',
        'settings'   => 'price-feature-2',
    ) ) );  

    $wp_customize->add_setting( 'price-feature-3' , array(
        'default'     => 'free internet',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'price-feature-3-control', array(
        'label'        => 'free feature 3',
        'section'    => 'pricing-customization',
        'settings'   => 'price-feature-3',
    ) ) );  

    $wp_customize->add_setting( 'price-feature-4' , array(
        'default'     => 'free internet',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'price-feature-4-control', array(
        'label'        => 'free feature 4',
        'section'    => 'pricing-customization',
        'settings'   => 'price-feature-4',
    ) ) );  

    $wp_customize->add_setting( 'price-feature-5' , array(
        'default'     => 'free internet',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'price-feature-5-control', array(
        'label'        => 'free feature 5',
        'section'    => 'pricing-customization',
        'settings'   => 'price-feature-5',
    ) ) );  

    $wp_customize->add_setting( 'price-feature-6' , array(
        'default'     => 'free internet',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'price-feature-6-control', array(
        'label'        => 'free feature 6',
        'section'    => 'pricing-customization',
        'settings'   => 'price-feature-6',
    ) ) );  

    //standard

    $wp_customize->add_setting( 'standard-price-text' , array(
        'default'     => '10',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard-price-text-control', array(
        'label'        => 'standard coloumn price',
        'section'    => 'pricing-customization',
        'settings'   => 'standard-price-text',
    ) ) ); 

    $wp_customize->add_setting( 'standard-feature1-text' , array(
        'default'     => 'free wifi',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard-feature1-text-control', array(
        'label'        => 'standard feature 1',
        'section'    => 'pricing-customization',
        'settings'   => 'standard-feature1-text',
    ) ) ); 

    $wp_customize->add_setting( 'standard-feature2-text' , array(
        'default'     => 'free wifi',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard-feature2-text-control', array(
        'label'        => 'standard feature 2',
        'section'    => 'pricing-customization',
        'settings'   => 'standard-feature2-text',
    ) ) ); 
    $wp_customize->add_setting( 'standard-feature3-text' , array(
        'default'     => 'free wifi',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard-feature3-text-control', array(
        'label'        => 'standard feature 3',
        'section'    => 'pricing-customization',
        'settings'   => 'standard-feature3-text',
    ) ) ); 

    $wp_customize->add_setting( 'standard-feature4-text' , array(
        'default'     => 'free wifi',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard-feature4-text-control', array(
        'label'        => 'standard feature 4',
        'section'    => 'pricing-customization',
        'settings'   => 'standard-feature4-text',
    ) ) ); 

    $wp_customize->add_setting( 'standard-feature5-text' , array(
        'default'     => 'free wifi',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard-feature5-text-control', array(
        'label'        => 'standard feature 5',
        'section'    => 'pricing-customization',
        'settings'   => 'standard-feature5-text',
    ) ) ); 

    $wp_customize->add_setting( 'standard-feature6-text' , array(
        'default'     => 'free wifi',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard-feature6-text-control', array(
        'label'        => 'standard feature 6',
        'section'    => 'pricing-customization',
        'settings'   => 'standard-feature6-text',
    ) ) ); 

    //business

     //standard

     $wp_customize->add_setting( 'business-price-text' , array(
        'default'     => '10',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-price-text-control', array(
        'label'        => 'business coloumn price',
        'section'    => 'pricing-customization',
        'settings'   => 'business-price-text',
    ) ) ); 

    $wp_customize->add_setting( 'business-feature1-text' , array(
        'default'     => 'Unlimited stoarage',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-feature1-text-control', array(
        'label'        => 'business feature 1',
        'section'    => 'pricing-customization',
        'settings'   => 'business-feature1-text',
    ) ) ); 
 
    $wp_customize->add_setting( 'business-feature2-text' , array(
        'default'     => 'Unlimited stoarage',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-feature2-text-control', array(
        'label'        => 'business feature 2',
        'section'    => 'pricing-customization',
        'settings'   => 'business-feature2-text',
    ) ) ); 

    $wp_customize->add_setting( 'business-feature3-text' , array(
        'default'     => 'Unlimited stoarage',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-feature3-text-control', array(
        'label'        => 'business feature 3',
        'section'    => 'pricing-customization',
        'settings'   => 'business-feature3-text',
    ) ) ); 

    $wp_customize->add_setting( 'business-feature4-text' , array(
        'default'     => 'Unlimited stoarage',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-feature4-text-control', array(
        'label'        => 'business feature 4',
        'section'    => 'pricing-customization',
        'settings'   => 'business-feature4-text',
    ) ) ); 
 
    $wp_customize->add_setting( 'business-feature5-text' , array(
        'default'     => 'Unlimited stoarage',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-feature5-text-control', array(
        'label'        => 'business feature 5',
        'section'    => 'pricing-customization',
        'settings'   => 'business-feature5-text',
    ) ) ); 
 
    $wp_customize->add_setting( 'business-feature6-text' , array(
        'default'     => 'Unlimited stoarage',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business-feature6-text-control', array(
        'label'        => 'business feature 6',
        'section'    => 'pricing-customization',
        'settings'   => 'business-feature6-text',
    ) ) ); 
 
}


add_action( 'customize_register', 'testimonial_customize' );
function testimonial_customize( $wp_customize ) {

  
    $wp_customize->add_section( 'testimonial-customization' , array(
        'title'      => 'Testimonial',
        
    ) );

    //client testimonial 1
    $wp_customize->add_setting( 'testimonial-client-text' , array(
        'default'     => 'testimonial client text',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'testimonial-client-text-control', array(
        'label'        => 'client testimonial-1',
        'section'    => 'testimonial-customization',
        'settings'   => 'testimonial-client-text',
        'type'  => 'textarea',
    ) ) );  

    $wp_customize->add_setting( 'testimonial-heading-text' , array(
        'default'     => 'client-name',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'testimonial-heading-control', array(
        'label'        => 'client-name',
        'section'    => 'testimonial-customization',
        'settings'   => 'testimonial-heading-text',
    ) ) );  

    $wp_customize->add_setting( 'testimonial-heading-position-text' , array(
        'default'     => 'position',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'testimonial-position-heading-control', array(
        'label'        => 'position',
        'section'    => 'testimonial-customization',
        'settings'   => 'testimonial-heading-position-text',
    ) ) );  

    //2nd testimonial

    $wp_customize->add_setting( 'testimonial-client2-text' , array(
        'default'     => 'testimonial client text2',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'testimonial-client2-text-control', array(
        'label'        => 'client testimonial-2',
        'section'    => 'testimonial-customization',
        'settings'   => 'testimonial-client2-text',
        'type'  => 'textarea',
    ) ) );  

    $wp_customize->add_setting( 'testimonial-heading-text2' , array(
        'default'     => 'client-name2',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'testimonial-heading2-control', array(
        'label'        => 'client-name 2',
        'section'    => 'testimonial-customization',
        'settings'   => 'testimonial-heading-text2',
    ) ) );  

    $wp_customize->add_setting( 'testimonial-heading-position2-text' , array(
        'default'     => 'position 2',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'testimonial-position2-heading-control', array(
        'label'        => 'position ',
        'section'    => 'testimonial-customization',
        'settings'   => 'testimonial-heading-position2-text',
    ) ) );  


}


add_action( 'customize_register', 'team_customize' );
function team_customize( $wp_customize ) {

  
    $wp_customize->add_section( 'team-customization' , array(
        'title'      => 'Team',
        
    ) );

    //client testimonial 1
    $wp_customize->add_setting( 'team-member-name' , array(
        'default'     => 'name',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team-member-name-control', array(
        'label'        => 'team member 1',
        'section'    => 'team-customization',
        'settings'   => 'team-member-name',
    ) ) );  

    $wp_customize->add_setting( 'team-member-position' , array(
        'default'     => 'Position',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team-member-position-control', array(
        'label'        => 'team member position',
        'section'    => 'team-customization',
        'settings'   => 'team-member-position',
    ) ) );  

      
    $wp_customize->add_setting( 'team-member-image');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team-member-image-control', array(
        'label'        => 'team member image',
        'section'    => 'team-customization',
        'settings'   => 'team-member-image',
    ) ) );  

    $wp_customize->add_setting( 'team-member-fb' , array(
        'default'     => 'paste fb link',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team-member-fb-control', array(
        'label'        => 'facebook link',
        'section'    => 'team-customization',
        'settings'   => 'team-member-fb',
    ) ) );  
    $wp_customize->add_setting( 'team-member-tw' , array(
        'default'     => 'paste tw link',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team-member-tw-control', array(
        'label'        => 'twitter link',
        'section'    => 'team-customization',
        'settings'   => 'team-member-tw',
    ) ) );  

    $wp_customize->add_setting( 'team-member-g' , array(
        'default'     => 'paste g link',
      
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team-member-g-control', array(
        'label'        => 'google link',
        'section'    => 'team-customization',
        'settings'   => 'team-member-g',
    ) ) );  


}
?>