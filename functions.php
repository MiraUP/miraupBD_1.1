<?php
  /**
  *   Assets
  */
  /****** Styles & Scripts ******/
  function MUP_load_scripts() {
    wp_enqueue_style( 'miraupbd-style', get_template_directory_uri() . '/assets/css/main.min.css', array(), /*wp_get_theme()->get('Version')*/ filemtime( get_template_directory() . '/assets/css/main.min.css' ), 'all' );

    //jQuery 3.6.0
    wp_enqueue_script( 'jquery-3.6.0', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', false );

    //Bootstrap 5.2
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js', array(), '5.2.0', true );
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', array(), '5.2.0', true );
    wp_enqueue_script( 'bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', array(), '5.2.0', true );

    //Library
    wp_enqueue_script( 'replace-svg', get_template_directory_uri() . '/assets/js/lib/replaceSVG.js', array(), '1.0', true );
    wp_enqueue_script( 'waves-effects', get_template_directory_uri() . '/assets/js/lib/wavesEffects.js', array(), '1.0', true );
    wp_enqueue_script( 'lordicon', get_template_directory_uri() . '/assets/js/lib/lordicon.js', array(), '1.0', true );
    wp_enqueue_script( 'marquee', get_template_directory_uri() . '/assets/js/lib/marquee.js', array(), '1.0', true );
    wp_enqueue_script( 'tween-max', get_template_directory_uri() . '/assets/js/lib/tweenMax.min.js', array(), '1.17.0', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/lib/parallax.js', array(), '1.0', true );
    wp_enqueue_script( 'lightimg', get_template_directory_uri() . '/assets/js/lib/cp-lightimg.min.js', array(), '1.0', true );
    wp_enqueue_script( 'navbar', get_template_directory_uri() . '/assets/js/lib/navBar.js', array(), '1.0', true );
    wp_enqueue_script( 'detailIcon', get_template_directory_uri() . '/assets/js/lib/detailIcon.js', array(), '1.0', true );
    wp_enqueue_script( 'favorite-post', get_template_directory_uri() . '/assets/js/lib/favoritePost.js', array(), '1.0', true );
    wp_enqueue_script( 'ajaxSearchIcon', get_template_directory_uri() . '/assets/js/lib/ajaxSearchIcon.js', array(), '1.0', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/lib/_app.js', array(), '1.0', true );

    //Init
    wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/init.js', array(), '1.0', true );

    //Localize Ajax
    wp_localize_script( 'app', 'wp', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
  }
  add_action('wp_enqueue_scripts', 'MUP_load_scripts');


  //Remover barra administrativa para todos os usuários
  function my_function_admin_bar(){
    return false;
  }
  add_filter( 'show_admin_bar' , 'my_function_admin_bar');

  
  /**
  *   After Setup Theme
  */
  /****** Menu Register ******/
  include('functions/menu-register.php');

  /****** Redirect After Login ******/
  include('functions/redirect-login.php');

  /****** SVG Support ******/
  include('functions/svg-support.php');

  /****** Avatar Support ******/
  include('functions/avatar-support.php');

  /****** Enable Post Thumbnails ******/
  include('functions/post-thumbnails.php');

  /****** Admin Top Bar ******/
  include('functions/admin-top-bar.php');



  /**
  *   Config Site
  */
  /****** Site title ******/
  include('functions/site-title.php');

  /****** Class Body ******/
  include('functions/class-body.php');

  /****** Favorite Post ******/
  include('functions/favorite-post.php');

  /****** Comments Config ******/
  include('functions/comments-config.php');
  
  /****** Post Meta ******/
  include('functions/post-meta.php');

  /****** Taxonomy Post ******/
  include('functions/taxonomy-post.php');

  /****** Taxonomy Media ******/
  include('functions/taxonomy-media.php');

  /****** Media Field ******/
  include('functions/media-field.php');

  /****** Status User ******/
  include('functions/status-user.php');


  /**
  *   Functions Site
  */
  /****** Ajax Post ******/
  include('ajax/favorite-post.php');
  include('ajax/post-list.php');


  /****** Search Post ******/
  include('functions/search-post.php');

  /****** Search Icons ******/
  include('functions/search-icon.php');

  /****** Pagination Custom ******/
  //include('functions/pagination-custom.php');


  /*function tax_na_busca($query) {
    if ( !$query->is_search ){
      return $query;
    }

    $term = get_term_by('name', $query->query['s'], 'tagicons');
    if ($term) {
      $id_termo = $term->term_id;
      $tax_query = array(
        array(
          'taxonomy' => 'tagicons',
          'field' => 'id',
          'terms' => $id_termo,
        )
      );
      $query->set( 'tax_query', $tax_query );
    }
  }
  add_action( 'pre_get_posts', 'tax_na_busca' );*/