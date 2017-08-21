<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */
?>
</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				 
				<div class="footer-box-container">
			
					<div class="footer-box-item">
						<div class="contact">
							<h3>contact info</h3>
							<p><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> 
							  <a href="info@inhabitent.com">info@inhabitent.com</a></p>
							<p><i class="fa fa-phone fa-fw" aria-hidden="true"></i> 
							  <a href="778-456-7891">778-456-7891</a></p>
							<p>
							  <span><i class="fa fa-facebook-square fa-fw" aria-hidden="true"></i></span>
							  <span><i class="fa fa-twitter-square fa-fw" aria-hidden="true"></i></span>
							  <span><i class="fa fa-google-plus-square fa-fw" aria-hidden="true"></i></span>
						  </p>
					  </div> <!--contact-->
					</div> <!--footer-box-item1-->

					<div class="footer-box-item">
						<div class="business-hours">
							<h3>business hours</h3>
					    	<p><span class="day-bold">Monday-Friday:</span> 9am to 5pm</p>
					    	<p><span class="day-bold">Saturday:</span> 10am to 2pm</p>
					    	<p><span class="day-bold">Sunday:</span> Closed</p>
						</div> <!--business hours--> 
					</div> <!--footer-box-item2-->

					<div class="footer-box-logo">
						<div class="footer-logo">
							<a href="#">
							<img src=<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-text-dark.svg alt="Inhabitent logo"/></a>
						</div> <!--footer logo-->
						</div> <!--footer-box-item3-->

				</div> <!--footer-box-container-->
						<div class="copyright-container">
							<div class="copyright">
							<p>copyright &copy; <?php echo date("Y");?> Inhabitent </p>
						</div>
			
						
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div>
				</div>

			</footer><!-- #colophon -->
		<!--</div> #page -->

		<?php wp_footer(); ?>

	</body>
</html>
