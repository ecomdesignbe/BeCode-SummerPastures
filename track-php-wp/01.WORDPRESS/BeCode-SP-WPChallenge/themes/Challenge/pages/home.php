<?php 
    /* Template Name: Home */ 
    
    get_header(); 
    
    $coverImage = get_field('hero_image');

    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $intro = get_field('intro');

    $values_title = get_field('values_title');
    $values = get_field('values');
    
    $blog_section_title = get_field('blog_section_title');


    $date = get_the_date();

?>
<?php 
    // print_r($coverImage);
?>
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-6">
            <img src="<?php echo $coverImage['url']; ?>" class="img-fluid img-thumbnail">
        </div>
        <div class="col-lg-6">

            <h1><?php echo $title; ?></h1>
            <h2><?php echo $subtitle; ?></h2>
            <p><?php echo $intro; ?></p>
        </div>
    </div>
    <h2><?php echo $values_title; ?></h2>
    <div class="row mb-4">
        <ul>
            <?php
                // check if the repeater field has rows of data
                if( have_rows('values') ):
                
                    // loop through the rows of data
                    while ( have_rows('values') ) : the_row();

                        // display a sub field value
                ?>
                        <li><?php the_sub_field('value');?></li>

                    <?php endwhile;

                else :

                    echo 'nothing found';

                endif;
            ?>
        </ul>
    </div>
    <h2><?php echo $blog_section_title; ?></h2>  
    <div class="row mb-4">
        <?php 
            // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );
            
            // 2. On exécute la WP Query
            $my_query = new WP_Query( $args );
            
            // 3. On lance la boucle !
            if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
        ?>
        
            <div class="col-lg-4">
                <a href="<?php echo get_page_uri(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-thumbnail', 'title' => 'Feature image']); ?>
                    
                    <h3><?php echo the_title(); ?></h3>
                    
                    <p><?php echo $date; ?></p>
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
