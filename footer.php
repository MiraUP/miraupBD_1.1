    <?php 
      get_template_part( 'template_part/footer/footer' );
      
      global $post;
      $page_slug = $post->post_name;

      if ($page_slug != 'login') : get_template_part( 'template_part/header/menu' );
      endif;

      wp_footer(); 
    ?>
  </body>
</html>