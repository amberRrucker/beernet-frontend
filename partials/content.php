<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Echods
 * @since Echods 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<div class="row">
		  <div class="col-md-12">

          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		    </div>
		  </div>
	</header><!-- .entry-header -->
	
	<div class="row">
	  <div class="col-md-3 post-imageWrapper">
      <div class="post-image"><?php the_post_thumbnail(); ?></div>
	  </div>
	  <div class="col-md-9">
      <?php the_excerpt(); ?>
      <div class="row">
        <div class="col-md-3">
          <i class="fas fa-calendar-alt post-date"></i><?php echo get_the_date('F j, Y'); ?>
        </div>
      </div>
	  </div>
  </div>

	<footer class="entry-footer">
		<?php echods_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'echods' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
