<?php

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Echods 1.0
 */
function echods_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'echods' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'echods' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h6 class="widget-title sidebarSectionOne-title">',
        'after_title'   => '</h6><hr class="sidebarSectionOne-hr"/>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 1', 'echods' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'echods' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h6 class="widget-title sidebarSectionTwo-title">',
        'after_title'   => '</h6><hr class="sidebarSectionTwo-hr"/>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 2', 'echods' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'echods' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h6 class="widget-title sidebarSectionThree-title">',
        'after_title'   => '</h6><hr class="sidebarSectionThree-hr"/>',
    ) );
}
add_action( 'widgets_init', 'echods_widgets_init' );