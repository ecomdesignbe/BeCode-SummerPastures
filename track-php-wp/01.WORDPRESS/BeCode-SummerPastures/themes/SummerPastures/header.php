<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta <?php bloginfo("charset") ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <p>HEADER</p>
        <?php 
            wp_nav_menu(   
                array ( 
                    'theme_location' => 'main-menu' 
                ) 
            ); 
        ?>
        <hr>        
    </header>    
