<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasSearch" aria-labelledby="offcanvasSearchLabel">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title h4 fw-semibold" id="offcanvasSearchLabel">Filtro de Pesquisa</h2>
    <button type="button" class="button-close icon-close close-offcanvas-search" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">

    <?php //get_search_form(); ?>

    <section class="category-options">
      <h3 class="h5 offcanvas-title-icons fw-semibold">
        <i class="icon icon-grid"></i> Categorias
      </h3>

      <div class="btn-group btn-group-vertical btn-group-transparent w-100 btn-group-category category-post" role="group">
        <input type="radio" class="btn-check btn-category-all" id="btn-category-all" name="btn-category" autocomplete="off" value="all" checked>
        <label class="btn btn-outline-primary text-white waves-effect waves-light btn-category" for="btn-category-all" data-category-name="all">
          <div class="row gx-0">
            <div class="col text-start">
              Todas
            </div>
            <div class="col-auto">
            (<?php echo wp_count_posts()->publish;?>)
            </div>
          </div>
        </label>
        
        <?php 
          $categories = get_terms( 'category' );

          if (!empty($categories)) {
          
            foreach( $categories as $category ) {
            $slug = $category->slug;

              if ($slug != 'sem-categoria') {
        ?>

        <input type="radio" class="btn-check btn-category-<?php echo $category->slug; ?>" id="btn-category-<?php echo $category->slug; ?>" name="btn-category" autocomplete="off" value="<?php echo $category->slug; ?>">
        <label class="btn btn-outline-primary text-white waves-effect waves-light btn-category" for="btn-category-<?php echo $category->slug; ?>" data-category-name="<?php echo $category->slug; ?>">
          <div class="row gx-0">
            <div class="col text-start">
              <?php echo $category->description; ?>
            </div>
            <div class="col-auto">
            (<?php echo $category->count; ?>)
            </div>
          </div>
        </label>

        <?php } } } ?>
      </div>
    </section>
  </div>

  <div class="offcanvas-footer">
    <button type="button" class="w-100 btn btn-secondary waves-effect waves-light"><i class="icon icon-eraser"></i> Limpar configurações</button>
  </div>
</div>