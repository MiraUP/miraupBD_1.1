<?php
  /****** Search Icons ******/
  function search_icon() {
    $query = $_POST['query'];
    $showposts = '9999999';
    $slug = $_POST['slug'];
    $category = $_POST['category'];
    $version = $_POST['version'];
    $url = get_site_url();

    $group_terms = get_terms('groupicons', array('hide_empty' => false));
    foreach($group_terms as $term) {
      
      $termID  = $term->term_id;
      $term->name;
      $posts = get_posts( array(
        'post_type' => 'attachment',
        'posts_per_page' => $showposts,
        'orderby' => 'title',
        'order' => 'ASC',
        's' => $query,
        'tax_query' => array( array(
          'taxonomy' => 'groupicons',
          'field' => 'term_id',
          'terms' => $termID
        ) )
      ) );

      foreach ($posts as $post) {
        $downloadSVG  = get_post_meta( $post->ID, 'svg_media_file', true );
        $downloadAi   = get_post_meta( $post->ID, 'ai_media_file', true );
        $downloadEPS  = get_post_meta( $post->ID, 'eps_media_file', true );
        $downloadJSON = get_post_meta( $post->ID, 'json_media_file', true );
        $downloadPNG  = get_post_meta( $post->ID, 'png_media_file', true );
        $downloadJPG  = get_post_meta( $post->ID, 'jpg_media_file', true );
        $downloadGIF  = get_post_meta( $post->ID, 'gif_media_file', true );
        $downloadMP4  = get_post_meta( $post->ID, 'mp4_media_file', true );
        $downloadAE   = get_post_meta( $post->ID, 'ae_media_file', true );
        $downloadFONT = get_post_meta( $post->ID, 'fontweb_media_file', true );
        $groupicons = wp_get_post_terms( $post->ID, 'groupicons', array( 'fields' => 'all' ) );
        $categoryicons = wp_get_post_terms( $post->ID, 'caticons', array( 'fields' => 'all' ) );
        $versionicons = wp_get_post_terms( $post->ID, 'vericons', array( 'fields' => 'all' ) );

        $icon = '<label class="icon IconCopy btn-action-icon"
        data-id="'.$post->ID.'"
        data-tag="'.$postsicon->post_content.'"
        data-icon="'.$post->post_title.'"
        data-img="'.$post->guid.'"
        data-name="'.$post->post_title.'"
        data-svg="'.$downloadSVG.'"
        data-ai="'.$downloadAi.'"
        data-eps="'.$downloadEPS.'"
        data-json="'.$downloadJSON.'"
        data-png="'.$downloadPNG.'"
        data-jpg="'.$downloadJPG.'"
        data-gif="'.$downloadGIF.'"
        data-mp4="'.$downloadMP4.'"
        data-ae="'.$downloadAE.'"
        data-font="'.$downloadFONT.'"
        ><img src="'.$post->guid.'" class="" width="50" height="50" /><small class="text-white fst-italic">'.$post->post_title.'</small> </label> <script> btnActionIcon(); </script>';

        if ($category == 'all') {
          foreach($groupicons as $term) {
            if ($term->name == $slug) {
              foreach($versionicons as $termVersion) {
                if ($termVersion->name == $version) {
                  echo $icon;
                }
              }
            }
          }
        }
        else {
          foreach($categoryicons as $termcategory) {
            if ($termcategory->name == $category) {
              foreach($versionicons as $termVersion) {
                if ($termVersion->name == $version) {
                  echo $icon;
                }
              }
            }
          }
        }
      }
    }
  }
  add_action( 'wp_ajax_search_icon', 'search_icon' );
  add_action( 'wp_ajax_nopriv_search_icon', 'search_icon' );