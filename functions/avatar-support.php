<?php
  /****** Avatar Support ******/
  function MUP_avatar_support() {
    function new_gravatar ( $avatar_defaults ) {
      $myavatar = get_template_directory_uri() . '/assets/img/gravatar.svg'; 
      $avatar_defaults [$myavatar] = "Smille MiraUP"; return $avatar_defaults; }
    add_filter ( 'avatar_defaults', 'new_gravatar');
  }
  add_action( 'after_setup_theme', 'MUP_avatar_support', 0 );
