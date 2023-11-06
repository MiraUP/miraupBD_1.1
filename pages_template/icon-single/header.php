<section class="container">

  <div class="parallax">
    <div class="parallax-inner graphic graphic-01"></div>
    <div class="parallax-inner graphic graphic-02"></div>
    <div class="parallax-inner graphic graphic-03"></div>
  </div>

  <div class="row header">
    <div class="col">
      <div class="title text-center">
        <h1 class="h1"><?php the_title(); ?></h1>
        <p><?php echo get_the_excerpt(); ?></p>
      </div>
    </div>
  </div>

  <div class="row justify-content-md-center">
    <div class="col col-md-8">
      <i class="hr-rectangle hr-blue"></i>
    </div>
  <div>

  <div class="row post-data">

    <div class="col-lg-auto col-sm-6 data">
      
      <?php
        $category = get_the_category($post->ID);
        if ($category) {
      ?>
        <p class="category">Categoria <span class="fw-bold">
          <?php
              foreach($category as $cat) {
                echo  $cat->description; 
              }
          ?>
        </span></p>
      <?php
        }
      ?>

      <?php
        $term_developer = get_the_terms( $post->ID, 'developer' );
        $terms_developer = join(', ', wp_list_pluck($term_developer, 'name'));
        $terms_developer_link = join(', ', wp_list_pluck($term_developer, 'description'));
        if ($terms_developer) {
          echo '<p class="d-sm-block d-none">Desenvolvedor <a href="' . $terms_developer_link . '" class="link"><span class="fw-bold">' . $terms_developer . '</span></a></p>';
        }
      ?>
      

      <?php
        $term_origin = get_the_terms( $post->ID, 'origin' );
        $terms_origin = join(', ', wp_list_pluck($term_origin, 'name'));
        $terms_origin_link = join(', ', wp_list_pluck($term_origin, 'description'));
        if ($terms_origin) {
          echo '<p class="d-sm-block d-none">Origem <a href="' . $terms_origin_link . '" class="link"><span class="fw-bold">' . $terms_origin . '</span></a></p>';
        }
      ?>

      
      <p class="d-sm-block d-none">Atualizado <span class="fw-bold">
        <?php
          the_modified_time('d/m/Y'); 
          $term_version = get_the_terms( $post->ID, 'version', ' | Versão ' );
          $terms_version = join(', ', wp_list_pluck($term_version, 'name'));
          if ($terms_version) {
            echo ' | Versão ' . $terms_version;
          }
        ?>
      </span></p>
      
    </div>

    
    <div class="col col-sm-6 col-md text-center files">
      
      <?php 
        $totalIcons = get_query_var( 'totalIcons' );
        echo '<p class="h5">Total de <span class="fw-bold h4">' . $totalIcons . '</span> ícones cadastrados.<p>'; 
      ?>

    </div>

    <div class="col-lg-auto col-sm-12 d-flex align-items-center justify-content-md-end actions">
      <div class="btn-group" role="group">
        <a href="<?php 
          $link_download = get_post_meta( get_the_ID(), 'link_download', true );
          if ( !empty( $link_download ) ) {
            echo $link_download; 
          }
        ?>" class="btn btn-primary waves-effect waves-light" target="_blank" title="Baixar o Pacote" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip">
          <i class="icon icon-download"></i>
        </a>

        <button type="button" class="btn btn-secondary button-heart favorite-post waves-effect waves-light" id="favorite-post-<?php the_ID(); ?>" title="Favoritar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip">
          <input type="checkbox" id="button-heart-<?php the_ID(); ?>" name="favorite" data-id="<?php the_ID(); ?>"
            <?php
              global $wpdb;
              $result = $wpdb->get_results("SELECT * FROM wp_favpost WHERE `user_id`=" . get_current_user_id() . " AND `_fav_id_post`=" . $post->ID . "");

              foreach ($result as $row) { 
                if($row->_fav_post == 'fav') {
                  echo 'checked';
                } elseif ($row->_fav_post == 'nofav') { }
              }
            ?>
          >
          <label for="button-heart-<?php the_ID(); ?>"></label>
        </button>

        <?php 
          if ( comments_open() || get_comments_number() ) {
        ?>
          <button type="button" class="btn btn-success waves-effect waves-light" data-bs-custom-class="custom-tooltip" data-bs-toggle="offcanvas" data-bs-target="#offcanvasComments" aria-controls="offcanvasComments" title="Comentários">
            <i class="icon icon-comment"></i>
          </button>
        <?php  
          }
        ?>
      </div>

    </div>
  </div>
</section>

<?php 
  if ( comments_open() || get_comments_number() ) {
    get_template_part( 'pages_template/single/offcanvas-comments' );
  }
?>