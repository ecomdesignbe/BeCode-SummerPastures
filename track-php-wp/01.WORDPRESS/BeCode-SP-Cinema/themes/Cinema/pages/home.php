<?php 
    /* Template Name: Home */ 
    get_header();
    $title = get_field('title');
    $movies = get_field('movies');
    $featured_movies = get_field('featured_movies');
    $featured_actors = get_field('featured_actors');
?>

<div class="container">
    <div class="row mb-4">
        <div class="col-lg-6">
            <h1><?php echo $title ?></h1>
        </div>
        <div class="col-lg-6"></div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-6">
            <h2><?php echo $featured_movies ?></h2>
        </div>
        <div class="col-lg-6"></div>
    </div>
    <div class="row mb-4">
        <?php 
            // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
            $args = array(
                'post_type' => 'movies',
                'posts_per_page' => 4,
                'order' => 'ASC'
            );
            
            // 2. On exécute la WP Query
            $my_query = new WP_Query( $args );
            
            // 3. On lance la boucle !
            if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
        ?>
        
            <div class="col-lg-3 text-center mb-4 ">
                <a href="<?php echo the_permalink(); ?>">                  
                <?php 
                    $image = get_field('poster_image');
                    if( !empty( $image ) ): 
                ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="rounded img-fluid" style="min-height: 100%;" />
                <?php endif; ?>
                <p class="mt-2"><?php echo the_title(); ?></p>
                </a>
            </div>

        <?php 
            endwhile;
            endif;

            // 4. On réinitialise à la requête principale (important)
            wp_reset_postdata();
        ?>
    </div>
    <div class="row mb-4">
        <div class="col-lg-6">
            <h2><?php echo $featured_actors ?></h2>
        </div>
        <div class="col-lg-6"></div>
    </div>
    <div class="row mb-4">
        <?php 
            // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
            $args = array(
                'post_type' => 'actors',
                'posts_per_page' => 6,
                'order' => 'ASC'
            );
            
            // 2. On exécute la WP Query
            $my_query = new WP_Query( $args );
            
            // 3. On lance la boucle !
            if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
        ?>
        
            <div class="col-lg-2 text-center mb-4 ">
                <a href="<?php echo the_permalink(); ?>">                  
                <?php 
                    $image = get_field('picture');
                    if( !empty( $image ) ): 
                ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="rounded img-fluid" style="min-height: 100%;" />
                <?php endif; ?>
                <p class="mt-2"><?php echo the_title(); ?></p>
                </a>
            </div>

        <?php 
            endwhile;
            endif;

            // 4. On réinitialise à la requête principale (important)
            wp_reset_postdata();
        ?>
    </div>       
</div>



<?php get_footer() ?>
