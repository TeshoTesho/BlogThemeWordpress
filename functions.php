
<?php

//Capturando Walker Bootstrap para Wordpress
require_once(get_template_directory() . '/inc/class-nav-bootstrap-walker.php');

//Footer - Menu
//require_once(get_template_directory() . '/inc/costumizer.php');



//Criando tema. Menu
add_action('after_setup_theme','my_theme_setup');
function my_theme_setup(){


    //POSTS --
    //Thumbnail
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1280,720,true);
    //Resumo Posts
    add_filter('excerpt_length',function($lenght){
        return 10;
    });
    add_filter('next_posts_link_attributes','posts_link_attributes');
    add_filter('previous_posts_link_attributes','posts_link_attributes');

    function posts_link_attributes(){
        return 'class="btn text-fundo mt-2 mb-2 btn-block"';
    }


    //PAGE--
    //Titulo
    add_theme_support('title-tag');
    //Menu Header
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Otima Ideia' ),
    ) );
    //Menus Rodape

    register_nav_menus( array(
        'primary_footer' => __( 'Primary Menu Footer', 'Otima Ideia' ),
    ) );

    register_nav_menus( array(
        'second_footer' => __( 'Second Menu Footer', 'Otima Ideia' ),
    ) );

    register_nav_menus( array(
        'third_footer' => __( 'Third Menu Footer', 'Otima Ideia' ),
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

    
    //Formato de Posts
    add_theme_support('post-formats',array(
        'aside','image'
    ));




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
    // Criando barra lateral
    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name' => 'Barra Lateral',
        'description' => 'Sidebar that appears accros tge entire website',
        'before_widget' => '<div id="%1$s" class="widget card %2$s text-dark mb-3">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="card-header  cor2 text-header rounded-top">',
        'after_title' => '</h5>',   
    ));
}


//Comentários

// Ativar o fomrulário para respostas nos comentários
function theme_queue_js() {
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
}
add_action('wp_print_scripts', 'theme_queue_js');

// Personalizar os comentários
function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">

        <div class="card mb-3">
            <div class="card-body">

            <div class="comment-intro">

                <h5 class="card-title text-cor1" style=""><?php comment_author(); ?></h5>
                <h6 class="card-subtitle mb-3 text-muted">Comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>
            
            </div>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

            </div>
        </div>

    <?php

}

//Esquema de Cores
function wptutsplus_customize_register( $wp_customize ) {

    //Cria seção

    //Header
    $wp_customize->add_section( 'textcolors' , array(
        'title' =>  'Cores Pincipais',
        'priority' => 20
    ) );
    //Bootstrap Colors
    $wp_customize->add_section( 'bootstrapcolors' , array(
        'title' =>  'Esquema de Cores - Bootstrap',
        'priority' => 20
    ) );
    //Menu
    $wp_customize->add_section( 'menucolors' , array(
        'title' =>  'Barra de Menu',
        'priority' => 20
    ) );


    //Cria campos

    //Header
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
        'label' => 'Cor do Título.'
    );

    /*
    $txtcolors[] = array(
        'slug'=>'color_scheme_6', 
        'default' => '#000',
        'label' => 'Cor do texto.'
    );
    //Bootstrap
    //Primary secoundary success danger warning dark light  
    $btcolors[] = array(
        'slug' => 'bootstrapcolors_primary',
        'default' => '#0d6efd',
        'label' => 'Primary'
    );
    */
    //Menu
    $menucolors[] = array(
        'slug' => 'menucolors_background',
        'default' => '#f2f2f2',
        'label' => 'Cor de Fundo'
    );
    $menucolors[] = array(
        'slug' => 'menucolors_title',
        'default' => '#000',
        'label' => 'Cor do Título'
    );
    /*
    $menucolors[] = array(
        'slug' => 'menucolors_text',
        'default' => '#000',
        'label' => 'Cor do Texto'
    );
    */


    
    //Define e cria no wordpress 


    //Text Colors   
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

    /*
    //Bootstrap
    foreach( $btcolors as $btcolor ) {

    // SETTINGS
        $wp_customize->add_setting(
            $btcolor['slug'], array(
                'default' => $btcolor['default'],
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            )
        );
    // CONTROLS
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $btcolor['slug'], 
                array(
                    'label' => $btcolor['label'], 
                    'section' => 'bootstrapcolors',
                    'settings' => $btcolor['slug'])
            )
        );
    }

    */
    //Menu
    foreach( $menucolors as $menucolor ) {

    // SETTINGS
        $wp_customize->add_setting(
            $menucolor['slug'], array(
                'default' => $menucolor['default'],
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            )
        );
    // CONTROLS
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $menucolor['slug'], 
                array(
                    'label' => $menucolor['label'], 
                    'section' => 'menucolors',
                    'settings' => $menucolor['slug'])
            )
        );
    }



}
add_action('customize_register', 'wptutsplus_customize_register' );


