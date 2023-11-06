<section class="content-post">

  <div class="row content-icons">
    <?php
    
      global $post;
      $slug = $post->post_name;
    
      get_template_part( 'pages_template/icon-single/sidebar-left' ); 
      
      get_template_part( 'pages_template/icon-single/content-items-icon' ); 
      
      get_template_part( 'pages_template/icon-single/sidebar-right' ); 
      
    ?>
  </div>

  <div class="container description-page-icon">
    <div class="row">
      <div class="col">
        

        <?php
          //get_template_part( 'template_part/prev-next/prev-next-post' );
          the_content();
        ?>

        <div class=" wp-block-columns">
          <div class=" wp-block-column" style="flex-basis:100%">
            <h3>Compatibilidade</h3>
            <p class="content-files">
              <?php
                $files = get_the_tags($post->ID);
                if ($files) {
                  foreach($files as $tag) {
                    echo '<i class="icon icon-' . $tag->slug . '"></i>'; 
                  }
                }
              ?>
            </p>
          </div>
        </div>
        <a href="" class="btn btn-secondary btn-lg w-100 contribution">
          <lord-icon 
            src="https://cdn.lordicon.com/vlqpagvk.json" 
            trigger="loop"
            delay="2000" 
            stroke="100" 
            colors="primary:#dfe0e4,secondary:#dfe0e4" 
            style="width:40px;height:40px;">
          </lord-icon>
          Contribua com esse material
        </a>
      </div>
    </div>
  </div>
</section>