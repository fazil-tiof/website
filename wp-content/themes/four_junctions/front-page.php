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

get_header('home');
?>
		<main class="col-span-1 lg:col-span-9">
			<div class="grid grid-cols-1 lg:grid-cols-11 gap-6 pb-10 lg:pb-0 pt-0 lg:pt-10">
				<div class="col-span-1 lg:col-span-6 viewport-height welcome-section bg-black">
					<?php
						$hero = get_field('welcome_section');
					?>
					<div class="flex flex-col justify-end h-full text-white p-6 gap-16 challenge-us-block" style="background-image: url('<?php echo bloginfo('template_directory'); ?>/assets/images/png/top-dotted-ball.png'), linear-gradient(180deg, #000 0%, #000 42.32%, #00195A 100%);">
						<div class="flex flex-col gap-3">
							<h1><?php echo ( $hero['title'] ); ?></h1>
							<span class="font-medium"><?php echo ( $hero['caption'] ); ?></span>
						</div>
						<a href="<?php echo esc_url( home_url( '/challenge-submission' ) ); ?>" class="flex items-center self-start py-6 px-12 gap-2">
							<img class="menu-open" src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/trigger.svg" alt="trigger" />
							<span>
								Challenge Us!
							</span>
						</a>
					</div>
				</div>
				<!-- <?php if( have_rows('key_moments') ): ?>
					<div class="col-span-1 lg:col-span-5 viewport-height key-moments">
						<div class="flex flex-col gap-6">
							<?php while( have_rows('key_moments') ): the_row(); 
								$image = get_sub_field('image');
								$title = get_sub_field('title');
							?>
								<figure class="relative">
									<img class="object-cover h-full w-full" src="<?php echo $image ?>" alt="<?php echo $name ?>" />
									<figcaption class="text-white flex items-end p-4 md:p-6">
										<h4><?php echo $title ?></h4>
									</figcaption>
								</figure>
							<?php endwhile; ?>
						</div>
					</div> -->
				<?php endif; ?>
				<div class="col-span-1 lg:col-span-5 viewport-height key-moments">
					<div class="flex flex-col gap-6">
						<?php 
							$args = array(
								'posts_per_page'    => 1,
								'post_type'     => 'works',
								'meta_key'      => 'selected_value',
								'meta_value'    => 'yes'
							);
							$the_query = new WP_Query( $args );
						?>
						<?php if( $the_query->have_posts() ): ?>
							<div class="flex flex-col gap-14 featured-post">
							<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="flex flex-col gap-4">
									<figure class="relative">
										<img class="object-cover h-full w-full" src="<?php echo get_field('feature_image'); ?>" alt="<?php the_title(); ?>" />
										<figcaption class="text-white flex items-end p-4 md:p-6">
											<h4><?php the_title(); ?></h4>
										</figcaption>
									</figure>
								</a>
							<?php endwhile; ?>
							</div>
						<?php endif;  wp_reset_postdata(); wp_reset_query();?>
						<?php 
							$args = array(
								'posts_per_page'    => 1,
								'post_type'     => 'platforms',
								'meta_key'      => 'selected_value',
								'meta_value'    => 'yes'
							);
							$the_query = new WP_Query( $args );
						?>
						<?php if( $the_query->have_posts() ): ?>
							<div class="flex flex-col gap-8 featured-post">
								<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<a href="<?php the_permalink(); ?>">
										<figure class="relative">
											<img class="object-cover h-full w-full" src="<?php echo get_field('feature_image'); ?>" alt="<?php the_title(); ?>" />
											<figcaption class="text-white flex items-end p-4 md:p-6">
												<h4><?php the_title(); ?></h4>
											</figcaption>
										</figure>
									</a>
								<?php endwhile; ?>
							</div>
						<?php endif;  wp_reset_postdata(); wp_reset_query();?>
					</div>
				</div>
			</div>
		</main>
	</div>
<?php
get_sidebar();
get_footer('home'); ?>
