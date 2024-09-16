<?php 

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

<div class="container">
    <p>« <a href="<?php echo home_url(); ?>">Home</a></p>
    <div class="row mb-4">
            
        <div class="col-lg-6">
            <img src="<?php echo $coverImage['url']; ?>" class="img-fluid img-thumbnail">
        </div>
        <div class="col-lg-6">
            <p>Go To <?php previous_post_link(); ?> : <?php next_post_link(); ?></p>
            <h1><?php echo $title; ?></h1>
            <h2><?php echo $subtitle; ?></h2>
            <p>Date : <?php echo $date; ?></p>
            <p>Auteur : <?php 
                            $post_id =  get_the_ID();
                            $author_id = get_post_field ('post_author', $post_id);
                            $display_name = get_the_author_meta( 'nickname' , $author_id );
                            $author_url = get_author_posts_url( $author_id, $author_nicename = "" );
                        ?>
                        <a href="<?php echo $author_url; ?>"><?php echo $display_name; ?></a>
            </p>
            <p>Catégories : <?php echo the_category(); ?></p>
            <?php if(get_the_tag_list()) : ?>
                <p>Tags : <?php echo get_the_tag_list($before = "  ", $sep = " | ", $after = "  "); ?></p>
            <?php endif; ?>
            <p><?php echo $intro; ?></p>
        </div>
    </div>
</div>

<?php
    get_footer();
?>