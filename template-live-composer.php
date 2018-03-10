<?php
	/**
	 * Template Name: Live Composer
	 *
	 * @since 1.0.0
	 *
	 * @author Marcus Battle
	 *
	 * @package BB Blueprint
	 */

	get_header();

	// The Loop.
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}
	}

	get_footer();
