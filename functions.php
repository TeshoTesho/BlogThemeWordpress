
<?php

//Capturando Walker Bootstrap para Wordpress
require_once(get_template_directory() . '/inc/class-nav-bootstrap-walker.php');



//Criando tema. Menu
add_action('after_setup_theme','my_theme_setup');
function my_theme_setup(){


    //POSTS --
    //Thumbnail
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1280,720,true);
    //Resumo Posts
    add_filter('excerpt_length',function($lenght){
        return 20;
    });
    add_filter('next_posts_link_attributes','posts_link_attributes');
    add_filter('previous_posts_link_attributes','posts_link_attributes');

    function posts_link_attributes(){
        return 'class="btn text-fundo mt-2 mb-2 btn-block"';
    }


    //PAGE--
    //Titulo
    add_theme_support('title-tag');
    //Menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bts5' ),
    ) );


    //Background
    /*
    add_theme_support('custom-background',
        array(
            'default-image' => get_template_directory_uri() . '/images/backgroud.jpg'
        )
    );

*/

    //Logo
    add_theme_support( 'custom-logo', 
        array(
         'height'      => 60,
         'width'       => 230,
         'flex-height' => true, 
         'flex-width'  => false
     ) 
    );

}



//Pegando os scripts bootstrap e fontAw
add_action('wp_enqueue_scripts','my_theme_scripts');
function my_theme_scripts(){
    wp_enqueue_style('my-theme-bootstrap',get_template_directory_uri().'/assents/css/bootstrap.min.css');
    wp_enqueue_style('my-theme-font-awesome',get_template_directory_uri().'/assents/css/all.css');
    //wp_enqueue_script('my-theme-bootstrap-popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js',array('jquery'),'2.9.2',true);
    //wp_enqueue_script('my-theme-bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js',array('popper'),'5.0.2',true);
}

//Sidebar Widgets
add_action('widgets_init','my_theme_sidebar');
function my_theme_sidebar(){

    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name' => 'Primary_Sidebar',
        'description' => 'Sidebar that appears accros tge entire website',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

//Esquema de Cores
function wptutsplus_customize_register( $wp_customize ) {

    //Cria seção
    $wp_customize->add_section( 'textcolors' , array(
        'title' =>  'Esquema de Cores',
        'priority' => 20
    ) );


    //Cria campos
    $txtcolors[] = array(
        'slug'=>'color_scheme_1', 
        'default' => '#001122',
        'label' => 'Gradiante 1.'
    );
    $txtcolors[] = array(
        'slug'=>'color_scheme_2', 
        'default' => '#07428C',
        'label' => 'Gradiante 2.'
    );

    $txtcolors[] = array(
      'slug'=>'color_scheme_3', 
      'default' => '#fff',
      'label' => 'Cor do texto do Header.'
  );

    $txtcolors[] = array(
        'slug'=>'color_scheme_4', 
        'default' => '#fff',
        'label' => 'Plano de fundo.'
    );


    $txtcolors[] = array(
        'slug'=>'color_scheme_5', 
        'default' => '#000',
        'label' => 'Cor do texto.'
    );

    $txtcolors[] = array(
        'slug'=>'color_scheme_6', 
        'default' => '#000',
        'label' => 'Cor do texto.'
    );





    
    //Define e cria no wordpress    
    foreach( $txtcolors as $txtcolor ) {

    // SETTINGS
        $wp_customize->add_setting(
            $txtcolor['slug'], array(
                'default' => $txtcolor['default'],
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            )
        );
    // CONTROLS
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $txtcolor['slug'], 
                array(
                    'label' => $txtcolor['label'], 
                    'section' => 'textcolors',
                    'settings' => $txtcolor['slug'])
            )
        );
    }



}
add_action('customize_register', 'wptutsplus_customize_register' );