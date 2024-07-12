<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fourjunctions
 */

?>
<div class="container">
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: endif; ?>
</div>
