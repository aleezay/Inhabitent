<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'find-us' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


<!--<header class="entry-header">
		<h1 class="entry-title">Find Us</h1>	</header><! .entry-header 

	<div class="entry-content">
		<p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683305088019!2d-123.14035698431123!3d49.26344827932921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!5e0!3m2!1sen!2sca!4v1502489174447" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h2>We take camping very seriously.</h2>
<p>&nbsp;</p>
<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
<p>&nbsp;</p>
<h2>Send us Email!</h2>
<p>&nbsp;</p>
<div role="form" class="wpcf7" id="wpcf7-f42-p7-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/Inhabitent/find-us/#wpcf7-f42-p7-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="42">
<input type="hidden" name="_wpcf7_version" value="4.8.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f42-p7-o1">
<input type="hidden" name="_wpcf7_container_post" value="7">
<input type="hidden" name="_wpcf7_nonce" value="630024d003">
</div>
<p><label>NAME*<br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label>EMAIL*<br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label>SUBJECT*<br>
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label>MESSAGE*<br>
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p><input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
			</div><! .entry-content 
</article>-->
	