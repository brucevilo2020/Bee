<?php get_header(); ?>
<section class="blog_article">
    <div class="container">
        <div class="r-flex">
            <div class="left_post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_photo2.jpg" alt="slide 3" srcset=""> -->
                        <?php the_post_thumbnail(); ?>
                        <div class="desc">
                            <h3><?php echo get_the_date('d.m.Y'); ?></h3>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php else : endif; ?>
            </div>
            <div class="center"></div>
            <div class="right_post">
                <div class="header">
                    Latest Post
                </div>
                <div class="flex">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_photo2.jpg" alt="photo1">
                    </div>
                    <div class="r-title">劇三ミ図滋すむク郵糖サト転旧モアリヌ見棋閣っ半教にレろ聞発め景問フ舎社レエハノ教方78映へべぎ移判べ延列びやイ。</div>
                </div>
                <div class="flex">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_photo2.jpg" alt="photo1">
                    </div>
                    <div class="r-title">劇三ミ図滋すむク郵糖サト転旧モアリヌ見棋閣っ半教にレろ聞発め景問フ舎社レエハノ教方78映へべぎ移判べ延列びやイ。</div>
                </div>
                <div class="flex">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_photo2.jpg" alt="photo1">
                    </div>
                    <div class="r-title">劇三ミ図滋すむク郵糖サト転旧モアリヌ見棋閣っ半教にレろ聞発め景問フ舎社レエハノ教方78映へべぎ移判べ延列びやイ。</div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-8f29bef8-5221-495d-8b3d-5ce693d2a4c3"></div>
</section>
<?php get_footer(); ?>