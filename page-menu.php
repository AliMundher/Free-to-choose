<?php get_header("third") ?>

<div class="text_menu text-center">
    <h2 class="text-capitalize mb-2 title_welcome">welcome</h2>
    <h2 class="text-capitalize font-weight-bold title_the_menu mb-5">the menu</h2>
</div>

<?php 
    if(have_posts()){ ?>
        <h2 class="start text-capitalize text-center mb-5">startest</h2>
        <?php
        while (have_posts()){
            the_post() ?>
            <div class="container">
                <div class="menu text-left">
                    <?php the_content() ?>
                </div>
            </div>
            <?php
        }?>
        
        <?php
        

    }
?> 
<div class="bla menu_nois">
    <img src="<?php echo get_template_directory_uri(); ?>/images/hachures-blanches.png" class="img-fluid" alt="Logo">
</div>
<!-- Start Recipes Blog -->
<div class="page_menu_bg">
    <div class="recipes_blog mb-5">
        <div class="blog_text text-center">
            <h2 class="title_1 text-capitalize display-5">latest update</h2>
            <h2 class="title_2 text-uppercase font-font-weight-bold">rcipes blog</h2>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-3 mb-4 col-sm-6 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p1.jpg" class="img-fluid" alt="photo">
                    <i class="fa fa-clock-o clock my-3" aria-hidden="true"></i> <span class="date my-3">12 mars 2021</span>
                    <h2 class="title_1">fluffy japanese pancakes</h2>
                    <p class="disc">Lorem ipsum dolor, consectetur Commodi deleniti nisi sequi ea magnam dolorum.</p>
                    <span class="line_dash"></span>
                    <span class="read_more float-right text-capitalize">read more</span>
                </div>
                <div class="col-12 col-md-3 mb-4 col-sm-6 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p2.jpg" class="img-fluid" alt="photo">
                    <i class="fa fa-clock-o clock my-3" aria-hidden="true"></i> <span class="date my-3">oct,4 2021</span>
                    <h2 class="title_1">sunday brunch: egslut's</h2>
                    <p class="disc">Lorem ipsum dolor, consectetur Commodi deleniti nisi sequi ea magnam dolorum.</p>
                    <span class="line_dash"></span>
                    <span class="read_more float-right text-capitalize">read more</span>
                </div>
                <div class="col-12 col-md-3 mb-4 col-sm-6 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p3.jpg" class="img-fluid" alt="photo">
                    <i class="fa fa-clock-o clock my-3" aria-hidden="true"></i> <span class="date my-3">12 mars 2021</span>
                    <h2 class="title_1">copycat panda express</h2>
                    <p class="disc">Lorem ipsum dolor, consectetur Commodi deleniti nisi sequi ea magnam dolorum.</p>
                    <span class="line_dash"></span>
                    <span class="read_more float-right text-capitalize">read more</span>
                </div>
                <div class="col-12 col-md-3 mb-4 col-sm-6 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p4.jpg" class="img-fluid" alt="photo">
                    <i class="fa fa-clock-o clock my-3" aria-hidden="true"></i> <span class="date my-3">12 mars 2021</span>
                    <h2 class="title_1">delfni's secret pork sugo</h2>
                    <p class="disc">Lorem ipsum dolor, consectetur Commodi deleniti nisi sequi ea magnam dolorum.</p>
                    <span class="line_dash"></span>
                    <span class="read_more float-right text-capitalize">read more</span>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- End Recipes Blog -->
<div class=" nois_bto">
    <img src="<?php echo get_template_directory_uri(); ?>/images/hachures-blanches.png" class="img-fluid" alt="Logo">
</div>

<?php get_footer() ?>
