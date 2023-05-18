<?php
/**
 * Template name: Homepage Template
 */

echo "test";

get_header();

?>

<div class="products"></div>
<?php
$args = array(
    'post_type' => 'products',
    'post_per_page' => 1,
    'paged' => $paged,
    /*'tax_query' => array(
        array(
            'taxonomy' => 'flavour',
            'field' => 'slug',
            'terms' => 'Акацієвий',
        ),
    ),*/
);
$paged = (get_query_var('page')) ? get_query_var('page') : 1;
$honey= new WP_Query($args);
?>

<?php if ($honey->have_posts()):
    while ($honey->have_posts()):
        $honey->the_post(); ?>

        <?php get_template_part('partials/content', 'products'); ?>

    <?php endwhile; medoslavbasic_paginate($honey); else: ?>

    <?php get_template_part('partials/content', 'none'); ?>

<?php endif; 

wp_reset_postdata();
 
?>

<hr>

<?php
unset($args);
$args = array(
    'post_type' => 'post',
    'post_per_page' => -1,

);
$blogposts = new WP_Query($args);
?>

<?php if ($blogposts->have_posts()):
    while ($blogposts->have_posts()):
        $blogposts->the_post(); ?>

        <?php get_template_part('partials/content'); ?>

    <?php endwhile; else: ?>

    <?php get_template_part('partials/content', 'none'); ?>

<?php endif; 

wp_reset_postdata();
 
?>

</div>

<?php

echo '<br>';

echo "custom content";

echo '<br>';

get_footer();