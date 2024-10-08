<?php 
    get_header();
    $title = get_field('page_title');
?>

<section class="page">

    <div class="container">

        <?php the_field('phone', 'options'); ?>

        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>
        
        <?php if($title):?>            
            <h1> <?php echo $title; ?> </h1>
        <?php endif; ?>

        <?php if( have_rows('content')) : ?>

            <?php while ( have_rows('content')) : the_row()?>

                <?php if(get_row_layout() == 'columns_section'): ?>

                    <!-- > template_parts > section-columns.php -->
                    <?php get_template_part('template_parts/section', 'columns'); ?>

                <?php endif; ?>                

                <?php if(get_row_layout() == 'textarea_with_image'): ?>

                    <!-- > template_parts > section-textwithimage.php -->
                    <?php get_template_part('template_parts/section', 'textwithimage'); ?>

                <?php endif; ?>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</section>

<?php 
    get_footer();
?>