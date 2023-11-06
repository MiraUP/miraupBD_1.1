<?php
  /****** Status User ******/
  function miraupbd_update_online_users_status(){
    if(is_user_logged_in()){
      if(($logged_in_users = get_transient('users_online')) === false) $logged_in_users = array();

      $current_user = wp_get_current_user();
      $current_user = $current_user->ID;  
      $current_time = current_time('timestamp');

      if(!isset($logged_in_users[$current_user]) || ($logged_in_users[$current_user] < ($current_time - (15 * 60)))){
        $logged_in_users[$current_user] = $current_time;
        set_transient('users_online', $logged_in_users, 30 * 60);
      }

    }
  }
  add_action('init', 'miraupbd_update_online_users_status');
