<?php
  /****** Enable Post Thumbnails ******/
  function MUP_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
      $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
      return $html;
    }
    add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
  }
  add_action( 'after_setup_theme', 'MUP_post_thumbnails', 0 );
