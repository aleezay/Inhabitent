	<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

  get_header(); ?>
  	<div id="primary" class="content-area">

  <main id="main" class="site-main" role="main">
			
<div class="front-page-container">
  <div class="front-page-hero">
    <div class="hero-banner-logo">
 			
    <img src="<?php echo get_template_directory_uri(); ?>./images/logos/inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Co.">
  </div>
  </div>
      </div>
 <!--generating shop stuff on front page     -->
 
<div class="most-recent-shop-stuff">
  <?php
    $terms = get_terms ('product-type');
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : //var_dump($terms); ?>
  
      <ul class="front-page-terms">
        <?php foreach ( $terms as $term ) : ?>
              <li class="front-page-term">
                <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg'   ?>">
                <p><?php echo $term->description; ?></p>
                <a href="<?php echo get_term_link( $term ); ?> "><?php echo $term->name; ?> Stuff</a>
              </li>
          <?php endforeach; ?>
      </ul>

<!--var dump-->
<!--array(4) { [0]=> object(WP_Term)#786 (10) 
{ ["term_id"]=> int(16) ["name"]=> string(2) "Do" ["slug"]=> string(2) "do" ["term_group"]=> int(0) ["term_taxonomy_id"]=> int(16) ["taxonomy"]=> string(12) "product-type" ["description"]=> string(84) "Get back to nature with all the tools and toys you need to enjoy the great outdoors." ["parent"]=> int(0) ["count"]=> int(4) ["filter"]=> string(3) "raw" } -->

    <?php endif; ?>

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
          <a href="<?php get_post_permalink() ?>"><?php the_title(); ?></a>
          </div>
       <?php endforeach; wp_reset_postdata(); ?>
       </div>
</main>
</div>
       <?php get_footer(); ?>
       
 
