<?php 
    $title = get_sub_field( 'title' );
    $content = get_sub_field( 'content' );
    $image = get_sub_field( 'image' );
    $picture = $image['sizes']['large'];
    $side = get_sub_field( 'image_side' );
?>

<div class="row">

    <?php if($side == 'left'): ?>

        <div class="col-lg-6">

            <img src="<?php echo $picture; ?>" class="img-fluid">
            
        </div>
        <div class="col-lg-6">
            <h4><?php echo $title; ?></h4>
            <p><?php echo $content; ?></p>
        </div>

        <?php else: ?>

            <div class="col-lg-6">
                <h4><?php echo $title; ?></h4>
                <p><?php echo $content; ?></p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo $picture; ?>"  class="img-fluid">
            </div>
    <?php endif; ?>

</div>