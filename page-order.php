<?php get_header("second") ?>
<?php 

    if(have_posts()){ 

        while (have_posts()){
            the_post() ?>
            <div class="order">
            <h2><?php the_title()?></h2>
            <?php the_content() ?>
            </div>

            <?php
        }
    }
   ?> 

<?php get_footer() ?>