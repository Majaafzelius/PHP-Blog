<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <title> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <style>
        header {
            background-image: url("<?php header_image(); ?>");
        }
    </style>
    <?php wp_head(); ?>

</head>

<body>
    <header>
        
        <!-- länk i header-logo -->
        <a href="<?php home_url(); ?>"><?php the_custom_logo(); ?></a>
        <section id="head">
            <h1><?php bloginfo('name'); ?></h1>
            <i><?php bloginfo('description'); ?></i>
        </section>
        <nav>
            <?php wp_nav_menu('main-menu'); ?>
        </nav>
    </header>
    <main>