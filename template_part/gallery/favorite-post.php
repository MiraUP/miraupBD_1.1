<?php
 /**
  * When the user decides to not have this show again save user meta to make it so.
  *
  * @param array $data Sanitized data to use for saving.
  *
  * @returns bool Always returns true
  */

  function favpost($data) {
    $user_id = get_current_user_ID();
    update_user_meta($user_id, '_fav_id_post', $_POST['idPost']);
    update_user_meta($user_id, '_fav_post', $_POST['favPost']);
    //do_action('_fav_post', $user_id);
    return true;
  }