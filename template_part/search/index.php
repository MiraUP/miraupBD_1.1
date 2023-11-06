<section class="container search-main">
  <div class="row">
    <div class="col">
      <div class="search-main-box">
        
        <?php 
          get_template_part( 'template_part/search/filter-search' ); 
          get_search_form();
        ?>
     
      </div>
    </div>
  </div>  
</section>

<?php get_template_part( 'template_part/search/offcanvas-search' ); ?>