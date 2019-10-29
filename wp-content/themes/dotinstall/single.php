<?php get_header(); ?>
        <div id="main" class="container">
            <div class="next-stream">
                <span class="next-stream_date">次回の配信日は
                    <span id="js-next">2019年11月03日</span>です。
                </span>
            </div>
            <div id="posts">

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

                <div class="single-post">
                    <h2 class="single_title"><?php the_title(); ?></h2>
                    <div class="post-header">
                        <div class="single-image"><?php the_post_thumbnail(array(0, 0)); ?></div>
                        <div class="post-meta">
                            <?php echo get_the_date(); ?> 【<?php the_category(', '); ?>】
                        </div>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </div><!-- /post -->


                <?php
                    endwhile;
                else:
                ?>

                <p>記事はありません！</p>

                <?php
                endif;
                ?>

            </div><!-- /posts -->
            <div class="navigation">
                <div class="prev"><?php previous_post_link(); ?></div>
                <div class="next"><?php next_post_link(); ?></div>
            </div>
        </div><!-- /main -->
<?php get_footer(); ?>
