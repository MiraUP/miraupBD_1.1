<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Site info -->
  <title><?php wp_title(''); ?></title>
  
  <!-- Meta data -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta name="theme-color" content="#354050" />
  <meta name="msapplication-TileColor" content="#80BADA">

  <!-- Iconfav -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/safari-pinned-tab.svg" color="#80BADA">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZE65PE7P54"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ZE65PE7P54');
  </script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php

  if ( is_user_logged_in() ) { 

    get_template_part( 'pages_template/404/error404' );

    get_template_part( 'template_part/footer/footer' );
    
    wp_footer(); 
   
  } 
  else { 
    wp_redirect( site_url().'/login' );
  }