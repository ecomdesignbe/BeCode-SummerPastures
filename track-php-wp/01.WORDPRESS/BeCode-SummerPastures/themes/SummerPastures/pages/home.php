<?php /* Template Name: Home */ ?>

<?php get_header() ?>

<h1><?php echo the_title() ?></h1>

<p> Date of publication :
<?php
    $date = get_the_date();
    echo $date;
?>
</p>

<?php get_footer() ?>
