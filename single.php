<?php get_header("second") ?>

<!-- Start First -->
<div class="single_content">
    <div class="container">
        <!-- Start First Row -->
        <div class="row my-5">
            <div class="col-12 col-md-5">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                <a href="" class="text-capitalize mx-2 return_link">return</a> | 
                <span class="text-capitalize mx-2 date"><?php the_time('F j, Y') ?></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="float-right cut_style">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/cutelry.svg"  class="img-fluid" alt="Logo">
                local food</span>
            </div>
        </div>
        <!-- End First Row -->

        <!-- Start Second Row -->
        <div class="row">
            <div class="col-12 col-md-10">
                <h2 class="title_single"><?php the_title() ?></h2>
                <div class="all_content">
                    <?php the_post_thumbnail("",["class"=>"img-fluid"]) ?>
                    <?php the_content()?>
                </div>
            </div>
        </div>
        <!-- End Second Row -->

    </div>
</div>
<!-- Start Second -->
<div class="container">
    <div class="row m_top">
        <div class="col-12 col-md-1">
            <div class="social_icons mb-4 social_media">
                <i class="fa fa-facebook d-block" aria-hidden="true"></i>
                <i class="fa fa-twitter d-block" aria-hidden="true"></i>
                <i class="fa fa-instagram d-block" aria-hidden="true"></i>
                <i class="fa fa-linkedin-square d-block" aria-hidden="true"></i>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <h3 class="text-capitalize font-weight-bold title_list mb-3">ingredients</h3>
            <p class="title_of_list">for 4 people - preparation 3 min:</p>
            <ul class="list mb-5">
                <li>pomme de tree à chair ferme: 500g</li>
                <li>haricots verts: 800g</li>
                <li>oignons: 1</li>
                <li>allumetes de lardons fumés: 250g</li>
                <li>beure 1 c à soup</li>
                <li>vinaigre baisamique: 2 c à soup</li>
            </ul>
            <h2 class="text-capitalize font-weight-bold title_list my-4">instructions</h2>
            <div class="container">
                <div class="ins">
                    <p class="small_circle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates perferendis 
                        distinctio maxime illum cupiditate quidem error non cumque adipisicing elit. Fuga voluptates perferendis  </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates perferendis 
                    distinctio adipisicing elit. Fuga voluptates perferendis  maxime illum cupiditate adipisicing elit. Fuga voluptates perferendis  </p>
                </div>
                <div class="ins my-5">
                    <p class="small_circle twoo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates perferendis 
                        distinctio maxime illum cupiditate quidem error non cumque  </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates perferendis 
                    distinctio maxime illum cupiditate quidem error </p>
                </div>
                <div class="ins">
                    <p class="small_circle threee">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates perferendis 
                        distinctio maxime illum cupiditate quidem error non cumque  </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates perferendis 
                    distinctio maxime illum cupiditate quidem error non  </p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae placeat cupiditate, fugit exercitationem sed in cum eos vel, qui modi quis expedita 
                        laboriosam quaerat facere deserunt aut sequi explicabo laborum.</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/images/resto2.jpg" alt="" class="img-fluid single_img mb-4">
                <div class="ins">
                    <p class="small_circle fourr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates perferendis 
                        distinctio maxime illum cupiditate quidem error non cumque  </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates perferendis 
                    distinctio maxime illum cupiditate quidem error non  </p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae placeat cupiditate, fugit exercitationem sed in cum eos vel, qui modi quis expedita 
                        laboriosam quaerat .</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Recipes Blog -->
<div class="recipes_blog recipes_top">
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
<!-- End Recipes Blog -->

<?php get_footer() ?>

