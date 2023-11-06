<?php

  if ( is_user_logged_in() ) { 

    get_header(); 

      get_sidebar( 'offcanvas' ); 

      get_template_part( 'template_part/banner/index' );

      get_template_part( 'template_part/search/index' );

      get_template_part( 'template_part/gallery/gallery' );

    get_footer();  
    
  } 
  else { 
    wp_redirect(site_url().'/login' );
  }