<?php get_header(); ?>
    <?php
        if (strpos($_SERVER["REQUEST_URI"],'about') !== false) :
    ?>
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
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704897/sbyavoe1ulg7vbjbkvkr.jpg" alt="">
                                    <div>
                                        <span>Kou</span>
                                        <p>Apprentice Frontend Engineer / Podcaster / Blogger / Freelancer</p>
                                        <div class="something">
                                            <div class="something">
                                                <p>
                                                    沖縄生まれ沖縄育ちのフロントエンジニアです。アメリカと日本のハーフ、現在は大学４年次です。愛知に出稼ぎに行ったり、オーストラリアに一年滞在したり、たまにラジオでペチャクチャしております。ラジオでは主に沖縄のグルメや海外生活のことを仲間と共有していきますので興味があれば、ぜひ気軽にコメントよろしくお願いします！
                                                </p>
                                            </div>
                                            <div class="sns_account">
                                                <a href="https://twitter.com/AwamoriKou" class="twitter">
                                                    Twitter
                                                </a>
                                                /
                                                <a href="https://www.instagram.com/koutamakin" class="instagram">
                                                    Instagram
                                                </a>
                                                /
                                                <a href="https://www.facebook.com/profile.php?id=100007218916422" class="facebook">
                                                    Facebook
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704906/iob6zfw5ipv0sffihf9s.jpg" alt="">
                                    <div>
                                        <span>Asuka</span>
                                        <p>Travel Concierge / Podcaster / Blogger / Freelancer</p>
                                        <div class="something">
                                            <div class="something">
                                                <p>
                                                    県産品娘、あーすーです！トラベルコンシェルジュとして、主に地元沖縄の案内やオススメを紹介しています！沖縄で開催されるイベントに参加したりしてるので、その事についてもお話していきます！よろしくお願いしまーす！
                                                </p>
                                            </div>
                                            <div class="sns_account">
                                                <a href="https://twitter.com/a_su_awamori" class="twitter">
                                                    Twitter
                                                </a>
                                                /
                                                <a href="https://www.instagram.com/asukamiyazato" class="instagram">
                                                    Instagram
                                                </a>
                                                /
                                                <a href="https://www.facebook.com/asukamiyazato" class="facebook">
                                                    Facebook
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704968/acvgh4hcnmccxobtvrmt.jpg" alt="">
                                    <div>
                                        <span>Asatai</span>
                                        <p>Application Engineer / Podcaster / Freelancer</p>
                                        <div class="something">
                                            <div class="something">
                                                <p>
                                                    はいさーい、あさたいです！人生を自由に放浪している、旅するエンジニアです。このラジオを通して、視聴者の皆さんと一緒にゆんたくできたら嬉しいです。ゆたしく！
                                                </p>
                                            </div>
                                            <div class="sns_account">
                                                <a href="https://twitter.com/asatai_awamori" class="twitter">
                                                    Twitter
                                                </a>
                                                /
                                                <a href="https://www.instagram.com/asatai_awamori" class="instagram">
                                                    Instagram
                                                </a>
                                                /
                                                <a href="https://www.facebook.com/asatai.oki" class="facebook">
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
            <div class="main_information page">
                <div class="share_box">
                    <h2>Share</h2>
                    <p>僕らのラジオをシェア、いいね！してもらえるとうれしいです！</p>
                    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&width=161&layout=button_count&action=like&size=large&show_faces=true&share=true&height=46&appId=2165553107045876" width="200" height="60" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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

        </div><!-- /main -->
        <div class="tips">
            <div class="sns_box">
                <div class="facebook_feed">
                    <p class="sns">Facebook</p>
                </div>
                <?php if ( wp_is_mobile() ) : ?>
                <div class="device">
                    <div class="sp">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&tabs=timeline&width=300px&height=500px&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=2165553107045876" width="300px" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="tab_view">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&tabs=timeline&width=400&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2165553107045876" width="400" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="tb">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2165553107045876" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>

                <?php else : ?>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAwamori-in-The-Pocket-110103447082952%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=500px&height=500&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=2165553107045876" width="500px" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <?php endif ; ?>
            </div>
            <div class="support-title">
                <div><p>Awamori in The Pocket</p></div>
                <div>
                    <div class="user_info_block">
                        <div class="user_info">
                            <div class="user_image">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704906/iob6zfw5ipv0sffihf9s.jpg" alt="">
                            </div>
                            <div class="user_image_bottom">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704897/sbyavoe1ulg7vbjbkvkr.jpg" alt="">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704968/acvgh4hcnmccxobtvrmt.jpg" alt="">
                            </div>
                        </div>
                        <div class="user_info_text">
                            <p>
                                「 沖縄 」をメインテーマに「ゆんたく」します。<br>
                                僕らはたくさんの人と交流し、人と人がつながり<br>
                                広い輪を創れたらと考えております。
                            </p>
                        </div>
                    </div>
                    <ul>
                        <li class="support_form_link">
                            応援していただける方は
                            <a href="https://polca.jp/users/pockeawa">
                            こちらへ！
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php
        else:
    ?>
        <div id="main" class="container radio_content_view">
            <div class="next-stream">
                <span class="next-stream_date">次回の配信日は
                    <span id="js-next">2019年11月24日</span>です。
                </span>
            </div>
            <div id="posts">

                <?php

                    $paged = get_query_var("paged");
                    query_posts("posts_per_page=10&paged=$paged");
                    if (have_posts()):
                        while(have_posts()):
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

                        <?php the_excerpt(); ?>
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
            <div class="prev"><?php previous_posts_link('&lt; PREVIOUS', $post->max_num_pages); ?></div>
            <div class="next"><?php next_posts_link('NEXT &gt;', $post->max_num_pages); ?></div>
        </div>
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
                <div><p>Awamori in The Pocket</p></div>
                <div>
                    <div class="user_info_block">
                        <div class="user_info">
                            <div class="user_image">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704906/iob6zfw5ipv0sffihf9s.jpg" alt="">
                            </div>
                            <div class="user_image_bottom">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704897/sbyavoe1ulg7vbjbkvkr.jpg" alt="">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572704968/acvgh4hcnmccxobtvrmt.jpg" alt="">
                            </div>
                        </div>
                        <div class="user_info_text">
                            <p>
                                「 沖縄 」をメインテーマに「ゆんたく」します。<br>
                                僕らはたくさんの人と交流し、人と人がつながり<br>
                                広い輪を創れたらと考えております。
                            </p>
                        </div>
                    </div>
                    <ul>
                        <li class="support_form_link">
                            応援していただける方は
                            <a href="https://polca.jp/users/pockeawa">
                            こちらへ！
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php
        endif;
    ?>
<?php get_footer(); ?>
