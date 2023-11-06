<?php
  /*
    Template Name: General Template
  */
  
  if ( is_user_logged_in() ) { 

    get_header(); 

    get_footer();  
    
  } 
  else { 
    wp_redirect( wp_login_url() );
  }