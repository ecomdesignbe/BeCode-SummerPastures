<?php 
/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

/* Disable the editor for ALL pages. */
add_action('admin_init', function () {
    remove_post_type_support('page', 'editor');
});

function head_css_montheme()
{
?>
    <style>
        body {
            background-color: #eaeaea;
        }

        header {
            color : blue;
        }
    </style>

<?php
}
add_action('wp_head', 'head_css_montheme');

function footer_montheme()
{
?>
    <style>
        main {
            font-weight: bold;
        }

        footer {
            color: red;
        }
    </style>
    <script type="text/javascript" src="wp-content/themes/SummerPastures/script.js"></script>
<?php
}
add_action('wp_footer', 'footer_montheme');


?>