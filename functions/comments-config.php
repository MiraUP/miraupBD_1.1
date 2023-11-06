<?php
  /****** Comments ******/
  // Remove comment date
  function MUP_remove_comment_date($date, $d, $comment) {
    if ( !is_admin() ) { return; }
    else { return $date; }
  }
  add_filter( 'get_comment_date', 'MUP_remove_comment_date', 10, 3);
  
  // Remove comment time
  function MUP_remove_comment_time($date, $d, $comment) {
    if ( !is_admin() ) { return; }
    else { return $date; }
  }
  add_filter( 'get_comment_time', 'MUP_remove_comment_time', 10, 3);