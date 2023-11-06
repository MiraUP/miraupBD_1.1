<?php
  /****** Search ******/
  function load_search_results() {
    $query = $_POST['query'];
    $showposts = '9999999';
    $postFav = array();
    $filterSearch = $_POST['filterSearch'];
    $filterSearch = $_POST['filterSearch'];

    if ($filterSearch == 'allCategory') { $category = ''; }
    else {
      $filterSearch = $_POST['filterSearch'];
      $category = $filterSearch;
    }
    
    if ($_POST['galleryView'] == 'allFilter') { 
      $postFav = array();
    } else { 
      
      if($_POST['galleryView'] == 'new-post') { $showposts = '10'; }
      elseif ($_POST['galleryView'] == 'favorite') {

        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM wp_favpost WHERE `user_id`=" . get_current_user_id() . " AND `_fav_post`='fav'");

        foreach ($result as $row) { $postFav[] = $row->_fav_id_post; }

      } else {}
    }

    $args = array(
      'post__in' => $postFav,
      'post_type' => 'post',
      'post_status' => 'publish',
      's' => $query,
      'category_name' => $category,
      'showposts' => $showposts
    );
    $search = new WP_Query( $args );

    ob_start();

    if ( $search->have_posts() ) {
      while ( $search->have_posts() ) { 
        $search->the_post();
        get_template_part( 'template_part/gallery/gallery-item' );
        echo '<script>FavoriteBtnAction();</script>';
      }
    }
    else { get_template_part( 'template_part/search/no-result' ); }

    $content = ob_get_clean();
    echo $content;
    
	  die();
  }
  add_action( 'wp_ajax_load_search_results', 'load_search_results' );
  add_action( 'wp_ajax_nopriv_load_search_results', 'load_search_results' );