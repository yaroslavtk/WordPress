<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medoslavbasic
 */

get_header();
?>

<main id="primary" class="site-main">

</main><!-- #main -->

<div>

	<?php if (have_posts()):
		while (have_posts()):
			the_post(); ?>

			<?php get_template_part('partials/content'); ?>

		<?php endwhile;

		?>
		<?php
		//posts_nav_link(' . ', esc_html__('Prev', 'medoslavbasic'), esc_html__('Next', 'medoslavbasic'));
		/*the_posts_pagination(array(
		'prev_text' => esc_html__('Prev', 'medoslavbasic'),
		'next_text' => esc_html__('Next', 'medoslavbasic'),
		));*/
		echo paginate_links(); ?>
		<?php
	else: ?>

		<?php get_template_part('partials/content', 'none'); ?>

	<?php endif; ?>

</div>

<?php
get_sidebar('honey');
get_footer();