<!DOCTYPE html>
<html>
<head>
  <!-- Autor e Contato -->
  <meta name="author" content="Nicolas L. Araujo"> <!-- Autor -->
  <meta name="reply-to" content="nicolasleitearaujo@gmail.com"> <!-- Email do Autor -->
  <!-- Charset -->
  <meta charset="<?php bloginfo('charset'); ?>">  <!-- Meta Name -->
  <meta name="robots" content="index,follow"> <!-- Permitindo mecanismos de Busca -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Organizando as escalas -->
  <?php 
  if(is_single()){
    if(have_posts()):while(have_posts()) : the_post();
      ?>
      <!-- Mobile -->
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="application-name" content="<?php the_title();?>">
      <meta name="apple-mobile-web-app-title" content="<?php the_title();?>">
      <meta name="theme-color" content="<?= get_theme_mod( 'color_scheme_1', '#001122' ); ?>">
      <meta name="msapplication-navbutton-color" content="<?= get_theme_mod( 'color_scheme_1', '#001122' ); ?>">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
      <meta name="msapplication-starturl" content="/">
      <!-- Sobre o Site -->
      <meta name="description" content="<?php the_content(); ?>" /> <!-- Descrição-->
      <!-- OG -->
      <meta property="og:locale" content="pt_BR">
      <meta property="og:title" content="<?php the_title();?>"> <!-- Titulo -->
      <meta property="og:site_name" content="<?php the_title();?>"> <!-- Nome do Site -->
      <meta property="og:description" content="<?php the_content(); ?>"> <!-- Descrição -->
      <!-- Imagem -->
      <meta property="og:image" content="<?php esc_url( $logo[0]);?>">
      <meta property="og:image:type" content="image/webp">
      <meta property="og:image:width" content="800"> <!--  PIXELS -->
      <meta property="og:image:height" content="600"> <!--  PIXELS -->
      <!-- Facebook -->
      <meta property="fb:admins" content="werockcontent"/>
      <!-- Twitter -->
      <meta name="twitter:card" content="summary">
      <!-- shortcut -->
      <link rel="shortcut icon" href="<?php esc_url( $logo[0]);?>" type="image/x-icon">
      <!-- manifest -->
      <link rel="manifest" href="manifest.json">
    <?php endwhile;endif;
  }else{
    ?>
    <!-- Mobile -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="<?php  bloginfo('name');;?>">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name');?>">
    <meta name="theme-color" content="<?= get_theme_mod( 'color_scheme_1', '#001122' ); ?>">
    <meta name="msapplication-navbutton-color" content="<?= get_theme_mod( 'color_scheme_1', '#001122' ); ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <!-- Sobre o Site -->
    <meta name="description" content="<?php bloginfo( 'description' );?>" /> <!-- Descrição-->
    <!-- OG -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="<?php bloginfo( 'name' );?>"> <!-- Titulo -->
    <meta property="og:site_name" content="<?php bloginfo( 'name' );?>"> <!-- Nome do Site -->
    <meta property="og:description" content="<?php bloginfo( 'description' );?>"> <!-- Descrição -->
    <!-- Imagem -->
    <meta property="og:image" content="<?php if(has_custom_logo()):esc_url( $logo[0]);endif;?>">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="800"> <!--  PIXELS -->
    <meta property="og:image:height" content="600"> <!--  PIXELS -->
    <!-- Facebook -->
    <meta property="fb:admins" content="werockcontent"/>
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <!-- shortcut -->
    <link rel="shortcut icon" href="<?php esc_url( $logo[0]);?>" type="image/x-icon">
    <!-- manifest -->
    <link rel="manifest" href="manifest.json">
    <?php 
  }
  ?>
  <!--FavIcon-->
  <?php
  if ( has_custom_logo() ) {
    echo '<link rel="icon" type="image/png" href="' . esc_url( $logo[0]) . '">';
  } 
  ?>
  <?php wp_head(); ?>
  <style>
  body{
    overflow-x: hidden;
  }
  .cor1{
   background:<?= get_theme_mod( 'color_scheme_1', '#001122' ); ?> ;
 }
 .cor2{
   background:  <?= get_theme_mod( 'color_scheme_2', '#07428C' ); ?>; 
 }
 .gradient {
  background: linear-gradient(90deg, <?= get_theme_mod( 'color_scheme_1', '#001122' ); ?> 0%, <?= get_theme_mod( 'color_scheme_2', '#07428C' ); ?> 100%);
}
  .gradient2 {
    background: radial-gradient(circle, <?= get_theme_mod( 'color_scheme_2', '#07428C' ); ?> 0%, <?= get_theme_mod( 'color_scheme_1', '#001122' ); ?> 76%);
  }
  .text-header{
    color: <?= get_theme_mod( 'color_scheme_3', '#fff' ); ?> ;
    border-color: <?= get_theme_mod( 'color_scheme_3', '#fff' ); ?> ;
  }
  .title-body{
    color: <?= get_theme_mod( 'color_scheme_5', '#000' ); ?> ;
  }
  .text-body{
    color: <?= get_theme_mod( 'color_scheme_6', '#000' ); ?> ;
  }
  .text-fundo{
   color: <?= get_theme_mod( 'color_scheme_1', '#001122' );  ?> ;
   border-color: <?= get_theme_mod( 'color_scheme_1', '#001122' );  ?> ;
 }
 .text-cor1{
  color: <?= get_theme_mod( 'color_scheme_1', '#001122' );  ?> !important;

 }
 .text-fundo:hover{
  background: <?=get_theme_mod( 'color_scheme_1', '#07428C' ); ?>;
  color: #fff  ;
  border-color: #fff  ;
}
.menu-fundo{
  background: <?=get_theme_mod( 'menucolors_background', '#f2f2f2' ); ?>;
}
.menu-title{
 color: <?=get_theme_mod( 'menucolors_title', '#000' ); ?>;
}
.menu-text{
 color: <?=get_theme_mod( 'menucolors_text', '#000' ); ?>;
}
.body-color{
  background: <?= get_theme_mod('color_scheme_4','#fff');?>
}
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body class="body-color">
  <!-- - -->
  <?php wp_body_open(); ?>
  <?php
//Config
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
  <div class="gradient "  id="navbar_top">
    <div class="container w-100">
      <nav class="navbar navbar-expand-lg navbar-dark "  id="navbar_top_1">
        <div class="d-flex flex-grow-1">
         <a class="navbar-brand me-auto bd-highlight" href="<?php echo home_url('/')?>">
          <?php
          if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0]) . '" width="30" height="30" alt="' . get_bloginfo( 'name' ) . '"> ';
          } else{
            ?>
            <div class="text-light fw-bold" id='navbar-title'>
              <?php
              bloginfo('name');
              ?>
            </div>
            <?php
          }
          ?> 
        </a>
        <div class="float-right">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      
      <?php
      wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse flex-grow-1 text-right ',
        'container_id'      => 'navbarScroll',
        'menu_class'        => 'nav navbar-nav ms-auto flex-nowrap ',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
    </nav>
  </div>
</div>
<?php esc_attr ("a");?>