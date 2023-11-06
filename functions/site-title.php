<?php
  /****** Site title ******/
  function MUP_wp_title( $title ) {
    // Do not filter for RSS feed / if SEO plugin installed
    if ( is_feed() || class_exists('All_in_One_SEO_Pack') || class_exists('HeadSpace_Plugin') || class_exists('Platinum_SEO_Pack') || class_exists('wpSEO') || defined('WPSEO_VERSION') )
      return $title;
    if ( is_front_page() ) { 
      $title = get_bloginfo('name').' - '.get_bloginfo('description');
    }
    if ( is_front_page() && get_bloginfo('description') == '' ) { 
      $title = get_bloginfo('name');
    }
    if ( !is_front_page() ) { 
      $title .= ' - '.get_bloginfo('name');
    }
    return $title;
  }
  add_filter( 'wp_title', 'MUP_wp_title' );