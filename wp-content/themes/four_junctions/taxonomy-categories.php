<?php
/**
 * The template for displaying taxonomy pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fourjunctions
 */

get_header();
?>

	<main id="primary" class="site-main taxonomy-categories">
		<section class="taxonomy-section">
            <?php get_template_part('includes/category', 'grid');?>
		</section>
	</main>

<?php
get_sidebar();
get_footer();
