<?php 
    /* warning-cannot-modify-header-information-headers-already-sent-by-error */
    ob_start(); // OPEN A BUFFER

    // Enqueuing

    function load_css()
    {
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
        wp_enqueue_style('main');

        wp_register_style('magnific', get_template_directory_uri() . '/css/magnific.css', [], 1, 'all');
        wp_enqueue_style('magnific');
    }

    add_action('wp_enqueue_scripts', 'load_css');

    function load_js()
    {
        wp_enqueue_script('jquery');

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
        wp_enqueue_script('bootstrap');

        wp_register_script('magnific', get_template_directory_uri() . '/js/magnific.js', ['jquery'], 1, true);
        wp_enqueue_script('magnific');

        wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', ['jquery'], 1, true);
        wp_enqueue_script('custom');
    }

    add_action('wp_enqueue_scripts', 'load_js');

    /* Disable WordPress Admin Bar for all users */
    add_filter( 'show_admin_bar', '__return_false' );

    /* Disable the editor for ALL pages. */
    add_action('admin_init', function () {
        remove_post_type_support('page', 'editor');
    });

    /* Disable the editor for ALL posts. */
    add_action('admin_init', function () {
        remove_post_type_support('post', 'editor');
    });

    // Add Menu 
    function register_menus() { 
        register_nav_menus(
            array(
                'main-menu' => 'Main Menu',
                'footer-menu' => 'Footer Menu',
            )
        ); 
    }
    add_action( 'init', 'register_menus' );

    // Add Featured Images or Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // register a custom post type for recipes
    function register_recipes_post_type() {
        $args = array(
            'labels' => array(
            'name' => __( 'Recipes' ),
            'singular_name' => __( 'Recipe' )
            ),
            'public' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail')
            // And many many others config !
        );
        register_post_type( 'recipes', $args );
    }
    
    add_action( 'init', 'register_recipes_post_type' );
?>

