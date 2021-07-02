<?php get_header(); ?>
<div class="title">
    <img src="<?php echo get_template_directory_uri(); ?>/shared/img/blog_header.png" alt="">
</div>
<!-- body -->

<section class="blog">

    <div class="contents">
        <?php
        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 5,
            'paged' => $paged,
        );

        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="r-flex">
                    <div class="date"><?php echo get_the_date('m.d.Y'); ?></div>
                    <div class="desc"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></div>
                    <div class="readmore"><a href="<?php echo get_permalink(); ?>">Read more</a></div>
                </div>
                <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</section>
<?php get_footer(); ?>