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

<?php get_footer() ?>
