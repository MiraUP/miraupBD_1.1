<?php 
  /** 
   * Seleção de todos os dados dos ícones de um grupo
  */

  //Váriaveis globais
  global $post;
  $slug = $post->post_name;
  $URL_site = get_site_url();
  
  //Seleção do BD
  $group_icon = get_terms('groupicons', array('hide_empty' => false));
  foreach($group_icon as $term) {
    $termID  = $term->term_id;
    $term->name;
    $data_groupicons = get_posts( array(
      'post_type'       => 'attachment',
      'posts_per_page'  => 99999999,
      'orderby'         => 'title',
      'order'           => 'ASC',
      'tax_query'       => array( array(
        'taxonomy'      => 'groupicons',
        'field'         => 'term_id',
        'terms'         => $termID
      ) )
    ) );

    //Filtra os ícones que pertencem ao mesmo grupo
    if($term->name == $post->post_name) {
      
      /** Buscas no BD */
      //Lista dados dos ícones filtrados
      foreach ($data_groupicons as $groupicons) {

        /** Váriaveis comuns */
        //Busca total de registros de ícones desse grupo
        $total_icons[] = $groupicons->ID;
        //Inicia array de versões
        $versions[] = array();
        
        /** Buscas de diferentes dados que pertencem ao grupo de ícones */
        //Categorias 
        $caticons = wp_get_post_terms( $groupicons->ID, 'caticons', array( 'fields' => 'all' ) );
        //Versões
        $vericons = wp_get_post_terms( $groupicons->ID, 'vericons', array( 'fields' => 'all' ) );

        /** Listagem de diferentes dados que pertencem ao grupo de ícones */
        //Categorias
        foreach($caticons as $term) { 
          $category[] = $term->name;
        }
        //Versões
        foreach($vericons as $term) {
          $versions[] = $term->name;
        }       
      }
      
      
      /** Inclusão do HEADER -> Contagem total */
      //Exibe contagem total de ícones
      set_query_var( 'totalIcons', count($total_icons) );
      get_template_part( 'pages_template/icon-single/header' );


      /** Inclusão do CONTENT */
      set_query_var( 'category', $category );
      set_query_var( 'versions', $versions );
      get_template_part( 'pages_template/icon-single/content' );

    }
  }
?>