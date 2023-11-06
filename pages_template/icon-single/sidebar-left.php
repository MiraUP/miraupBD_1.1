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
          $group_terms_caticons = get_terms('groupicons', array('hide_empty' => false));
          foreach($group_terms_caticons as $term) {
          
            $termID  = $term->term_id;
            $term->name;
            $postsCat = get_posts( array(
              'post_type' => 'attachment',
              'posts_per_page' => 99999999,
              'tax_query' => array( array(
                'taxonomy' => 'groupicons',
                'field' => 'term_id',
                'terms' => $termID
              ) )
            ) );

            if($term->name == $post->post_name) {

            foreach ($postsCat as $postCat) {
              $caticons = wp_get_post_terms( $postCat->ID, 'caticons', array( 'fields' => 'all' ) );
              foreach($caticons as $term) {
                $category[] = $term->name;
              }
            }

            foreach (array_unique($category) as $verName) { 
        ?>

          <input type="radio" class="btn-check" name="btn-category" data-url='<?php echo get_site_url();?>' id="btn-category-<?php echo $verName; ?>" value="<?php echo $verName; ?>" autocomplete="off">
          <label class="btn btn-outline-primary text-white waves-effect waves-light" for="btn-category-<?php echo $verName; ?>">
            <div class="row gx-0">
              <div class="col text-start">
                <?php echo $verName; ?>
              </div>
            </div>
          </label>

        <?php }
            }
          }
        ?>

      </div>
    </div>
  </div>
</div>