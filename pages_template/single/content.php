<?php 
  //get_template_part( 'template_part/prev-next/prev-next-post' );
?>
<div class="description-page-icon"></div>
<section class="content-post">
  <div class="container">
    <div class="row">
      <div class="col">
        
        <?php
          the_content();
        ?>

        <div class=" wp-block-columns">
          <div class=" wp-block-column" style="flex-basis:100%">
            <h3>Compatibilidade</h3>
            <p class="content-files">
              <?php
                $files = get_the_tags();

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