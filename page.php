<?php get_header(); ?>

<header>
	<div class="section-header">

	</div>
</header>
<?php if ( have_posts() ): global $post; ?>
<div id="headline" class="headline has-text-centered <?php echo ( has_post_thumbnail() ) ? 'has-bg-image' : ''; ?>" style="background-image: url('<?php echo the_post_thumbnail_url( 'large' ); ?>');">
	<div class="content">
		<h1><?php the_title(); ?><h1>
	</div>
</div>
<?php endif; ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>

<footer>
	<div class="section-body">
		<div class="wrapper">
			<div class="columns is-fullwidth-on-mobile">
				<div class="column is-half has-no-padding is-fullwidth-on-mobile">
					<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bpas-logo-horizontal-white.png" /></h2>
					<p><?php echo get_bloginfo( 'description' ); ?></p>
				</div>
				<div class="column is-fullwidth-on-mobile">
					<?php wp_nav_menu( array(
						'theme_location' 	=> 'primary',
						'menu_class'		=> 'list',
					) ); ?>
				</div>
				<div class="column is-fullwidth-on-mobile">
					<ul class="list">
						<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
						<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a></li>
					</ul>
				</div>
			</div>
			<p>&copy; <?php echo get_bloginfo(); ?> <?php echo date('Y'); ?>.</p>
		</div>
	</div>
</footer>

<?php get_footer(); ?>
