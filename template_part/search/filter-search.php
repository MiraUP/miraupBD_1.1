<nav class="search-main-filter btn-group category-post" role="group" aria-label="Filtro de pesquisa">

  <input type="radio" class="btn-check btn-category-all" id="allCategory" name="filterSearch" autocomplete="off" value="all" checked>
  <label class="btn allCategory btn-category" for="allCategory" data-category-name="all"><span>Categorias: </span> Todas</label>

    <?php 
      $categories = get_categories( array(
          'orderby' => 'id',
          'order'   => 'ASC',
      ) );
      
      foreach( $categories as $category ) {

      $slug = $category->slug;

      if ($slug == 'ilustracao' || $slug == 'icone' || $slug == 'codigo' || $slug == 'ui-kit' || $slug == 'social-media' || $slug == 'mockup' ) {    
    ?>
    
      <input type="radio" class="btn-check btn-category-<?php echo sprintf( $category->slug ); ?>" name="filterSearch" id="btn-category-<?php echo sprintf( $category->slug ); ?>-filter" autocomplete="off">
      <label class="btn btn-category" for="btn-category-<?php echo sprintf( $category->slug ); ?>-filter" data-category-name="<?php echo $category->slug; ?>"><?php echo sprintf( $category->description ); ?></label>

    <?php  
      } }
    ?>

  <input type="radio" class="btn-check more" id="more" name="filterSearch" autocomplete="off">
  <label class="btn more" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch" for="more">
    <i class="icon-more-v"></i>
  </label>

</nav>