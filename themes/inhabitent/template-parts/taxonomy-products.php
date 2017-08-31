<?php
/**
 * Template part for displaying posts.
 *
 * @package Inhabitent_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="#" class="tax-link">
			<?php if ( has_post_thumbnail() ) : ?>
			<a href=<?php echo get_post_permalink() ?>>
				<?php the_post_thumbnail( 'large' ); ?>
				
			<?php endif; ?>
		</a>
	</header><!-- .entry-header -->

	<div class="price">
		<span><?php the_title(); ?></span> 
		<span>................</span>
		<span><?php echo CFS()->get( 'price' ); ?></span>

		
	</div><!-- .entry-meta -->
</article><!-- #post-## -->
