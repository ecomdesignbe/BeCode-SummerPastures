<?php 
    /* Template Name: Contact */
    get_header();
?>

<section class="page">
    <div class="container">
        

        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>

        <?php the_field('phone', 'options'); ?>

    </div>

</section>

<?php get_footer();?>