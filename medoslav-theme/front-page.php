<?php get_header() ?>
    
    <?php get_template_part('template-parts/topicons-nav'); ?>

    <!-- <?php
    $cats = get_categories(
        array(
            'taxonomy' => 'product_cat'

        )
    );
    medoslav_debug($cats);
    ?> -->

    <?php get_template_part('template-parts/free-shipping'); ?>

    <?php get_template_part('template-parts/wellcome-video'); ?>

    <?php get_template_part('template-parts/products/trending'); ?>

    <?php get_template_part('template-parts/products/cream-honey'); ?>

    <?php get_template_part('template-parts/fruits-facts'); ?>

    <?php get_template_part('template-parts/honey-facts'); ?>

    <?php get_template_part('template-parts/products/nuts'); ?>

    <?php get_template_part('template-parts/nuts-facts'); ?>

    <?php get_template_part('template-parts/products/gifts'); ?>

    <?php get_template_part('template-parts/promo'); ?>

    <?php get_template_part('template-parts/comparison'); ?>

    <?php get_template_part('template-parts/feedbacks'); ?>

    <?php get_template_part('template-parts/blog'); ?>

    <?php get_template_part('template-parts/order'); ?>

    <?php get_template_part('template-parts/gallery'); ?>

    <?php get_template_part('template-parts/faq'); ?>

    <?php get_template_part('template-parts/contact-form'); ?>

    <?php get_template_part('template-parts/contacts'); ?>

    <?php woocommerce_mini_cart(); ?>

    <?php get_footer(); ?>

</body>

</html>