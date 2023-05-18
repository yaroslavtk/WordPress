<?php
global $post;
$blog_posts = get_posts(array(
    'post_type' => 'post'
)); ?>

<?php
//medoslav_debug($blog_posts);
?>

<?php if ($blog_posts) : ?>

    <section data-aos="fade-up" class="blog">
        <div class="container">

            <div class="title-wrap">
                <h2 class="cream-title section-title">Блог</h2>
            </div>
            <div class="blog-wrapper">
                <ul class="blog-list responsive">
                    <?php $i=0; foreach ($blog_posts as $post) : setup_postdata($post); ?>

                        <li data-aos="fade-up" class="blog-item">
                            <div class="blog-item-image"><img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="blog-item-ima"></div>
                            <h3 class="blog-item-title"><?php the_title(); ?></h3>
                            <div class="blog-item-descr"><?php the_excerpt(); ?>
                                <a href="<?php the_permalink() ?>" class="blog-item-link">Читати</a>
                            </div>
                        </li>

                    <?php $i++; endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

<?php else : ?>
    <p><?php echo __('Немає записів', 'medoslav') ?></p>
<?php endif; wp_reset_postdata(); ?>