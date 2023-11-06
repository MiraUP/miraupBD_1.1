<?php
  /****** Menu Register ******/ 
  function MUP_menu_register() {
    register_nav_menus(
      array(
        'miraupbd_menu_nav' => 'Main Menu Navigation',
        'miraupbd_menu_cat' => 'Main Menu Category',
        'miraupbd_menu_db' => 'Main Menu Database',      
      )
    );
  }
  add_action( 'after_setup_theme', 'MUP_menu_register', 0 );