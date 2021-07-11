<!DOCTYPE html>
<html>
<head>
  <!-- Charset -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <!--Scale-->
  <meta name='viewport' content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--FavIcon-->
  <?php
  if ( has_custom_logo() ) {
    echo '<link rel="icon" type="image/png" href="' . esc_url( $logo[0]) . '">';
  } 
  ?>


  <?php wp_head(); ?>
  <style>


  .gradient {
    background: linear-gradient(90deg, <?= get_theme_mod( 'color_scheme_1', '#001122' ); ?> 0%, <?= get_theme_mod( 'color_scheme_2', '#07428C' ); ?> 100%);
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

  .fundo{
    background:<?= get_theme_mod( 'color_scheme_1', '#001122' ); ?> ;
  }

  .text-fundo{
     color: <?= get_theme_mod( 'color_scheme_1', '#001122' );  ?> ;
    border-color: <?= get_theme_mod( 'color_scheme_1', '#001122' );  ?> ;
  }

  .text-fundo:hover{
    background: <?=get_theme_mod( 'color_scheme_1', '#001122' ); ?>;
     color: #fff  ;
    border-color: #fff  ;
  }

</style>
</head>
<body style="background: <?= get_theme_mod('color_scheme_4','#fff');?>">
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
          bloginfo('name');
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
    'container_class'   => 'collapse navbar-collapse flex-grow-1 text-right',
    'container_id'      => 'navbarScroll',
    'menu_class'        => 'nav navbar-nav ms-auto flex-nowrap',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
  ) );
  ?>
</nav>
</div>
</div>


<?php esc_attr ("a");?>