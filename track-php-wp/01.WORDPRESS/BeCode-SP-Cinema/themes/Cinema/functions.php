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
    
    /* Disable the editor for Movies. */
    add_action('admin_init', function () {
        remove_post_type_support('movies', 'editor');
    });  
    
    /* Disable the editor for Actors. */
    add_action('admin_init', function () {
        remove_post_type_support('actors', 'editor');
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
/*    function register_recipes_post_type() {
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
*/
function register_movies_post_type() {
    $args = array(
        'labels' => array(
            'name' => __( 'Movies' ),
            'singular_name' => __( 'Movie' )
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        // And many many others config !
        'menu_icon' => 'dashicons-video-alt',
        'show_in_nav_menus' => true,

        );
        register_post_type( 'movies', $args );
    }
    
    add_action( 'init', 'register_movies_post_type' );

    
function register_actors_post_type() {
    $args = array(
        'labels' => array(
            'name' => __( 'Actors' ),
            'singular_name' => __( 'Actor' )
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        // And many many others config !
        'menu_icon' => 'dashicons-admin-users',
        'show_in_nav_menus' => true,
        );
        register_post_type( 'actors', $args );
    }
    
    add_action( 'init', 'register_actors_post_type' );

    // bootstrap 5 wp_nav_menu walker
    class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
    {
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach($this->current_item->classes as $class) {
        if(in_array($class, $this->dropdown_menu_alignment_values)) {
            $dropdown_menu_class[] = $class;
        }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
        $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
        $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
        $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    }
    // register a new menu
    register_nav_menu('main-menu', 'Main menu');
?>

