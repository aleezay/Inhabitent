	<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

  get_header(); ?>
  <main id="main" class="site-main" role="main">
			
<div class="front-page-container">
  <div class="front-page-hero"></div>
      <div class="hero-banner-logo">
 			<img src="<?php echo get_template_directory_uri(); ?>./images/logos/inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Co.">
  </div>
     </div>


<div class = "most-recent-journals" >
    <?php
       $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date' );
       $journal_posts = get_posts( $args ); // returns an array of post
      ?>
       <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
      
       <div class="journal-recent-block-item">
          <div class="journal-thumbnail-wrapper">
      
          <?php if (has_post_thumbnail ()):?>
             <?php the_post_thumbnail ('medium'); ?></a>
             <?php endif; ?>
             </div>
      
               <div class= "entry-meta">
                 <?php inhabitent_posted_on(); ?> /<?php comments_number( '0 Comments', '1 Comment', '% Comments'); ?>
                 <?php inhabitent_posted_by();?> 
          </div>
          <a href=<? get_post_permalink()?>"><?php the_title(); ?></a>
          </div>
       <?php endforeach; wp_reset_postdata(); ?>
       </div>
</main>
       <?php get_footer(); ?>
 
