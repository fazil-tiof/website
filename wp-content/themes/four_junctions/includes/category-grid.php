<div class="container mx-auto px-4">
	<div class="grid grid-cols-1 md:grid-cols-9 w-full work-grid">
        <aside class="col-span-1 md:col-span-2 aside">
            <ul class="nav nav-tabs flex flex-col gap-6">
                <?php
                    $args = array(
                            'taxonomy' => 'categories',
                            'orderby' => 'name',
                            'order'   => 'ASC'
                    );

                    $cats = get_categories($args);

                    foreach($cats as $cat) {
                ?>
                    <li>
                        <a class="font-medium uppercase" href="<?php echo get_category_link( $cat->term_id ) ?>">
                        	<?php echo $cat->name; ?>
                        </a>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </aside>
        <div class="col-span-1 md:col-span-7 flex flex-col gap-14 category-content">
            <?php if(have_posts()): while(have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="flex flex-col gap-4 grid grid-cols-1 md:grid-cols-2">
					<figure>
						<img src="<?php echo get_field('feature_image'); ?>" alt="<?php the_title(); ?>" />
					</figure>
					<div class="flex flex-col justify-center gap-2">
						<h5 class="font-semibold"><?php the_title(); ?></h5>
						<span class="text-secondary text-left font-medium"><?php echo get_field('excerpt') ?></span>
					</div>
                </a>
            <?php endwhile; else: endif; ?>
        </div>
    </div>
</div>