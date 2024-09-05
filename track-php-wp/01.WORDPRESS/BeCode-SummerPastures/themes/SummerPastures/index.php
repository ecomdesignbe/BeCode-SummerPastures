<?php get_header(); ?>

<h1><?php the_field('title'); ?></h1>
<h2><?php the_field('subtitle');?></h2>

<?php 
    $image = get_field('image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>


<a href="<?php the_field('button'); ?>">My link</a>

<ul>
<?php
// check if the repeater field has rows of data
if( have_rows('list_of_fruits') ):
   
    // loop through the rows of data
    while ( have_rows('list_of_fruits') ) : the_row();

        // display a sub field value
?>
        <li><?php the_sub_field('name_of_fruits');?></li>

    <?php endwhile;

else :

    echo 'nothing found';

endif;

?>
</ul>


<?php
    get_footer();
?>