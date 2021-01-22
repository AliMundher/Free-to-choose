<?php get_header("four") ?>
<div class="container">
    <!-- Start Text -->
    <div class="text_of_recipes">
        <div class="header_text wow animate__bounceIn" data-wow-duration="2s" data-wow-delay="1s">
            <h3 class="sub_title text-capitalize">our original restaurant</h3>
            <h2 class="main_title text-uppercase">the chef's <br>cafeteria </h2>
            <a href="" class="check_link"><span class="line"></span>check our menu</a>
        </div>
        <div class="small_lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Text -->
</div>
<!-- Start Rows -->
<div class="all_rows">
    <!-- Start Main Title  -->
    <div class="mains_title text-center">
        <h2 class="text-capitalize display-5 title_h1">welcome in liège</h2>
        <h1 class="text-uppercase font-weight-bold title_h2">presentation</h1>
    </div>
    <!-- End Main Title -->
    <div class="container">
        <!-- Start Row One -->
        <div class="row mt-5">
            <div class="col-12 col-md-6 p-0 reset_img_order">
                <img src="<?php echo get_template_directory_uri()?>/images/resto1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 text-center p-0">
                <div class="right_text_order">
                    <h2 class="text-capitalize display-5 title_h1 ">our original restaurant</h2>
                    <h2 class="font-weight-bold text-capitalize title_h2 my-3">the chef's cafeteria</h2>
                    <p class="mt-4 disc_p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic cum, qui deleniti autem culpa,
                        temporibus aliquid error rerum dignissimos ea fugiat iste itaque architecto ad voluptatum quia! dolor
                        laboriosam praesentium ea fugiat iste itaque architecto ad voluptatum
                        architecto architecto ad voluptatum voluptatum </p>
                </div>
            </div>
        </div>
        <!-- End Row One -->
        <!-- Start Row Two -->
        <div class="row mt-5">
            <div class="col-12 col-md-6 text-center p-0">
                <div class="right_text_order">
                    <h2 class="text-capitalize display-5 title_h1 ">our original restaurant</h2>
                    <h2 class="font-weight-bold text-capitalize title_h2 my-3">the chef's cafeteria</h2>
                    <p class="mt-4 disc_p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic cum, qui deleniti autem culpa,
                        temporibus aliquid error rerum dignissimos ea fugiat iste itaque architecto ad voluptatum quia! dolor
                        laboriosam praesentium ea fugiat iste itaque architecto ad voluptatum
                        architecto architecto ad voluptatum voluptatum </p>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 reset_img_order">
                <img src="<?php echo get_template_directory_uri()?>/images/salad.png" alt="" class="img-fluid">
            </div>
        </div>
        <!-- End Row Two -->
    </div>
</div>
<!-- End Rows -->
<!-- Start Find Us -->
<div class="find_us_text">
    <h2 class="text-capitalize display-5 text-center title_h1">find us</h2>
    <h2 class="text-center font-weight-bold text-capitalize title_h2 mb-5">location</h2>
</div>

<div class="mapouter">
    <div class="gmap_canvas"><iframe width="1540" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/82"></a><br>
    <style>.mapouter{position:relative;text-align:right;height:500px;width:1540px;}
    </style><a href="https://www.embedgooglemap.net">how to embed google map</a>
    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1540px;}
    </style>
    </div>
</div>
<!-- End Find Us -->
<!-- Start Reserver -->
<div class="reserver">
    <div class="container">
        <div class="reserve_text text-center">
            <h2 class="text-capitalize display-5 title_h1">submit information to place order</h2>
            <h2 class="text-capitalize title_h2 font-weight-bold">reserve a table</h2>
        </div>
        <div class="row top_m">
            <div class="col-12 col-md-7  wow animate__slideInLeft" data-wow-duration="2s" data-wow-offset="360">
                <img src="<?php echo get_template_directory_uri(); ?>/images/resto3.jpg" class="img-fluid" alt="photo">
            </div>
            <div class="col-12 col-md-5 ">
                <div class="discover_box  wow animate__slideInRight" data-wow-duration="2s" data-wow-offset="360">                
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Your Name</label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Your Email</label>
                                <input type="email" class="form-control" id="inputPassword4">
                            </div>
                        </div>  
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Phone Number</label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Table for</label>
                                <input type="number" class="form-control" id="inputPassword4">
                            </div>
                        </div>
                    </form> 
                    <label for="place">Place</label>
                    <input type="text" id="place" class="form-control"> 
                    <div class="form-row mt-3">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Phone Number</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Table for</label>
                            <input type="number" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <label for="disc">Your Message</label>
                    <textarea name="" id="disc"></textarea>
                    <button class="btn_reserve mt-3 text-capitalize">reserve now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Reserver -->
