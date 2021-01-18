<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo("name") ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
<div class="header3">
    <div class="overlay overlay_2 "></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="<?php bloginfo('url') ?>" class="navbar-brand">
                <span><?php bloginfo('name') ?></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <?php display_menu() ?>
            </div>
        </div>
    </nav>
</div>
<div class="bla ">
    <img src="<?php echo get_template_directory_uri(); ?>/images/hachures-blanches.png" class="img-fluid" alt="Logo">
</div>



