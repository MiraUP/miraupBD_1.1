<section class="bar-top-iten-actions">
  <div class="container">
    <div class="row">
      <div class="col-auto me-auto">
        <h2 class="h5 fw-bold"><?php the_title(); ?></h2>
      </div>

      <div class="col-auto">

        <a href="<?php 
          $link_download = get_post_meta( get_the_ID(), 'link_download', true );
          if ( !empty( $link_download ) ) {
            echo $link_download; 
          }
        ?>" target="_blank" class="btn btn-primary btn-sm">
          <i class="icon icon-download"></i> Download
        </a>

        <?php 
          if ( comments_open() || get_comments_number() ) {
        ?>
          <button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasComments" aria-controls="offcanvasComments" >
            <i class="icon icon-comment"></i> Comentários
          </button>
        <?php  
          }
        ?>
      </div>
    </div>
  </div>
</section>