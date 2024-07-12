<?php get_header();?>

	<main id="primary" class="site-main archive-page category-blog">
		<h2>category-blog</h2>
		<section class="category-section">
			<?php get_template_part('includes/blog', 'grid');?>
		</section>
	</main>

<?php

get_sidebar();
get_footer();
