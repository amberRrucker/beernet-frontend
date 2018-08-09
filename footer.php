<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Echods
 * @since Echods 1.0
 */
?>

	</div><!-- .container-fluid -->
	
	<div class="footer-wrapper">
  	<div class="footer-container container">

    	<footer id="colophon" class="site-footer" role="contentinfo">
    		<?php if ( has_nav_menu( 'footer-one' ) ) : ?>
    			<nav class="footer-one footer-column" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'echods' ); ?>">
    				<?php
    					wp_nav_menu( array(
    						'theme_location' => 'footer-one',
    						'menu_class'     => 'footer-columnList footer-one',
    					 ) );
    				?>
    			</nav><!-- .main-navigation -->
    		<?php endif; ?>
    
    		<?php if ( has_nav_menu( 'footer-two' ) ) : ?>
    			<nav class="footer-two footer-column" role="navigation" aria-label="<?php esc_attr_e( 'Footer Secondary Menu', 'echods' ); ?>">
    				<?php
    					wp_nav_menu( array(
    						'theme_location' => 'footer-two',
    						'menu_class'     => 'footer-columnList footer-two',
    					 ) );
    				?>    			
    		  </nav><!-- .social-navigation -->
    		<?php endif; ?>
    		
    		<?php if ( has_nav_menu( 'footer-three' ) ) : ?>
    			<nav class="footer-three footer-column" role="navigation" aria-label="<?php esc_attr_e( 'Footer Account Menu', 'echods' ); ?>">
    				<?php
    					wp_nav_menu( array(
    						'theme_location' => 'footer-three',
    						'menu_class'     => 'footer-columnList footer-three',
    					 ) );
    				?>    			
    		  </nav><!-- .social-navigation -->
    		<?php endif; ?>

    	</footer><!-- .site-footer -->
  	</div>
	</div>

<?php wp_footer(); ?>
</body>
</html>