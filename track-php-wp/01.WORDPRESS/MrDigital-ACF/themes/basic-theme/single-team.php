<?php 
    get_header();

    $locations = get_field('locations');
?>

<section class="page">
    <div class="container">
        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>

        <?php foreach ($locations as $location): ?>
            <a href="<?php echo get_page_link($location->ID); ?>">
                <img src="<?php echo get_the_post_thumbnail_url($location->ID, 'thumbnail') ?>">
                <h3>
                    <?php echo $location->post_title; ?>                
                </h3>
            </a>
            <p><?php echo $location->post_content; ?></p>
            
        <?php endforeach; ?>
    </div>
</section>

<?php 
    get_footer();
?>