<?php get_header(); ?>

<?php if ( have_posts() ): global $post; ?>
<div id="headline" class="headline has-text-centered <?php echo ( has_post_thumbnail() ) ? 'has-bg-image' : ''; ?>" style="background-image: url('<?php echo the_post_thumbnail_url( 'large' ); ?>');">
	<div class="content">
		<h1><?php the_title(); ?><h1>
	</div>
	<div class="overlay"></div>
</div>
<?php endif; ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
