<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<section class="footer-wrapper">
						<div class="footer-contact container">
							<h3 class="footer-title">Contact Info</h3>
							<p class="footer-content">
								<a href="mailto:info@inhabitent.com"><span class="dashicons dashicons-email"> </span>info@inhabitent.com</a>
							</p>
							<p>
								<span class="dashicons dashicons-phone"> </span>
								778-456-7891
							</p>
							<p>
								<span class="dashicons dashicons-facebook">     </span>
								<span class="dashicons dashicons-twitter">     </span>
								<span class="dashicons dashicons-googleplus"></span>
							</p>
						</div>
						<div class="footer-business-hours container">
							<h3 class="footer-title">Business Hours</h3>
							<p>
								Monday-Friday: 9am - 5pm
							</p>
							<p>
								Saturday: 10am - 4pm
							</p>
							<p>
								Sunday: Closed
							</p>
						</div>
					<div class="footer-inhabitent-image">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/inhabitent-logo-text.svg' ?>" alt="Inhabitent logo">
					</div>
				</section>
				<div class="site-info">
					<p>Copyright &copy 2016 Inhabitent</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->

		<?php wp_footer(); ?>
    <!-- <script src="/js/scripts.js"></script> -->
	</body>
</html>
