<?php
  /****** Post Meta ******/
  function miraupbd_create_post_meta() {
    //Exclude Category 
    $category__not_in = array();
    $slugs            = array ( 'icone' );
    foreach ( $slugs as $slug ) {
      $cat = get_category_by_slug( $slug );
      $cat and $category__not_in[] = $cat->term_id;
    }

    $args = array(
      'post_type'        => 'post',
      'suppress_filters' => true,
      //'category__not_in' => $category__not_in
    );
    $posts_array = get_posts( $args );
    foreach($posts_array as $post_array) {
      if(empty(get_post_meta($post_array->ID, 'link_download',))) {
        add_post_meta($post_array->ID, 'link_download', '');
      }
      /* delete_post_meta($post_array->ID, "link_download"); */
    }
  }
  add_action('init', 'miraupbd_create_post_meta');
