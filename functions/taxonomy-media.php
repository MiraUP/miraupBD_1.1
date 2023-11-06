<?php
  /****** Add Taxonomy Media Icons ******/
  function miraupbd_add_icons_media_taxonomy() {
    $category = array(
      'name' => 'Categorias',
      'singular_name' => 'Categoria do ícone',
      'search_items' => 'Pesquisar ícones',
      'all_items' => 'Todas os ícones',
      'parent_item' => 'Categoria icone',
      'parent_item_colon' => 'Categoria icone:',
      'edit_item' => 'Editar categoria',
      'update_item' => 'Atualizar categoria',
      'add_new_item' => 'Adicionar nova categoria',
      'new_item_name' => 'Nova categoria',
      'menu_name' => 'Categorias dos ícones',
    );

    $group = array(
      'name' => 'Grupo',
      'singular_name' => 'Grupo do ícone',
      'search_items' => 'Pesquisar grupo',
      'all_items' => 'Todas os grupos',
      'parent_item' => 'Grupo icone',
      'parent_item_colon' => 'Grupo icone:',
      'edit_item' => 'Editar Grupo',
      'update_item' => 'Atualizar Grupo',
      'add_new_item' => 'Adicionar novo Grupo',
      'new_item_name' => 'Novo Grupo',
      'menu_name' => 'Grupo do ícone',
    );

    $version = array(
      'name' => 'Versão',
      'singular_name' => 'Versão do ícone',
      'search_items' => 'Pesquisar versão',
      'all_items' => 'Todas os versão',
      'parent_item' => 'Versão icone',
      'parent_item_colon' => 'Versão icone:',
      'edit_item' => 'Editar versão',
      'update_item' => 'Atualizar versão',
      'add_new_item' => 'Adicionar nova versão',
      'new_item_name' => 'Nova versão',
      'menu_name' => 'Versão do ícone',
    );

    $argsCat = array(
      'labels' => $category,
      'hierarchical' => true,
      'query_var' => true,
      'show_ui' => true,
      'update_count_callback' => '_update_post_term_count',
      'show_admin_column' => true,
      'rewrite'=> array( 'slug' => 'caticons' ),
    );

    $argsGro = array(
      'labels' => $group,
      'hierarchical' => true,
      'query_var' => true,
      'show_ui' => true,
      'update_count_callback' => '_update_post_term_count',
      'show_admin_column' => true,
      'rewrite'=> array( 'slug' => 'groupicons' ),
    );

    $argsVer = array(
      'labels' => $version,
      'hierarchical' => true,
      'query_var' => 'true',
      'rewrite' => 'true',
      'show_admin_column' => 'true',
    );

    register_taxonomy( 'caticons', 'attachment', $argsCat );
    register_taxonomy( 'groupicons', 'attachment', $argsGro );
    register_taxonomy( 'vericons', 'attachment', $argsVer );
  }
  add_action( 'init', 'miraupbd_add_icons_media_taxonomy' );  
