<?php get_header("second") ?>

<div class="container">
    <div class="row">
        <?php 
            $args = array(
                'post_type' => 'restaurant'
            );
            $the_query = new WP_Query($args);
        ?> 
        <?php 
            if ($the_query->have_posts() ):
                while ($the_query->have_posts() ):?>
                    <div class="col-12 col-md-4 page_restaurant">
                        <?php $the_query->the_post() ?>
                        <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a>
                        <?php the_post_thumbnail() ?>
                        <?php the_excerpt(); ?>
                    </div>
                <?php
                endwhile;
            endif;
        ?>
    </div>
</div>
<?php get_footer() ?>
