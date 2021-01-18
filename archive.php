<?php get_header() ?>

    <div class="bla ">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hachures-blanches.png" class="img-fluid" alt="Logo">
    </div>

    <div class="container">
    <div class="text">
        <h2 class="text-capitalize text-center welcome">welcome in liège</h2>
        <h1 class="text-capitalize text-center font-weight-bold present">presentation</h1>
    </div>
    <div class="row mt-5">
        <?php 

            if(have_posts()){ 

                while (have_posts()){
                    the_post() ?>

                    <div class="col-12 col-md-6 mop " class="img-fluid">
                        <h2><?php the_title()?></h2>
                        <?php the_content() ?>
                    </div>

                    <?php
                }
            }
        ?> 
    </div>
</div>
<?php get_footer() ?>