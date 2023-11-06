<?php
  /****** Add Taxonomy Post ******/
  function miraupbd_add_post_taxonomy() {
    $developer = array(
      'name' => 'Desenvolvedor',
      'singular_name' => 'Desenvolvedor',
      'search_items' =>  'Pesquisar Desenvolvedor',
      'all_items' => 'Todos Desenvolvedor',
      'parent_item' => 'Parent Desenvolvedor',
      'parent_item_colon' => 'Parent Desenvolvedor:',
      'edit_item' => 'Editar Desenvolvedor', 
      'update_item' => 'Atualizar Desenvolvedor',
      'add_new_item' => 'Add novo Desenvolvedor',
      'new_item_name' => 'Novo Desenvolvedor',
      'menu_name' => 'Desenvolvedor',
    );
    
    $argsDeveloper = array(
      'labels' => $developer,
      'hierarchical' => true,
      'query_var' => true,
      'show_admin_column' => true,
      'rewrite' => array( 'slug' => 'developer' ),
      'show_ui' => true,
      'show_in_rest' => true,
    );

    $origin = array(
      'name' => 'Origem',
      'singular_name' => 'Origem',
      'search_items' =>  'Pesquisar Origem',
      'all_items' => 'Todas Origem',
      'parent_item' => 'Pai Origem',
      'parent_item_colon' => 'Pai Origem:',
      'edit_item' => 'Editar Origem', 
      'update_item' => 'Atualizar Origem',
      'add_new_item' => 'Add nova Origem',
      'new_item_name' => 'Nova Origem',
      'menu_name' => 'Origem',
    );
    
    $argsOrigin = array(
      'labels' => $origin,
      'hierarchical' => true,
      'query_var' => true,
      'show_admin_column' => true,
      'rewrite' => array( 'slug' => 'origin' ),
      'show_ui' => true,
      'show_in_rest' => true,
    );

    $version = array(
      'name' => 'Versão',
      'singular_name' => 'Versão',
      'search_items' =>  'Pesquisar Versão',
      'all_items' => 'Todas Versão',
      'parent_item' => 'Pai Versão',
      'parent_item_colon' => 'Pai Versão:',
      'edit_item' => 'Editar Versão', 
      'update_item' => 'Atualizar Versão',
      'add_new_item' => 'Add nova Versão',
      'new_item_name' => 'Nova Versão',
      'menu_name' => 'Versão',
    );
    
    $argsVersion = array(
      'labels' => $version,
      'hierarchical' => true,
      'query_var' => true,
      'show_admin_column' => true,
      'rewrite' => array( 'slug' => 'version' ),
      'show_ui' => true,
      'show_in_rest' => true,
    );

    register_taxonomy('developer', 'post', $argsDeveloper );
    register_taxonomy('origin', 'post', $argsOrigin );
    register_taxonomy('version', 'post', $argsVersion );
  }
  add_action( 'init', 'miraupbd_add_post_taxonomy', 0 );