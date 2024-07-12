<div class="container mx-auto px-4 grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6 people-grid </object>">
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="flex flex-col gap-4">
			<div class="flex flex-col gap-2">
				<figure>
					<img src="<?php echo get_field('display_picture'); ?>" alt="<?php the_title(); ?>" />
				</figure>
				<div class="flex flex-col gap-2">
					<div class="flex items-center justify-between gap-2">
						<span class="font-semibold"><?php the_title(); ?></span>
						<div class="flex items-center gap-2 socail-link">
							<?php if( get_field('linked_in') ): ?>
								<object>
									<a href="<?php echo get_field('linked_in') ?>" class="shrink-0 linked-in">
										<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/people-linkedin.svg" alt="people-linkedin" />
									</a>
								</object>
							<?php endif; ?>
							<?php if( get_field('email_id') ): ?>
								<object>
									<a href="mailto:<?php echo get_field('email_id') ?>" class="shrink-0 email-id">
										<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/people-mail.svg" alt="people-mail" />
									</a>
								</object>
							<?php endif; ?>
						</div>
					</div>
					<span class="text-secondary text-left font-medium"><?php echo get_field('job_title') ?></span>
				</div>
			</div>
		</a>
	<?php endwhile; else: endif; ?>
</div>