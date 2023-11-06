<div class="row header">
  <div class="col-auto me-auto logo">
    <?php 
      if ( has_custom_logo() ) {
        the_custom_logo();
      } else {
    ?>

      <a href="<?php echo home_url( '/' ); ?>" class="">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-010202.svg"
          alt="<?php bloginfo( 'name' ); ?>"
          class="logo-extend-white svg-inline" />
        
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-020202.svg"
          alt="<?php bloginfo( 'name' ); ?>"
          class="logo-ass-white svg-inline" />
      </a>

    <?php  }  ?>
    
    <a href="/" class="d-sm-block d-none btn-backHome">
      <lord-icon
        src="https://cdn.lordicon.com/gmzxduhd.json"
        trigger="hover"
        stroke="100"
        colors="primary:#dfe0e4,secondary:#dfe0e4"
        style="width:35px;height:35px;margin-top:5px;">
      </lord-icon>
    </a>
    
    <button class="menu-burger d-sm-block d-none" data-bs-toggle="modal" data-bs-target="#main-menu">
    </button>
  </div>

  <div class="col-auto">
    <div class="row side-nav">
      <div class="col d-sm-block d-none">
        <a class="button-heart">
          <label></label>
        </a>
      </div>

      <div class="col d-sm-block d-none">
        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" class="button-notification position-relative notification-new">
          <!-- <i class="icon-bell"></i> -->
          <lord-icon
            src="https://cdn.lordicon.com/gelfkkek.json"
            trigger="hover"
            stroke="100"
            colors="primary:#dfe0e4,secondary:#ffffff"
            state="hover-1"
            style="width:48px;height:48px">
          </lord-icon>
        </button>
      </div>

      <div class="col">
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasProfile" aria-controls="offcanvasProfile" class="avatar smille-fill-white01 d-sm-block d-none"></a>
        
        <button class="menu-burger d-block d-sm-none" data-bs-toggle="modal" data-bs-target="#main-menu"></button>
      </div>
    </div>
  </div>
</div>