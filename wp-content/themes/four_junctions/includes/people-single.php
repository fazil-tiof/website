<?php if(have_posts()): while(have_posts()) : the_post(); ?>
	<div class="container mx-auto px-4 team-single-container">
		<div class="flex items-center justify-between">
			<time>
				<?php echo get_the_date('l jS F, Y'); ?>
			</time>
			<?php
				$fname = get_the_author_meta('first_name');
				$lname = get_the_author_meta('last_name');
			?>
			<span><?php echo $fname; ?> <?php echo $lname; ?></span>
		</div>
		<div class="flex flex-col gap-2 tag-get_the_category">
			<div class="category">
				<?php
					$categories = get_the_category();
					foreach($categories as $cat): ?>
						<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>">
							<span><?php echo $cat->name; ?></span>
						</a>
				<?php endforeach; ?>
			</div>
			<div class="tag">
				<?php
					$tags = get_the_tags();
					foreach($tags as $tag): ?>
						<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
							<span><?php echo $tag->name; ?></span>
						</a>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="flex flex-col">
			<figure>
				<img src="<?php echo get_field('display_picture'); ?>" alt="<?php the_title(); ?>" />
			</figure>
			<div class="flex flex-col gap-2">
				<div class="flex items-center justify-between gap-2">
					<span class="font-semibold"><?php the_title(); ?></span>
					<div class="flex items-center gap-2 socail-link">
						<?php if( get_field('linked_in') ): ?>
							<a href="<?php echo get_field('linked_in') ?>" class="shrink-0 linked-in">
								<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/people-linkedin.svg" alt="people-linkedin" />
							</a>
						<?php endif; ?>
						<?php if( get_field('email_id') ): ?>
							<a href="mailto:<?php echo get_field('email_id') ?>" class="shrink-0 email-id">
							<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/people-mail.svg" alt="people-mail" />
							</a>
						<?php endif; ?>
					</div>
				</div>
				<span class="text-secondary text-left font-medium"><?php echo get_field('job_title') ?></span>
			</div>
		</div>
	</div>
<?php endwhile; else: endif; ?>