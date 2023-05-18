<article <?php post_class('custom_car_class'); ?> id="post-<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>">
    My custom Template

    <?php
    //has_post_thumbnail()
    //the_post_thumbnail()
    //get_post_thumbnail()
    //get_post_thumbnail_id()
    //get_the_post_thumbnail()
    //set_post_thumbnail_size()

    if(has_post_thumbnail(get_the_ID())) {
        echo '<br>';
        echo 'contain image';
        echo '<br>';
        the_post_thumbnail('product-cover');
    } else {
        echo 'no image!';
    }

    ?>

    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
    <a href="<?php the_permalink(); ?>">Read More</a>
</article>