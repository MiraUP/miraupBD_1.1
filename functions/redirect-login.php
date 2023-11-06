<?php
  /****** Redirect After Login ******/
  function MUP_redirect_after_login() {
    function MUP_custom_redirect_level_user( $redirect_to, $requested_redirect_to, $user) {
      if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        if ( in_array( 'subscriber', $user->roles ) ) {
          $redirect_to = home_url('/');
        }
        if ( in_array( 'author', $user->roles ) ) {
          $redirect_to = home_url('/');
        }
        if ( in_array( 'contributor', $user->roles ) ) {
          $redirect_to = home_url('/');
        }
        if ( in_array( 'administrator', $user->roles ) ) {
          $redirect_to = home_url('/');
        }
      }
      return  $redirect_to;
    }
    add_filter('login_redirect', 'MUP_custom_redirect_level_user', 10,3);
  }
  add_action( 'after_setup_theme', 'MUP_redirect_after_login', 0 );


  function MUP_auto_redirect_after_logout(){
    wp_safe_redirect( home_url() );
    exit;
  }
  add_action('wp_logout','MUP_auto_redirect_after_logout');