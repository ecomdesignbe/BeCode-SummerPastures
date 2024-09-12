<?php 
    get_header();

    $locations = get_field('locations');
    $related_posts = get_field('related_post');


?>

<section class="page">
    <div class="container">
        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>

        <?php foreach ($locations as $post): ?>

            <?php setup_postdata( $post ); ?>

            <?php echo the_title(); ?>

            <?php the_field('address'); ?>

        <?php wp_reset_postdata(); endforeach; ?>

        <br /> <br /> 

        <pre><?php echo print_r($related_posts);  ?></pre>

        <br /> <br /> 

        <?php if($related_posts): ?>

            <ul class="list-group">
                <?php foreach ($related_posts as $related_post): ?>
                <li class="list-group-item">   
                    <a href=" <?php echo get_the_permalink($related_post->ID);  ?>">
                        <?php echo $related_post->post_title;  ?>
                        <?php echo $related_post->post_content;  ?>
                    </a>
                </li>

                <?php endforeach; ?>
            </ul>
        <?php endif; ?>


    </div>
</section>

<?php 
    get_footer();
?>