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

	<main id="primary" class="site-main archive-platforms platforms">
		<section class="archive-section platforms-section flex flex-col gap-12">
			<div class="container mx-auto px-4 platforms-welcome">
				<h2 class="max-w-screen-md mx-auto text-center">Empower Your Vision: Explore Our Innovative Platform Today</h2>
			</div>
			<?php get_template_part('includes/platform', 'grid');?>
		</section>
	</main>

<?php
get_sidebar();
get_footer();
