<?php 
    $link = get_field('link');
    // $page_link = get_field('page_link');
    $page_links = get_field('page_link');

    get_header();
?>

<section class="page">
    <div class="container">
        <h1> <?php the_title(); ?> </h1>

        <?php 
            $args = [
                'post_type' => 'team',
                'meta_query' => [

                    'key' => 'locations',
                    'value' => '"' . get_the_ID() . '"',
                    'compare' => 'LIKE',                
                ]
            ];
            
            $team_members = get_posts($args);
        ?>

        <?php foreach ($team_members as $member): ?>

            <a href=" <?php echo get_permalink($member->ID); ?> "><?php echo $member->post_title ;?></a> <br />

        <?php endforeach; ?>

        <br /> <br /> 
        <!-- Simple Link -->
        <?php if($page_links): ?>
        
            <ul class="list-group">

                <?php foreach($page_links as $link): ?>

                    <li class="list-group-item"><a href=" <?php echo $link; ?> " target="_blank">  Click here to see > <?php echo $link; ?> </a></li> <br> 
                
                <?php endforeach; ?>

            </ul>
        <?php endif; ?>

    </div>
</section>

<?php 
    get_footer();
?>