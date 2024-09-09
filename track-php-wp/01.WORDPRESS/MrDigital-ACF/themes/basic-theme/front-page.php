<?php 
    get_header();

    /* ACF BASIC FIELD */ 
    $title = get_field('page_title');
    $description = get_field('description');
    $other_description = get_field('other_description');
    $my_input = get_field('my_input');
?>

<section class="page">

    <div class="container">

        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>
        
        <!-- TEXT -->
        <?php /* the_field('page_title'); or */ ?> 
        <?php if($title):?>            
            <h1> <?php echo $title; ?> </h1>
        <?php endif; ?>

        <!-- TEXTAREA -->
        <?php if($description): ?>
            <p> <?php echo nl2br($description) ?> </p>
        <?php endif; ?>

        <!-- WYSIWYG EDITOR -->
        <?php if($other_description):?>            
            <?php echo $other_description; ?>
        <?php endif; ?>

        <?php if($my_input): ?>
            <?php echo $my_input; ?>
        <?php endif; ?>


    </div>
</section>

<?php 
    get_footer();
?>