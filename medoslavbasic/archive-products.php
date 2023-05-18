<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medoslavbasic
 */

get_header();
?>

<main id="primary" class="site-main">

	<div>

		Template for custom Post Type Products!

		<header class="page-header">
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->

		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$products = new WP_Query(array('post_type' => 'products', 'posts_per_page' => 1, 'paged' => $paged));

		if ($products->have_posts()):
			while ($products->have_posts()):
				$products->the_post(); ?>

				<?php get_template_part('partials/content', 'products'); ?>

			<?php endwhile;

			?>
			<?php

			medoslavbasic_paginate($products);

			?>

			<?php
		else: ?>

			<?php get_template_part('partials/content', 'none'); ?>

		<?php endif; ?>

	</div>

</main><!-- #main -->

<?php
get_footer();