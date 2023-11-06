<?php
  function favorite_post() {
    echo 'Favorite';
    exit;
  }
  add_action('wp_ajax_favorite_post', 'favorite_post');
  add_action('wp_ajax_nopriv_favorite_post', 'favorite_post');