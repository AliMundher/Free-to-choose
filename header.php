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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <?php wp_head() ?>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="<?php bloginfo('url') ?>" class="navbar-brand wow animate__slideInDown" data-wow-duration="2s">
                <span><?php bloginfo('name') ?></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse wow animate__slideInDown" data-wow-duration="2s" id="menu">
                <?php display_menu() ?>
            </div>
        </div>
    </nav>
</header>



