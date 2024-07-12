<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fourjunctions
 */

get_header();
?>
	<main id="primary" class="site-main single-page category-blog">
		<section class="category-section">
			<?php get_template_part('includes/blog', 'single');?>
		</section>
	</main>
<?php
get_sidebar();
get_footer();
