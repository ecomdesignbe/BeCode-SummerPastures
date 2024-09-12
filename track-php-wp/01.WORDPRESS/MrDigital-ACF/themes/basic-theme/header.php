<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name');?></title>

    <?php wp_head();?>

    <?php if(get_field('dark_mode', 'options')): ?>

        <style>

            body {
                background: #000 !important;
            }

            header.main li a{
                color: #fff !important;
            }

        </style>

    <?php endif; ?>

</head>


<body <?php body_class();?>>


<header class="main">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'top-menu',
        ));
    ?>
</header>