<?php
    /*
        Template Name: About
    */
?>
    <?php include 'header.php'; ?>

    <main class="main-about the_content">
        <section class="hero-about">
            <?php
                $hero = get_field('hero_section');
            ?>
            <div class="grid grid-cols-1 lg:grid-cols-11 gap-6 sm:gap-8 grid-about-hero container lg:max-w-full mx-auto px-4 lg:px-0">
                <div class="col-span-1 lg:col-span-6 flex flex-col justify-center pl-0 lg:pl-14">
                    <h2><?php echo ( $hero['title'] ); ?></h2>
                    <h2><?php echo ( $hero['sub_title'] ); ?></h2>
                </div>
                <figure class="col-span-1 lg:col-span-5">
                    <img src="<?php echo ( $hero['hero_image'] ); ?>" alt="<?php echo ( $hero['title'] ); ?>" class="max-w-full" />
                </figure>
            </div>
        </section>
        <?php the_content(); ?>
        <?php if( have_rows('timeline') ): ?>
            <section class="timeline-section pt-16">
                <div class="container mx-auto px-4 flex items-center justify-between gap-4">
                    <div class="flex flex-col gap-16 py-10 sm:py-16 grid-about-timeline relative">
                        <?php while( have_rows('timeline') ): the_row(); 
                            $year = get_sub_field('year');
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');
                            $image = get_sub_field('image');
                        ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 timeline">
                                <div class="flex flex-col gap-4 year">
                                    <h5 class="relative"><?php echo $year ?></h5>
                                    <figure>
                                        <img src="<?php echo $image ?>" alt="<?php echo $title ?>" />
                                    </figure>
                                </div>
                                <div class="flex flex-col justify-center gap-2 timeline-details">
                                    <span class="font-bold"><?php echo $title ?></span>
                                    <p><?php echo $description ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>               
        <?php endif; ?>
    </main>
    
    <?php include 'footer.php'; ?>