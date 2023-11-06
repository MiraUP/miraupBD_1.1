
<div class="col content-items-icon">
  
  <?php 
    global $post;
    $slug = $post->post_name;
    $URL_site = get_site_url();
  ?>
  
  <div class="header row gx-0">
    <h3 class="h5 col title-icons fw-semibold category-name">
      Todas as categorias
    </h3>

    <div class="btn-group btn-group-transparent col-auto" role="group">

      <?php 
      /** Versões */
      $versions = get_query_var( 'versions' );
      //Verifica se há categorias
      if (count($versions, COUNT_RECURSIVE) > 1) {

        $x = 1;
        error_reporting(0);
        //Remove duplicidade das categorias dos ícones
        foreach (array_unique($versions) as $verName) {

          if($x > 1) {
      ?>

              <input type="radio" class="btn-check" name="btn-ver" data-url='<?php echo get_site_url();?>' id="<?php echo $verName; ?>-1" autocomplete="off" value="<?php echo $verName; ?>" <?php if($x === 2) { echo 'checked';} ?>>
              <label class="btn btn-outline-primary text-white waves-effect waves-light" for="<?php echo $verName; ?>-1">
                <?php echo $verName; ?>
              </label>

      <?php }
              $x++;
            }
          }
      ?>
    </div>
  </div>

  <div class="list-icons row">
    <div class="col text-center">

    <?php
        $group_terms = get_terms('groupicons', array('hide_empty' => false));
        foreach($group_terms as $term) {
        
          $termID  = $term->term_id;
          $term->name;
          $postsicons = get_posts( array(
            'post_type' => 'attachment',
            'posts_per_page' => 99999999,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => array( array(
              'taxonomy' => 'groupicons',
              'field' => 'term_id',
              'terms' => $termID
            ) )
          ) );

          foreach ($postsicons as $postsicon) {
            $downloadSVG  = get_post_meta( $postsicon->ID, 'svg_media_file', true );
            $downloadAi   = get_post_meta( $postsicon->ID, 'ai_media_file', true );
            $downloadEPS  = get_post_meta( $postsicon->ID, 'eps_media_file', true );
            $downloadJSON = get_post_meta( $postsicon->ID, 'json_media_file', true );
            $downloadPNG  = get_post_meta( $postsicon->ID, 'png_media_file', true );
            $downloadJPG  = get_post_meta( $postsicon->ID, 'jpg_media_file', true );
            $downloadGIF  = get_post_meta( $postsicon->ID, 'gif_media_file', true );
            $downloadMP4  = get_post_meta( $postsicon->ID, 'mp4_media_file', true );
            $downloadAE   = get_post_meta( $postsicon->ID, 'ae_media_file', true );
            $downloadFONT = get_post_meta( $postsicon->ID, 'fontweb_media_file', true );
              
            $groupicons = wp_get_post_terms( $postsicon->ID, 'groupicons', array( 'fields' => 'all' ) );
            
            foreach($groupicons as $term) {
              if ($term->name == $slug) {
                echo '<label class="icon btn-action-icon"
                  data-url="'.$URL_site.'"
                  data-id="'.$postsicon->ID.'"
                  data-icon="'.$postsicon->post_title.'"
                  data-tag="'.$postsicon->post_content.'"
                  data-img="'.$postsicon->guid.'"
                  data-name="'.$postsicon->post_title.'"
                  data-svg="'.$downloadSVG.'"
                  data-ai="'.$downloadAi.'"
                  data-eps="'.$downloadEPS.'"
                  data-json="'.$downloadJSON.'"
                  data-png="'.$downloadPNG.'"
                  data-jpg="'.$downloadJPG.'"
                  data-gif="'.$downloadGIF.'"
                  data-mp4="'.$downloadMP4.'"
                  data-ae="'.$downloadAE.'"
                  data-font="'.$downloadFONT.'">
                <input type="radio" class="visually-hidden" name="active-icon" value="'.$postsicon->post_title.'">
                <img src="'.$postsicon->guid.'" class="" width="50" height="50" /><small class="text-white fst-italic">'.$postsicon->post_title.'</small> </label>';
              }
            }
          }
        }
      ?>

    </div>
  </div>
</div>

<div class="toast-container position-fixed bottom-0 start-0 p-3">
  <div id="liveToastCopy" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Aviso de cópia</strong>
      <button type="button" data-bs-dismiss="toast" aria-label="Close">
        <i class="icon icon-close"></i>
      </button>
    </div>
    <div class="toast-body">
      Mensagem de ícone copiado.
    </div>
  </div>
</div>