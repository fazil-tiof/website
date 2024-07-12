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

	<main id="primary" class="site-main archive-people the_title">
		<section class="archive-section people-section flex flex-col gap-12">
			<div class="container mx-auto px-4 people-welcome">
				<h2 class="max-w-screen-md mx-auto text-center">Behind every great service there’s agreat team <u>Meet Ours</u>.</h2>
			</div>
			<?php get_template_part('includes/people', 'grid');?>
		</section>
	</main>

<?php
get_sidebar();
get_footer();
