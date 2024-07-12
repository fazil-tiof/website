<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fourjunctions
 */

?>

	<footer id="footer" class="footer py-4">
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'four_junctions' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'four_junctions' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'four_junctions' ), 'four_junctions', '<a href="https://fourjunctions.com/">fourjunctions</a>' );
				?>
		</div> -->
			<div class="container mx-auto px-4 flex items-center justify-between gap-4">
				<div class="flex item-center gap-4">
					<a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJteCI6IjIifQ%3D%3D%22%7D"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/twitter.svg" alt="twitter" /></a>
					<a href="https://www.facebook.com/login/"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/fb.svg" alt="fb" /></a>
					<a href="https://www.linkedin.com/login?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/linkedIn.svg" alt="linkedIn" /></a>
				</div>
                <div class="footer-content flex items-center gap-4">
                    <span class="uppercase text-sm font-medium">© 2024 Fourjunctions</span>
                    <a href="" class="uppercase text-sm font-medium">Privacy Policy</a>
                </div>
            </div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
