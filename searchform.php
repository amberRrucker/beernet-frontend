<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Echo
 * @since Echo 1.0
 */
?>

<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="form-inline search">
	<div class="form-group search-group">
	    <input type="text" name="s" class="form-control input-lg search-input sidebar-searchInput" placeholder="Search Term" id="search" value="<?php the_search_query(); ?>" />
	</div>

    <button type="submit" class="btn search-btn"><i class="fas fa-search search-icon" style="font-style: normal;"></i></button>
</form>