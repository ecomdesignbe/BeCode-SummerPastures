<div class="row">

    <?php 
        $columns = get_sub_field( 'columns' );
        
        foreach($columns as $column): 
    ?>

            <div class="col-lg-4">

                <?php if($column['title']): ?>
                    <h3><?php echo $column['title']; ?></h3>
                <?php endif; ?>

                <?php if($column['content']): ?>
                    <p><?php echo $column['content']; ?></p>
                <?php endif; ?>

                <pre><?php // echo print_r($column['link']); ?></pre>
    
                <?php if($column['link']) : ?>
                    <a href="<?php echo $column['link']['url']; ?>" target="<?php echo $column['link']['target']; ?>"> Find out more </a>
                <?php endif; ?>
            </div>                        
        <?php endforeach; ?>
</div>