<!-- Start our menu -->
<div class="our_menu">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 text-center wow animate__slideInLeft" data-wow-duration="2s">
                <div class="images_col row">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p1.jpg" 
                    class="img-fluid col-12 col-sm-6 col-md-6 mb-3 pl-1" alt="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p2.jpg" 
                    class="img-fluid col-12 col-sm-6 col-md-6 mb-3 pl-1" alt="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p3.jpg" 
                    class="img-fluid col-12 col-sm-6 col-md-6 pl-1 mb-3 mb-md-0" alt="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p4.jpg" 
                    class="img-fluid col-12 col-sm-6 col-md-6 pl-1" alt="image">
                </div>
            </div>
            <div class="col-12 col-md-7 text-center wow animate__slideInRight" data-wow-duration="2s">
                <div class="right_text">
                    <h2 class="display-5 text-uppercase title_1">let's discover food</h2>
                        <h2 class="text-uppercase title_2">discover our menu</h2>
                        <p class="prag">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Reprehenderit molestiae veritatis modi fugiat quisquam nemo perspiciatis
                            doloribus quisquam nemo perspiciatis quisquam nemo perspiciatis
                        </p>
                        <button class="text-capitalize btn_menu">view the full menu</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our menu -->
<!-- Start Recipes Blog -->
<div class="recipes_blog">
    <div class="blog_text text-center">
        <h2 class="title_1 text-capitalize display-5">latest update</h2>
        <h2 class="title_2 text-uppercase font-font-weight-bold">rcipes blog</h2>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-3 mb-4 col-sm-6 mb-md-0 wow animate__slideInLeft" data-wow-duration="2s">
                <img src="<?php echo get_template_directory_uri(); ?>/images/p1.jpg" class="img-fluid" alt="photo">
                <i class="fa fa-clock-o clock my-3" aria-hidden="true"></i> <span class="date my-3">12 mars 2021</span>
                <h2 class="title_1">fluffy japanese pancakes</h2>
                <p class="disc">Lorem ipsum dolor, consectetur Commodi deleniti nisi sequi ea magnam dolorum.</p>
                <span class="line_dash"></span>
                <span class="read_more float-right text-capitalize">read more</span>
            </div>
            <div class="col-12 col-md-3 mb-4 col-sm-6 mb-md-0 wow animate__slideInUp" data-wow-duration="2s">
                <img src="<?php echo get_template_directory_uri(); ?>/images/p2.jpg" class="img-fluid" alt="photo">
                <i class="fa fa-clock-o clock my-3" aria-hidden="true"></i> <span class="date my-3">oct,4 2021</span>
                <h2 class="title_1">sunday brunch: egslut's</h2>
                <p class="disc">Lorem ipsum dolor, consectetur Commodi deleniti nisi sequi ea magnam dolorum.</p>
                <span class="line_dash"></span>
                <span class="read_more float-right text-capitalize">read more</span>
            </div>
            <div class="col-12 col-md-3 mb-4 col-sm-6 mb-md-0 wow animate__slideInUp" data-wow-duration="2s">
                <img src="<?php echo get_template_directory_uri(); ?>/images/p3.jpg" class="img-fluid" alt="photo">
                <i class="fa fa-clock-o clock my-3" aria-hidden="true"></i> <span class="date my-3">12 mars 2021</span>
                <h2 class="title_1">copycat panda express</h2>
                <p class="disc">Lorem ipsum dolor, consectetur Commodi deleniti nisi sequi ea magnam dolorum.</p>
                <span class="line_dash"></span>
                <span class="read_more float-right text-capitalize">read more</span>
            </div>
            <div class="col-12 col-md-3 mb-4 col-sm-6 mb-md-0 wow animate__slideInRight" data-wow-duration="2s">
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

<?php
    if(have_posts()){

        while (have_posts()){
            the_post() ?>
            <div class="order">
            <!-- <h2><?php the_title()?></h2>
            <?php the_content() ?> -->
            </div>

            <?php
        }
    }
   ?>

<?php get_footer() ?>
