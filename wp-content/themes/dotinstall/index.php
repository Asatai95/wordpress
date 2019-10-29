<?php get_header(); ?>
        <div id="main" class="container main">
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

                <div class="post">
                    <div class="post-content">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(0, 0)); ?></a>
                        <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100"></a>
                        <?php endif; ?>
                    </div>
                    <div class="post-header">
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <span>
                            記事投稿日時: <?php the_date(); ?>
                        </span>
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

        </div><!-- /main -->
                <div class="navigation container footer_nav">
                    <div class="prev"><?php previous_posts_link('&lt; PREVIOUS'); ?></div>
                    <div class="next"><?php next_posts_link('NEXT &gt;'); ?></div>
                </div>
	<div class="tips">
	    <div>
            <div>
                <p class="sns">Facebook</p>
            </div>
	        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAwamori-in-The-Pocket-110103447082952%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=500px&height=500&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=2165553107045876" width="500px" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	    </div>
	    <div class="support-title">
	    	<div><p>supporter</p></div>
	    	<div><ul>
		    <li>サポーター募集中！</li>
		    <li>サポーター募集中！</li>
		    <li><a href="#"><img src="/wp-content/uploads/2019/10/preparation.png" alt=""></a></li>
	        </ul></div>
	    </div>
	</div>
<?php get_footer(); ?>
