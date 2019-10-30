<?php get_header(); ?>
        <div id="main" class="container single">
            <div id="posts_page">

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

                <div class="single-post">
                    <h2 class="single_title page"><?php the_title(); ?></h2>
                    <div class="post-content">
                        <div class="post-content contents">
                            <p>
                                このラジオは、ディープな沖縄の観光情報を沖縄在住の若者がお届けする番組です。<br>
                                方言、地元ゆかりの観光スポット、居酒屋、食事処など、観光関連の情報をゆんたくしていきます。<br>
                                毎週ラジオをポッドキャストにて配信できるように頑張ります。
                            </p>
                            <p>
                                このラジオでは、「作業しながら聴くのにちょうどいい」とか「仕事、学校から帰宅途中の暇つぶし」とか「晩酌の時間に聴く」などの時間に僕らのラジオを聴いていただけると嬉しいです。御堅い観光関連情報ラジオよりも情報量は少ないけど、不思議とクセになる。そんな、視聴者の皆様にとって「この時間には自然とこのラジオを聴きたくなる」となりますように。
                            </p>
                        </div>
                        <div class="user_info">
                            <h2>パーソナリティ紹介</h2>
                            <div class="box_info">
                                <div class="profile">
                                    <img src="https://res.cloudinary.com/huu97stsb/image/upload/v1572453887/profile.png" alt="">
                                    <div>
                                        <span>Kou</span>
                                        <p>Apprentice Frontend Engineer / Podcaster / Blogger</p>
                                        <div class="something">
                                            <div class="something">
                                                <span class="something_title">なんでもいい</span>
                                                <span class="item">何か</span>
                                                <span class="item">何か</span>
                                            </div>
                                            <div class="sns_account">
                                                <a href="#">
                                                    Titter
                                                </a>
                                                /
                                                <a href="#">
                                                    Instagram
                                                </a>
                                                /
                                                <a href="#">
                                                    Facebook
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile">
                                    <img src="https://res.cloudinary.com/huu97stsb/image/upload/v1572453887/profile.png" alt="">
                                    <div>
                                        <span>Asuka</span>
                                        <p>tourism coordinator / Podcaster / Blogger</p>
                                        <div class="something">
                                            <div class="something">
                                                <span class="something_title">なんでもいい</span>
                                                <span class="item">何か</span>
                                                <span class="item">何か</span>
                                            </div>
                                            <div class="sns_account">
                                                <a href="#">
                                                    Titter
                                                </a>
                                                /
                                                <a href="#">
                                                    Instagram
                                                </a>
                                                /
                                                <a href="#">
                                                    Facebook
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile">
                                    <img src="https://res.cloudinary.com/huu97stsb/image/upload/v1572451661/si65kyly64ite4j6y0bj.jpg" alt="">
                                    <div>
                                        <span>Asatai</span>
                                        <p>Apprentice Engineer / Podcaster</p>
                                        <div class="something">
                                            <div class="something">
                                                <span class="something_title">なんでもいい</span>
                                                <span class="item">何か</span>
                                                <span class="item">何か</span>
                                            </div>
                                            <div class="sns_account">
                                                <a href="#">
                                                    Titter
                                                </a>
                                                /
                                                <a href="#">
                                                    Instagram
                                                </a>
                                                /
                                                <a href="#">
                                                    Facebook
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <div class="main_information">
                <div class="share_box">
                    <h2>Share</h2>
                    <p>僕らのラジオをシェア、いいね！してもらえるとうれしいです！</p>
                    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&width=161&layout=button_count&action=like&size=large&show_faces=true&share=true&height=46&appId=2165553107045876" width="161" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                <div class = "google_form">
                    <h2>Contact</h2>
                    <p>番組へのご意見、ご感想は以下のフォームよりお送りください。<br>どんな些細なご意見でもお待ちしています。なお、ご感想は番組内でご紹介させていただくことがあります。おたよりをもらえると、素直に嬉しいです。</p>

                    <?php if ( wp_is_mobile() ) : ?>
                        <div class="contact_form_box sp">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeUjZumzA-zrJ439t9rgE95nuTKK_9EJAu0VfvfiBfhC5ckig/viewform?embedded=true" width="340" height="797" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
                        </div>
                        <div class="contact_form_box tb">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeUjZumzA-zrJ439t9rgE95nuTKK_9EJAu0VfvfiBfhC5ckig/viewform?embedded=true" width="500" height="797" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
                        </div>
                    <?php else : ?>
                        <div class="contact_form_box pc">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeUjZumzA-zrJ439t9rgE95nuTKK_9EJAu0VfvfiBfhC5ckig/viewform?embedded=true" width="600" height="797" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="navigation single">
                <div class="prev"><?php previous_post_link('%link', '&lt; PREVIOUS'); ?></div>
                <div class="next"><?php next_post_link('%link', 'NEXT &gt;'); ?></div>
            </div>

        </div><!-- /main -->
        <div class="tips">
            <div class="sns_box">
                <div class="facebook_feed">
                    <p class="sns">Facebook</p>
                </div>
                <?php if ( wp_is_mobile() ) : ?>
                <div class="device">
                    <div class="sp">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&tabs=timeline&width=270px&height=500px&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=2165553107045876" width="270px" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="tab_view">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&tabs=timeline&width=300&height=500px&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=2165553107045876" width="300" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="tb">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&tabs=timeline&width=400px&height=500px&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=2165553107045876" width="400px" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>

                <?php else : ?>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAwamori-in-The-Pocket-110103447082952%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=500px&height=500&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=2165553107045876" width="500px" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <?php endif ; ?>
            </div>
            <div class="support-title">
                <div><p>supporter</p></div>
                <div><ul>
                <li>サポーター募集中！</li>
                <li>サポーター募集中！</li>
                <li class="support_form_link"><a href="#"><img src="/wp-content/uploads/2019/10/preparation.png" alt=""></a></li>
                </ul></div>
            </div>
        </div>
<?php get_footer(); ?>
