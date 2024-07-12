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

	<main id="primary" class="site-main archive-work work">
		<section class="archive-section work-section flex flex-col gap-12">
			<div class="container mx-auto px-4 work-welcome">
				<h2 class="max-w-screen-md mx-auto text-center">Unleash the Power of Automation. Build Your Dream Workflow Now.</h2>
			</div>
			<?php get_template_part('includes/work', 'grid');?>
		</section>
	</main>

<?php
get_sidebar();
get_footer();
