<div class="col sidebar-left">

  <div class="menu-sidebar-left">
    <button class="icon icon-search btn-menu-sidebar text-white"></button>

    <form role="search" method="get" action="" id="search-container" class="search-forms sidebar-content-menu">
      <div class="row input-text gx-0">
        <div class="col me-auto">
          <span class="form-floating">
            <input type="hidden" name='slug' value='<?php echo get_post_field( 'post_name', get_post() ); ?>'>
            <input type="search" name="searchIcon" data-url='<?php echo get_site_url();?>' class="form-control" id="search-icons" placeholder="<?php echo esc_attr_x( 'Pesquisar ícone', 'placeholder', 'miraupbd' ); ?>">
            <label for="search-icons"><?php echo _x( 'Pesquisar ícone', 'label', 'miraupbd' ); ?></label>
          </span>
        </div>
        <div class="col-auto">
          <button class="button-search" disabled>
            <lord-icon
                class="lord-icon"
                src="https://cdn.lordicon.com/msoeawqm.json"
                trigger="hover"
                colors="primary:#dfe0e4,secondary:#ffffff"
                stroke="100"
                style="width:55px;height:55px">
            </lord-icon>
          </button>
        </div>
      </div>
    </form>
  </div>

  <div class="menu-sidebar-left">
    <button class="icon icon-grid btn-menu-sidebar text-white"></button>

    <div class="sidebar-content sidebar-content-menu">
      <h3 class="h5 title-icons fw-semibold">
        <i class="icon icon-grid"></i> Categorias
      </h3>

      <div class="btn-group btn-group-vertical btn-group-transparent w-100 btn-group-category" role="group">

        <input type="radio" class="btn-check" name="btn-category" data-url='<?php echo get_site_url();?>' id="btn-category-all" autocomplete="off" value="all" checked>
        <label class="btn btn-outline-primary text-white waves-effect waves-light" for="btn-category-all">
          <div class="row gx-0">
            <div class="col text-start">
              Todas as categorias
            </div>
          </div>
        </label>

        <?php 
          /**  Inclusão do SIDEBAR-LEFT -> Categorias */
          $category = get_query_var( 'category' );
          //Verifica se há categorias
          if (count($category, COUNT_RECURSIVE) > 1) {
            //Remove duplicidade das categorias dos ícones
            foreach (array_unique($category) as $category_icons) { 
        ?>

          <input type="radio" class="btn-check" name="btn-category" data-url='<?php echo get_site_url();?>' id="btn-category-<?php echo $category_icons; ?>" value="<?php echo $category_icons; ?>" autocomplete="off">
          <label class="btn btn-outline-primary text-white waves-effect waves-light" for="btn-category-<?php echo $category_icons; ?>">
            <div class="row gx-0">
              <div class="col text-start">
                <?php echo $category_icons; ?>
              </div>
            </div>
          </label>

        <?php
            }
          }
        ?>

      </div>
    </div>
  </div>
</div>