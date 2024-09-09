<?php 

    /* Template Name: Options */

    $colors = get_field('choose_your_color');

    $flavours = get_field('choose_a_flavour');

    $consent = get_field('do_you_consent');

    $where = get_field('where_do_you_want_to_go');

    $question = get_field('are_you_learning_anything');

    get_header();
?>

<section class="page">
    <div class="container">

        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>


        <!-- Display Select Option value -->
        <?php if($colors): ?>
            <?php /* var_dump($color); */ ?>
            <!-- Display Simple Select Option value -->
            <strong>Colors :</strong> <?php echo "Label : " . $colors['label'] . " Value : " . $colors['value']; ?>
        <?php endif; ?>
        
        <br /><br />

        <?php /* switch($colors['value']) {

            case 'rouge' :
                    echo 'Ceci est rouge';
            break;

            case 'bleu' :
                    echo 'Ceci est bleu';
            break;

            case 'vert' :
                    echo 'Ceci est vert';
            break;

        }; */ ?>

        <!-- Display Multiple Select Option value --> 
        <?php if($colors): ?>        
            <strong>Colors :</strong> <?php echo implode($colors, ', '); ?>   
        <?php endif; ?>
        <?php /* foreach($colors as $color): */ ?>
            <?php /* echo $color['value'];  */ ?>
        <?php /* endforeach; */ ?>

        <br /><br />

        <!-- Display Checkbox -->
        <?php echo implode($flavours, ', '); ?>

        <br /><br />

        <!-- Display Radio -->
        <?php echo $consent; ?>

        <br /><br />

        <!-- Display Button Group -->
        <?php echo $where; ?>

        <br /><br />

        <!-- Display True/False -->
        <?php echo $question; ?>
        <?php if($question): ?>
            Yes, i'm learning
        <?php else: ?>
            No, i'm not learning
        <?php endif; ?>

    </div>

</section>

<?php get_footer();?>