
<?php

  if ( is_user_logged_in() ) { 

    get_header(); 

      while( have_posts() ) {
        the_post();

        if ( comments_open() || get_comments_number() ) {
          get_template_part( 'pages_template/single/offcanvas-comments' );
        }

        if(in_category('icone')) { get_template_part( 'pages_template/icon-single/icon-single' ); }

        else {

          get_template_part( 'template_part/header/bar-top-iten-actions' );
        
          echo '<section class="single-page inner-page">';
            
            get_template_part( 'pages_template/single/header' );

            get_template_part( 'pages_template/single/content' );

          echo '</section>';

        }
      }

    get_footer();  
    
  } 
  else { 
    wp_redirect( site_url().'/login' );
  }