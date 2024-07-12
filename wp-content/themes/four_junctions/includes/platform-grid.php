<div class="container mx-auto px-4 flex flex-col gap-14 platform-grid">
    <?php 
        $args = array(
            'posts_per_page'    => -1,
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
                    <figure>
                        <img src="<?php echo get_field('feature_image'); ?>" alt="<?php the_title(); ?>" class="w-full" />
                    </figure>
                </a>
            <?php endwhile; ?>
        </div>
    <?php endif;  wp_reset_postdata(); wp_reset_query();?>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="grid grid-cols-1 lg:grid-cols-9 lg:gap-8 platform non-featured-post">
            <figure class="col-span-1 md:col-span-5">
                <img src="<?php echo get_field('feature_image'); ?>" alt="<?php the_title(); ?>" />
            </figure>
            <?php
                $color = get_field('pick_color');
                switch($color['value']) {
                    case 'Red': ?>
                        <div class="col-span-1 md:col-span-4 flex flex-col gap-2 relative platform-details py-6 px-4 lg:p-8 red">
                    <?php break;
                    case 'green':?>
                        <div class="col-span-1 md:col-span-4 flex flex-col gap-2 relative platform-details py-6 px-4 lg:p-8 green">
                    <?php break;
                     case 'Blue':?>
                        <div class="col-span-1 md:col-span-4 flex flex-col gap-2 relative platform-details py-6 px-4 lg:p-8 blue">
                    <?php break;
                     case 'Orange':?>
                        <div class="col-span-1 md:col-span-4 flex flex-col gap-2 relative platform-details py-6 px-4 lg:p-8 orange">
                    <?php break;
                    default :?>
                        <div class="col-span-1 md:col-span-4 flex flex-col gap-2 relative platform-details py-6 px-4 lg:p-8 black">
                <?php }
            ?>
                <h4><?php the_title(); ?></h4>
                <span class="font-semibold"><?php echo get_field('excerpt'); ?></span>
            </div>
        </a>
	<?php endwhile; else: endif; ?>
</div>