<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="single-product-description-container">
		<?php while ( have_posts() ) : the_post(); ?>

<!--<div class="single-product-description"</div>-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="single-price"><span><?php echo CFS()->get( 'price' ); ?></span></div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
				
			) );
		?>

	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
</div>
	
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
