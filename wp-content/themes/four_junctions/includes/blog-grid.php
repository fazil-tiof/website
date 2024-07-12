<div class="flex flex-col gap-12 sticky-post">
	<?php 
	$args = array(
		'posts_per_page' => 2,
		'post__in'  => get_option( 'sticky_posts' ),
		'ignore_sticky_posts' => 1
	);
	$my_query = new WP_Query( $args );
	$do_not_duplicate = array();
	while ( $my_query->have_posts() ) : $my_query->the_post();
	$do_not_duplicate[] = $post->ID; ?>
	<a href="<?php the_permalink(); ?>" class="grid grid-cols-1 lg:grid-cols-11 gap-6 sm:gap-8 container lg:max-w-full mx-auto px-4 lg:px-0 text-black grid-blog-alternative">
		<div class="col-span-1 lg:col-span-6 blog-details">
			<div class="flex flex-col gap-2 h-full justify-center blog-details-content">
				<h3>
					<?php the_title(); ?>
				</h3>
				<h6 class="text-secondary font-medium get_the_excerpt">
					<?php echo strip_tags(get_the_excerpt()); ?>
				</h6>
			</div>
		</div>
		<?php if (has_post_thumbnail( ) ):?> 
			<figure class="col-span-1 lg:col-span-5">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="small-<?php the_title(); ?>" />
			</figure>
		<?php endif; ?>
	</a>
	<?php endwhile; wp_reset_postdata();?>
</div>
<div class="container mx-auto px-4 flex flex-col gap-16 blog-grid">
  	<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 non-sticky">
		<?php 
			$args2 = array(
				'post__not_in'=>get_option('sticky_posts')
			);
			$non_sticky_query = new WP_Query( $args2 );
			$do_not_duplicate = array();
			while ( $non_sticky_query->have_posts() ) : $non_sticky_query->the_post();
			$do_not_duplicate[] = $post->ID; ?>
			<a href="<?php the_permalink(); ?>" class="flex flex-col gap-4">
				<?php if (has_post_thumbnail( ) ):?> 
					<figure class="feature-image">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="small-<?php the_title(); ?>" />
					</figure>
				<?php endif; ?>
				<div class="flex flex-col gap-2">
					<h5>
						<?php the_title(); ?>
					</h5>
					<span>
						<?php echo strip_tags(get_the_excerpt()); ?>
					</span>
				</div>
			</a>
		<?php endwhile; wp_reset_postdata(); ?>
  	</div>
</div>

