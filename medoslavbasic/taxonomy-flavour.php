<?php 

get_header();

$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

//print_r($term);

echo $term ->name;

?>

<div>

	<?php if (have_posts()):
		while (have_posts()):
			the_post(); ?>

			<?php get_template_part('partials/content', 'flavour'); ?>

		<?php endwhile; else: ?>

		<?php get_template_part('partials/content', 'none'); ?>

	<?php endif; ?>

</div>

<?php
get_footer();
?>