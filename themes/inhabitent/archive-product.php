<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!--Get posts on shop page-->
	<?php query_posts( array( 'post_type' =>'product', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
		<?php
			$args = array( 'post_type' => 'product-type');
			$product_types = get_terms( $args ); // returns an array of posts
		?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

<!--get the product types (do, eat, sleep, wear)-->
	<div class="product-types-container">
				<?php foreach ( $product_types as $product_type ) : setup_postdata( $product_type ); ?>
					<!--<div class="">-->
						<a class="text-uppercase" href="<?php echo home_url() ?>
						/product-type/<?php echo $product_type->slug ?>">
						<?php echo $product_type->name ?></a>
					<!--</div>-->
				<?php endforeach; wp_reset_postdata(); ?>
				</div>

			</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>-->

		<?php endif; ?> 



		</main><!-- #main -->
	</div><!-- #primary -->

<!--<?php get_sidebar(); ?>-->
<?php get_footer(); ?>
