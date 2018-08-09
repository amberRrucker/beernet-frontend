<?php function theme_customize_register( $wp_customize ) {
  $wp_customize->add_setting( 'site_color', array(
    'default'   => '',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Site Color', 'theme' ),
  ) ) );
}

add_action( 'customize_register', 'theme_customize_register' );


function theme_get_customizer_css() {
  ob_start();

  $site_color = get_theme_mod( 'site_color', '' );
  if ( ! empty( $site_color ) ) {
    ?>
    .btn {
      background-color: <?php echo $site_color; ?>;
    }
    
    a {
      color: <?php echo $site_color; ?>;
      border-bottom-color: <?php echo $site_color; ?>;
    }
    
    input,
    textarea {
      border-color: <?php echo $site_color; ?>;
    }
    <?php
  }

  $css = ob_get_clean();
  return $css;
}

// Modify our styles registration like so:

function theme_enqueue_styles() {
  wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
  $custom_css = theme_get_customizer_css();
  wp_add_inline_style( 'theme-styles', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//Change the Customizer color palette presets
add_action('customize_controls_print_footer_scripts', function () {
    ?>
  <script>
    jQuery(document).ready(function($){
      $('.wp-picker-container').iris({
        mode: 'hsl',
        controls: { 
          horiz: 'h', // square horizontal displays hue
          vert: 's', // square vertical displays saturdation
          strip: 'l' // slider displays lightness
        },
        palettes: ['#91472c', '#6d775f', '#f9fffb']
      })
    });
  </script>
  <?php
});

?>