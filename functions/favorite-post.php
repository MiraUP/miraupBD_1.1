<?php
  /****** Favorite Button ******/
  //Favorite Table Create
  function scratchcode_create_favpost_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . "favpost";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
      id bigint(20) NOT NULL AUTO_INCREMENT,
      user_id bigint(20) UNSIGNED NOT NULL,
      _fav_id_post varchar(255) NOT NULL,
      _fav_post varchar(255) NOT NULL,
      PRIMARY KEY id (id)
    ) $charset_collate;";
 
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }    
  add_action('init', 'scratchcode_create_favpost_table');

  //Favorite Update
  function favpost() {
    if(empty($_POST) || !isset($_POST)) {
      ajaxStatus('error', 'Nothing to update.');
    } else {
      try {
        $user = wp_get_current_user();
        $idPost = $_POST['idPost'];
        $favPost = $_POST['favPost'];

        global $wpdb;
        $wpdb->get_results("SELECT * FROM `wp_favpost` WHERE `user_id`='" . $user->ID . "' AND `_fav_id_post`='" . $idPost . "'");

        if ($wpdb->num_rows < 1) {
          $sql = "INSERT INTO `wp_favpost` (`id`, `user_id`, `_fav_id_post`, `_fav_post`) VALUES (NULL, '$user->ID', '$idPost', '$favPost');";

        } else {
          $sql = "UPDATE `wp_favpost` SET _fav_post='$favPost' WHERE `user_id`='" . $user->ID . "' AND `_fav_id_post`='" . $idPost . "'";
        }
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        die();

      } catch (Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
      }
    }
  }
  add_action( 'wp_ajax_favpost', 'favpost');



  /****** Favorite Button ******/
  //Favorite Table Create
  function MUP_scratchcode_create_favpost_table() {
    global $wpdb;
 
    $table_name = $wpdb->prefix . "favpost";
 
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
      id bigint(20) NOT NULL AUTO_INCREMENT,
      user_id bigint(20) UNSIGNED NOT NULL,
      _fav_id_post varchar(255) NOT NULL,
      _fav_post varchar(255) NOT NULL,
      PRIMARY KEY id (id)
    ) $charset_collate;";
 
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }    
  add_action('init', 'MUP_scratchcode_create_favpost_table');

  //Favorite Update
  function MUP_favpost() {
    if(empty($_POST) || !isset($_POST)) {
      ajaxStatus('error', 'Nothing to update.');
    } 
    else {
      try {
        $user = wp_get_current_user();
        $idPost = $_POST['idPost'];
        $favPost = $_POST['favPost'];

        global $wpdb;
        $wpdb->get_results("SELECT * FROM `wp_favpost` WHERE `user_id`='" . $user->ID . "' AND `_fav_id_post`='" . $idPost . "'");

        if ($wpdb->num_rows < 1) {
          $sql = "INSERT INTO `wp_favpost` (`id`, `user_id`, `_fav_id_post`, `_fav_post`) VALUES (NULL, '$user->ID', '$idPost', '$favPost');";
        } 
        else {
          $sql = "UPDATE `wp_favpost` SET _fav_post='$favPost' WHERE `user_id`='" . $user->ID . "' AND `_fav_id_post`='" . $idPost . "'";
        }
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        die();

      } catch (Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
      }
    }
  }
  add_action( 'wp_ajax_MUP_favpost', 'MUP_favpost');