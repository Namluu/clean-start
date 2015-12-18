<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <!--<link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />-->
        <title>
            <?php
                if( ! is_home() ):
                  wp_title( '|', true, 'right' );
                endif;
                bloginfo( 'name' );
                ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header>
        <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
    </header>