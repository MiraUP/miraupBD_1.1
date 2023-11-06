<?php
  $prev_post = get_previous_post();
  if ( is_a( $prev_post , 'WP_Post' ) ) :
    echo '<a class="btn-post-prev btn btn-outline-primary btn-sm" href="' . get_permalink( $prev_post->ID ) . '"><i class="icon icon-arrow-left-simple"></i><span>' . $prev_post->post_title . '</span></a>';
  endif;

  $next_post = get_next_post();
  if ( is_a( $next_post , 'WP_Post' ) ) :
    echo '<a class="btn-post-next btn btn-outline-primary btn-sm" href="'. get_permalink( $next_post->ID ) .'"><span>' . $next_post->post_title . '</span><i class="icon icon-arrow-right-simple"></i></a>';
  endif;
