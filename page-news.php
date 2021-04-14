<?php get_header(); ?>
<div class="title">
    <p>NEWS</p>
</div>
<!-- body -->

<section class="news">
    <?php
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'paged' => $paged,
    );

    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <div class="content">
                <div class="r-flex">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          

                    <div class="container">
                        <div class="images">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="desc">
                            <div class="date"><?php echo get_the_date(); ?></div>
                            <div class="text"><?php echo the_content(); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
                </div>
            </div>
</section>
<!-- end of body -->
<?php get_footer(); ?>