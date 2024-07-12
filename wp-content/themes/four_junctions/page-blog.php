<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fourjunctions
 */

get_header();
?>

	<main id="primary" class="site-main page-blog">
		<section class="blog-section flex flex-col gap-20">
			<?php get_template_part('includes/blog', 'grid');?>
		</section>
	</main>

<?php
get_sidebar();
get_footer(); ?>
