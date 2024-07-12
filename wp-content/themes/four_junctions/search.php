<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package fourjunctions
 */

get_header();
?>

	<main id="primary" class="site-main search-page">
		<section class="archive-section">
			<h2><?php echo single_cat_title(); ?></h2>
			<?php get_template_part('includes/blog', 'grid');?>
		</section>
	</main>

<?php
get_sidebar();
get_footer();
