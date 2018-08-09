<?php // add new section
$wp_customize->add_section( 'bwpy_theme_colors', array(
	'title' => __( 'Theme Colors', 'bwpy' ),
	'priority' => 100,
) );

// add color picker setting
$wp_customize->add_setting( 'site_color', array(
	'default' => '#ff0000'
) );

// add color picker control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_color', array(
	'label' => 'Main Site Color',
	'section' => 'bwpy_theme_colors',
	'settings' => 'site_color',
) ) );


function bwpy_body_class_colors( $classes ) {
		
	if ( get_theme_mod( 'color_option' ) == 'beer_net' ) :		
		$classes[] = 'color-option-one';		
	elseif ( get_theme_mod( 'color_option' ) == 'wine_net' ) :		
		$classes[] = 'color-option-two';		
  elseif ( get_theme_mod( 'color_option' ) == 'liquor_net' ) :		
		$classes[] = 'color-option-three';		
	endif;
		
	return $classes;
}
add_filter( 'body_class', 'bwpy_body_class_colors');

?>