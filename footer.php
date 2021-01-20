
<!-- Start NewsLetters -->
<div class="container">
    <div class="newsletter">
        <div class=" line_noise ">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hachures-noires.png" class="img-fluid" alt="photo">
        </div>
        <div class="row">
            <div class="col-12 col-md-5">
                <h1 class="text-uppercase h3 join_text">join our <br> newsletter</h1>
            </div>
            <div class="col-12 col-md-7 ">
                <div class="input_search text-right">
                    <input type="text" placeholder="Enter your Email" class="p-2">
                    <button class="text-uppercase p-2 btn_sub">subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End NewsLetters -->
        <footer>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12 col-md-3">
                        <h1 class="text-capitalize title_fot">dev restaurants</h1>
                        <p class="fot_pra">Lorem, ipsum consectetur adipisicing voluptatem dolores
                            consequuntur officia praesentium fuga dolorum.</p>
                        <div class="social_icons mb-4">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h1 class="text-capitalize open_fot ">open hours</h1>
                        <div class="open_one">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class="day ml-1 text-capitalize">monday</span>
                            <span class="line_sp"></span>
                            <span class="closed text-capitalize">closed</span>
                        </div>
                        <div class="open_one">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class="day ml-1 text-capitalize">tue-fri</span>
                            <span class="line_sp"></span>
                            <span class="closed text-capitalize">10am - 12am</span>
                        </div>
                        <div class="open_one">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class="day ml-1 text-capitalize">sat-sun</span>
                            <span class="line_sp"></span>
                            <span class="closed text-capitalize">7am-1am</span>
                        </div>
                        <div class="open_one">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class="day ml-1 text-capitalize">public h</span>
                            <span class="line_sp"></span>
                            <span class="closed text-capitalize">7am - 1am</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h1 class="text-capitalize open_fot ">contact us</h1>
                        <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                        <span>+1(123) 210 2310</span>
                        <div class="my-2">
                            <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                            <span class="text-capitalize map">rue de sallon,36 <br> 4120 liège <br> belgiume</span>
                        </div>
                        <i class="fa fa-envelope mr-2" aria-hidden="true"></i>
                        <span class="email">devservice@gmail.com</span>
                    </div>
                    <div class="col-12 col-md-3">
                        <h1 class="text-capitalize open_fot ">instagram</h1>
                        <div class="row">
                            <div class="col-12 col-md-4 p-0 mb-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/p1.jpg" class="img-fluid" alt="photo">
                            </div>
                            <div class="col-12 col-md-4 p-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/p2.jpg" class="img-fluid" alt="photo">
                            </div>
                            <div class="col-12 col-md-4 p-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/p4.jpg" class="img-fluid" alt="photo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 p-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/p3.jpg" class="img-fluid" alt="photo">
                            </div>
                            <div class="col-12 col-md-4 p-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/p4.jpg" class="img-fluid" alt="photo">
                            </div>
                            <div class="col-12 col-md-4 p-0 mb-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/p2.jpg" class="img-fluid" alt="photo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer() ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>