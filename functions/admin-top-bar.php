<?php
  /****** Admin Top Bar ******/
  function MUP_admin_top_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
  }
  add_action( 'after_setup_theme', 'MUP_admin_top_bar', 0 );
