<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fourjunctions
 */

get_header();
?>

	<main id="primary" class="site-main archive-page">
		<section class="archive-section person">
			<?php get_template_part('includes/people', 'single');?>
		</section>
	</main>

<?php
get_sidebar();
get_footer();
