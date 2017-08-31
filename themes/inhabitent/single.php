<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
	<div class="articles-container-single">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
<div class="social-media-buttons">
   <button type="button" class="social-button"><i class="fa fa-facebook"></i>  Like</button>
   <button type="button" class="social-button"><i class="fa fa-twitter"></i>  Tweet</button>
   <button type="button" class="social-button"><i class="fa fa-pinterest"></i>  Pin</button>
</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
</div><!--articles-container-single-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
