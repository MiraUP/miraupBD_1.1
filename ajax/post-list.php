<?php
  function post_list() {
  global $post;
  global $wpdb;
  $user_id = get_current_user_ID();

  //GET Category
  if( $_GET['category'] == 'all' ) { $category = ''; }
  else { $category = $_GET['category']; }

  //GET Orderby & Order
  if( empty($_GET['orderby']) ) { $orderby = 'post_date'; }
  else { $orderby = $_GET['orderby']; }
  if( empty($_GET['order']) ) { $order = 'DESC'; }
  else { $order = $_GET['order']; }

  //GET Search
  $search = $_GET['s'];
  $id[] = '';

  //GET Filter
  if(empty($_GET['filter'])) { 
    $posts_per_page = '';
    $numberposts = '';
  } elseif ($_GET['filter'] == 'newPosts') {
    $posts_per_page = 9;
    $numberposts = -1;

  } elseif ($_GET['filter'] == 'favoritePost') {
    $posts_per_page = '';
    $numberposts = '';
    

    $resultFav = $wpdb->get_results("SELECT * FROM wp_favpost WHERE `user_id`=" . $user_id . " AND `_fav_post`='fav'");
    foreach ($resultFav as $row) { 
      $ids[] .= $row->_fav_id_post;
      //$ids .= $row->_fav_id_post;
    }
    //$selected_ids = explode( ',', $ids );
  }

  //GET Paged
  $argsPaged = [
    'posts_per_page'=> $posts_per_page,
    'numberposts'   => $numberposts,
    'post__in'      => $ids,
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'category_name' => $category,
    'orderby'       => $orderby,
    'order'         => $order,
    's'             => $search,
    //'posts_per_page' => '6',
  ];
  $postsPaged = new WP_Query($argsPaged);
  $totalPages = $postsPaged->max_num_pages;

  if( empty($_GET['paged']) ) { $paged = '1'; }
  elseif( $_GET['paged'] > $totalPages ) { $paged = $totalPages; }
  else { $paged = $_GET['paged']; }
  
  $args = [
    'posts_per_page'  => $posts_per_page,
    'numberposts'     => $numberposts,
    'post__in'        => $ids,
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'category_name'   => $category,
    'paged'           => $paged,
    'orderby'         => $orderby,
    'order'           => $order,
    's'               => $search,
    /*'posts_per_page' => '6',
    'tax_query'  => array(
      'taxonomy' => 'category',
      'field'    => 'slug',
      'terms'    => array( $category )
    ),*/
  ];

  $posts = new WP_Query($args);
?>

  <?php if ($posts->have_posts()) : ?>

    <div id="gallery-list" class="col-12 gallery-list">

      <?php while($posts->have_posts()) : $posts->the_post(); ?>

        <div class="gallery-item">
          <div class="download-group">
            <a href="<?php echo get_post_meta($post->ID, 'link_download', true); ?>" title="Download rápido" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" target="_blank" class="download-fast icon icon-download"></a>

            <button 
              class="button-heart favorite-post"
              id="favorite-post-<?php the_ID(); ?>" 
              title="Favorito" 
              data-bs-toggle="tooltip" 
              data-bs-placement="top" 
              data-bs-custom-class="custom-tooltip"
            >
              <input 
                type="checkbox" 
                id="button-heart-<?php the_ID(); ?>"
                name="favorite" 
                data-id="<?php the_ID(); ?>"
                <?php
                  $result = $wpdb->get_results("SELECT * FROM wp_favpost WHERE `user_id`=" . $user_id . " AND `_fav_id_post`=" . $post->ID . "");
                  
                  foreach ($result as $row) { 
                    if($row->_fav_post == 'fav') {
                      echo 'checked';
                    } elseif ($row->_fav_post == 'nofav') { }
                  }
                ?>
              >
              <label for="button-heart-<?php the_ID(); ?>"></label>
            </button>
          </div>       
          
          <ul class="files-type">
            <li><i class="icon icon-info"></i></li>
            <?php
              $posttags = get_the_tags();
              $i = 1;

              if ($posttags) {
                foreach($posttags as $tag) {
                  if ($i++ < 7) { 
                    echo '<li><i class="icon icon-' . $tag->slug . '"></i></li>'; 

                  } elseif ($i++ > 7) { 
                    echo '<li><i class="icon icon-' . $tag->slug . '"></i></li>'; 
                    echo '<li><i class="icon icon-plus-square" title="E mais" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip"></i></li>';
                    
                    if ($i++ > 7) { break; }
                  }
                }
              }
            ?>    
          </ul>

          <a href="<?php the_permalink(); ?>">
            <figure>
              <?php 
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail( array (400, 400));
                }; 
              ?>
            </figure>
            <div class="text">
              <p class="fw-bold title">
                <?php the_title(); ?>
              </p>

              <?php 
                $term_obj_list = get_the_terms( $post->ID, 'developer' );
                $developer = join(', ', wp_list_pluck($term_obj_list, 'name'));
              ?>
              
              <?php if ($developer) : ?>
                <p> Desenvolvido por <span class="fw-bold"><?php echo $developer; ?></span> </p>
              <?php else : ?>
                <p> Desenvolvedor não informado. </p>
              <?php endif ?>
            </div>
          </a>
        </div>
      <?php endwhile ?>

    </div>
    
    <?php if ( $totalPages > 1 ): ?>
      <nav class="btn-group pagination">
        <div class="col"></div>
        <div class="me-1 ms-1">
          <?php for($i=1; $i <= $totalPages; $i++) : ?>
            
            <?php if(!empty($_GET['paged']) AND $_GET['paged'] > 1 AND $i == 1) : ?>
              <button data-paged="<?php echo $_GET['paged'] - 1; ?>" class="btn btn-secondary paged">Anterior</button>
            <?php endif; ?>

            <button
              data-paged="<?php echo $i; ?>"
              class="btn btn-secondary paged
                <?php 
                  if(!empty($_GET['paged']) AND $i == 0) { echo ' active';}
                  elseif ($_GET['paged'] == $i) { echo ' active'; }
                ?>
              ">
              <?php echo $i; ?>
            </button>

            <?php if($_GET['paged'] < $totalPages AND $i == $totalPages AND $totalPages > 1) : ?>
              <button
                data-paged="<?php
                  if (!empty($_GET['paged'])) { echo $_GET['paged'] + 1; }
                  else { echo 2; }
                ?>"
                class="btn btn-secondary paged">Próxima</button>
            <?php endif; ?>
          <?php endfor; ?>
        </div>
        <div class="col"></div>
      </nav>
    <?php endif; ?>
    <div class="pagination d-none" data-max-num-paged='<?php echo $totalPages; ?>'></div>

  <?php else : ?>
    <p class="w-100 btn btn-sm btn-secondary text-white waves-effect waves-light">
      Nenhum conteudo cadastrado.
    </p>
  <?php endif ?>

<?php
    exit;
  }
  add_action('wp_ajax_post_list', 'post_list');
  add_action('wp_ajax_nopriv_post_list', 'post_list');