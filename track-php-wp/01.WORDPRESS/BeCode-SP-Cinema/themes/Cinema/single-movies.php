<?php 
    get_header();

?>

<section class="page">
    <div class="container">
        <p>« <a href="<?php echo home_url(); ?>">Home</a></p>
        <div class="row">
            <div class="col-lg-4">
                <?php 
                    $image = get_field('poster_image');
                    
                    if( !empty( $image ) ): 
                ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                <?php endif; ?>
            </div>
            <div class="col-lg-8">
                <p>Go To <?php previous_post_link(); ?> : <?php next_post_link(); ?></p>

                <h1><?php echo esc_html( get_field('title') ); ?></h1>
                
                <p>Year <?php echo esc_html( get_field('year') ); ?></p>
                
                <h3 class="mb-4">Story</h3>
                <p> <?php echo esc_html( get_field('story') ); ?></p>
                
                <h3 class="mb-4">Critic</h3>
                <p><?php echo esc_html( get_field('critic') ); ?></p>
            </div>
        </div>





    
        <?php // if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php // the_content(); ?>

        <?php // endwhile; else: endif; ?>
    </div>
</section>

<?php 
    get_footer();
?>