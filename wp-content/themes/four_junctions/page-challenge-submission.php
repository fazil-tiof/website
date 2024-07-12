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

get_header();
?>

	<main id="primary" class="site-main page-challenge-submission">
		<section class="form-section flex flex-col gap-20">
			<?php
                $title = get_field('title');
                $sub_title = get_field('sub_title');
                $form_embed = get_field('form_embed');
            ?>
			<div class="container px-4 mx-auto flex flex-col items-center justify-center text-center gap-9">
				<h2><?php echo $title; ?></h2>
				<h3><?php echo $sub_title; ?></h3>
				<?php the_content(); ?>
			</div>
		</section>
	</main>

<?php
get_sidebar();
get_footer(); ?>
