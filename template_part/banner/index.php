<section class="container banner-infinity">
  <div class="row">
    <div class="col">

        <h2 class="h1 fw-semibold text-center announcement">
          <?php echo wp_count_posts()->publish;?> itens <br>
          cadastrados
          <span class="fw-light">Em breve você também poderá contribuir.</span>
        </h2>
        
        <div class="marquee">

        <?php 
          $args = array(
            'post_type' => 'post',
            'post_per_page' => 30,
            'orderby' => 'rand',
          );

          $postlist = new WP_Query( $args );

          if ( $postlist->have_posts() ) {
            while( $postlist->have_posts() ) : $postlist->the_post();
        ?>

        <div class="marquee-item">
          <div class="item" style="background-image:url('<?php 
              if ( has_post_thumbnail() ) {
                echo get_the_post_thumbnail_url();
              }; 
            ?>');">
          </div>

        <?php
          $prevPost = get_previous_post();

          if($prevPost) {
            $arg = array(
              'posts_per_page' => 1,
              'include' => $prevPost->ID
            );
            $prevPost = get_posts($arg);
            
            foreach ($prevPost as $post) {
              setup_postdata($post);
        ?>      

          <div class="item" style="background-image:url('<?php 
              if ( has_post_thumbnail() ) {
                echo get_the_post_thumbnail_url();
              }; 
            ?>');">
          </div>

        <?php
              wp_reset_postdata();
            } 
          } else {}
        ?>


        </div>

        <?php 
          endwhile;
            wp_reset_postdata();
          }
        ?>
        
    </div>
  </div>
</section>