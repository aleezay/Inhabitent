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

 <!--generating shop stuff on front page-->
 
<div class="front-section-container">
  <?php
    $terms = get_terms ('product-type');
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : //var_dump($terms); ?>
  <h2>Shop Stuff</h2>
  <div class="front-shop-terms-container">
      <div class="front-shop-terms">
        <?php foreach ( $terms as $term ) : ?>
        <div class="front-grey-wrapper">
              <div class="front-shop-term">
                <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg'   ?>">
                <p class="front-shop-term-description"><?php echo $term->description; ?></p>
                <div class="green-button">
                <a href="<?php echo get_term_link( $term ); ?> "><?php echo $term->name; ?> Stuff</a>
                </div>
              </div>
              </div>
          <?php endforeach; ?>
      </div>
</div>
<!--var dump-->
<!--array(4) { [0]=> object(WP_Term)#786 (10) 
{ ["term_id"]=> int(16) ["name"]=> string(2) "Do" ["slug"]=> string(2) "do" ["term_group"]=> int(0) ["term_taxonomy_id"]=> int(16) ["taxonomy"]=> string(12) "product-type" ["description"]=> string(84) "Get back to nature with all the tools and toys you need to enjoy the great outdoors." ["parent"]=> int(0) ["count"]=> int(4) ["filter"]=> string(3) "raw" } -->

    <?php endif; ?>

</div>

<div class="front-section-container">
  <h2>Inhabitent Journal</h2>
   <div class="front-journals-container">
    <?php
       $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date' );
       $journal_posts = get_posts( $args ); // returns an array of post
      ?>
     
      <div class="front-journals">
       <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
      
       <div class="journal-recent-block-item">
         <div class="front-grey-wrapper">
          <div class="journal-thumbnail-wrapper">
      
          <?php if (has_post_thumbnail ()):?>
             <?php the_post_thumbnail ('medium'); ?></a>
             <?php endif; ?>
             </div>
      
               <div class="entry-meta">
                 <?php inhabitent_posted_on(); ?> /<?php comments_number( '0 Comments', '1 Comment', '% Comments'); ?>
                 <?php inhabitent_posted_by();?> 
          </div>
          <div class="front-journal-text">
          <a href="<?php get_post_permalink() ?>"><?php the_title(); ?></a>
          </div>
          </div>
          </div>
       <?php endforeach; wp_reset_postdata(); ?>
       </div>
        </div>

<!--Adventures-->
<section class="front-section-container">

  <h2>Latest Adventures</h2>
 <div class="adventures-left-right">
 <!--<div class="left">-->
     <ul class="adventures">
   <li class="adventures-container-canoe">
<h3 class="adventures-text"> Getting Back to Nature in a Canoe</h3>
<a class="white-read-button">Read More</a>
</li>
<!--</ul>-->
<!--</div>left-->
<!--<div class="right">-->
   <!--<ul class="adventures">-->
   <li class="adventures-container-beach">
     <h3 class="adventures-text"> A Night with Friends at the Beach</h3>
<a class="white-read-button">Read More</a>
</li>

<div class="small-squares">
<li class="adventures-container-mountain">
     <h3 class="adventures-text"> Taking in the View at Big Mountain</h3>
<a class="white-read-button">Read More</a>
</li>
<li class="adventures-container-sky">
     <h3 class="adventures-text"> Star-Gazing at the Night Sky</h3>
<a class="white-read-button">Read More</a>
</li>
</div>
</ul>

<!--</div>right-->
<div class="green-button-container">
<a class="green-button">More Adventures</a>
</div>
</div><!--adventures-left-right-->
	</section>  <!--front-section-container-->

</main>
</div>
       <?php get_footer(); ?>
       
 
