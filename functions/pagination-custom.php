<?php
  /****** Pagination Custom ******/
	function miraupbd_pagination($pages = '', $range = 2) {
		$showitems = ($range * 2)+1; 
		global $paged; 
		if(empty($paged)) $paged = 1; 
		
    if($pages == '') { 
			global $wp_query; 
			$pages = $wp_query->max_num_pages; 
			
      if(!$pages) { 
				$pages = 1; 
			} 
		} 

		if(1 != $pages) { 
			echo '<nav class="btn-group pagination">'; 
			
      if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<a class="btn btn-secondary"  href="'.get_pagenum_link(1).'">Primera</a>';
			
      if($paged > 1 && $showitems < $pages) echo '<a class="btn btn-secondary" href="'.get_pagenum_link($paged - 1).'">Anterior</a>'; 
      
      echo '<div class="me-1 ms-1">';
			
      for ($i=1; $i <= $pages; $i++) { 
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) { 
					echo ($paged == $i)? '<span class="btn btn-secondary active">'.$i.'</span>':'<a href="'.get_pagenum_link($i).'" class="btn btn-secondary">'.$i.'</a>'; 
				} 
			} 
      
      echo '</div>';
			
      if ($paged < $pages && $showitems < $pages) echo '<a class="btn btn-secondary" href="'.get_pagenum_link($paged + 1).'">Próxima</a>'; 
			
      if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo '<a class="btn btn-secondary" href="'.get_pagenum_link($pages).'">Útima</a>'; echo '</nav>'; 
		} 
	}

	// Place whatever you want to show the pagination
	$count_posts = wp_count_posts();
	$published_posts = $count_posts->publish;

	if( $published_posts > get_query_var( 'posts_per_page' ) ) {

		if ( function_exists( "miraupbd_pagination" ) ) { 
			miraupbd_pagination( $wp_query->max_num_pages ); 
		}
	}