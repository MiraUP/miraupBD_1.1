<?php if( is_active_sidebar( 'sidebar-offcanvas' ) ) { ?>

  <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title h4 fw-semibold" id="offcanvasSidebarLabel">Widget Sidebar</h2>
      <button type="button" class="button-close icon-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <?php dynamic_sidebar( 'sidebar-offcanvas' ); ?>
    </div>
  </div>

<?php } else {  } ?>