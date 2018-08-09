<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Echods
 * @since Echods 1.0
 */

get_header(); ?>


<div class="container page-container">
  
    <div class="row">
        
        <div class="sidebar-wrapper">
          <?php get_sidebar(); ?>
        </div> 

        <main id="main" class="site-main col-md-8" role="main">
          
          
         <?php if ( is_home() && ! is_front_page() ) : ?>  
           <?php if (have_posts()) :
             while (have_posts()) :
                the_post(); ?>
                   <div class="post">
                    <div class="row title-row">
                		  <div class="col-md-12 title-columns">
                          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                		    </div>
                		  </div>
                	</header><!-- .entry-header -->
                	
                	<div class="row">
                  	  <div class="col-md-3 post-imageWrapper">
                        <div class="post-image"><?php the_post_thumbnail(); ?></div>
                  	  </div>
                  	  <div class="col-md-9 post-text">
                      <?php the_content(); ?>
                	  </div>
                  </div>
                </div>
            <?php endwhile; ?>
          <?php endif;?>
          
        <?php endif; ?>
          
          <?php if(!is_front_page() ) : ?>
            <?php if (have_posts()) :
               while (have_posts()) :
                  the_post(); ?>
                     <div class="post-internal">
                      <div class="row title-row">
                  		  <div class="col-md-12 title-columns">
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                  		    </div>
                  		  </div>
                  	</header><!-- .entry-header -->
                  	
                  	<div class="row">
                    	<?php if ( has_post_thumbnail() ) { ?>
                  	  <div class="col-md-3 post-imageWrapper">
                        <div class="post-image"><?php the_post_thumbnail(); ?></div>
                  	  </div>
                  	  <div class="col-md-9 post-text">
                  	  <?php } else { ?>
                  	  <div class="col-md-12 post-text">
                    	 <?php } ?>
                        <?php the_content(); ?>
                  	  </div>
                    </div>
                  </div>
               <?php endwhile;
            endif;?>

          
        <?php endif; ?>
        
        
          

              

          
        </main>

    </div>
<?php get_footer(); ?>
