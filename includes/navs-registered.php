<?php

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'echo' ),
    'footer-one'  => __( 'Footer Primary Menu', 'echo' ),
    'footer-two'  => __( 'Footer Secondary Menu', 'echo' ),
    'footer-three'  => __( 'Footer Account Menu', 'echo' ),
) );