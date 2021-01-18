<?php get_header("second") ?>

<!-- Start First -->
<div class="single_content">
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-5">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                <a href="" class="text-capitalize mx-2 return_link">return</a> | 
                <span class="text-capitalize mx-2 date"><?php the_time('F j, Y') ?></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="float-right cut_style">
                <img style="fill:#fff" src="<?php echo get_template_directory_uri(); ?>/svg/cutelry.svg"  class="img-fluid" alt="Logo">
                local food</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10">
                <h2 class="title_single"><?php the_title() ?></h2>
                <div class="all_content">
                    <?php the_post_thumbnail("",["class"=>"img-fluid"]) ?>
                    <?php the_content()?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Second -->

<?php get_footer() ?>

