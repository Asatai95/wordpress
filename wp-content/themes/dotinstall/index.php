<?php get_header(); ?>
    <?php
        if (wp_is_mobile()):
    ?>
        <div class="top_main_img">
            <div class="back_movie">
                <div class="main_top_view_video">
                    <div class="video_tag tag_375">
                        <video src="https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_375/v1574258843/my_media_bg.mp4" muted webkit-playsinline playsinline autoplay loop>
                        </video>
                    </div>
                    <div class="video_tag tag_414">
                        <video src="https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_414/v1574258843/my_media_bg.mp4" muted webkit-playsinline playsinline autoplay loop>
                        </video>
                    </div>
                    <div class="back_text">
                        <h2>Awamori in The Pocket</h2>
                        <p>RADIO BY KOU, ASUKA, ASATAI</p>
                    </div>
                    <div class="cancel_button_top">
                        <span class="css-cancel"></span>
                    </div>
                </div>
                <div class="video_back_image_box">
                    <p>
                        <span>このラジオで、誰かを笑顔に</span><br>
                        今日もどこかで収録しています
                    </p>
                    <div class="top_comment">
                        <div class="main_top_img back_img active"></div>
                        <div class="sliding_pictures active">
                            <div class="picture left near sliding_picture2"></div>
                            <div class="picture right near sliding_picture3"></div>
                            <div class="picture left far sliding_picture1"></div>
                            <div class="picture right far sliding_picture4"></div>
                        </div>
                        <div class="nav_bar_icon active">
                            <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573999241/picture_video_control.png" alt="">
                        </div>
                    </div>
                    <div class="anchor_button_box">
                        <a href="https://anchor.fm/pockeawa">
                            <button type="button" class="check_anchor">Check Podcast</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="main" class="container main map_view_sp">
            <div class="next-stream">
                <span class="next-stream_date">次回の配信日は
                    <span id="js-next">2019年11月24日</span>です。
                </span>
            </div>

            <div id="posts">
                <div class="post top_page">
                    <div class="background_main_image"></div>
                    <div class="main_top_map">
                        <!-- <img src="https://res.cloudinary.com/dq14n6i0f/image/upload/c_scale,h_2133,w_1673/v1573822260/main_view_back_img.png" alt=""> -->
                        <img src="https://res.cloudinary.com/hchyaihwv/image/upload/c_scale,h_2124,w_1624/v1573825085/main_view_back_img.png" alt="" class="main_map_image">
                        <div class="map_pin">
                        <?php
                        if (have_posts()) :
                            $post_array = array();
                            $post_article = array();
                            $test_posts = get_posts(array(
                                'posts_per_page'=> -1,
                            ));
                            foreach($test_posts as $post){
                                setup_postdata( $post );
                                $cat_name = get_the_category()[0]->cat_name;
                                _log($cat_name);
                                array_push($post_array, $cat_name);
                                $post_article[] = array("cat_name"=>$cat_name, "link"=>get_the_permalink(), "thumbnail"=>get_the_post_thumbnail(), "title"=>get_the_title(), "date"=>get_post_time('F d, Y'));
                            }

                        ?>
                        <?php

                            $aligned = array_unique($post_array);
                            $alignedUnique = array_values($aligned);

                        ?>
                        <? foreach($alignedUnique as $value){
                            if ($value == "国頭村"): ?>
                            <div class="pins kunigami">
                                <div class="marker">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572855551/kunigami.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>国頭村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "大宜味村"):?>
                            <div class="pins oogimi">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836540/oogimi.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>大宜味村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "東村"):?>
                            <div class="pins higashi">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836430/higashi.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>東村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "名護市"):?>
                            <div class="pins nago">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572855808/nago.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>名護市</span>
                                </div>
                            </div>
                            <div class="pins nakizin_islands">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573871647/island_1.png" alt="">
                            </div>
                        <?php elseif ($value == "今帰仁村"):?>
                            <div class="pins nakizin">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572839600/nakizin.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>今帰仁村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "本部町"):?>
                            <div class="pins motobu">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572840005/motobu.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>本部町</span>
                                </div>
                            </div>
                        <?php elseif ($value == "宜野座村"):?>
                            <div class="pins ginoza">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572839250/ginoza.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>宜野座村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "恩納村"):?>
                            <div class="pins onna">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572840548/onna.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>恩納村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "金武町"):?>
                            <div class="pins kin">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572840902/kin.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>金武町</span>
                                </div>
                            </div>
                        <?php elseif ($value == "うるま市"):?>
                            <div class="pins uruma">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572854149/uruma.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>うるま市</span>
                                </div>
                            </div>
                            <div class="pins uruma_island">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573871637/test_icon.png" alt="">
                            </div>
                        <?php elseif ($value == "沖縄市"):?>
                            <div class="pins okinawa">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572841649/okinawa.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>沖縄市</span>
                                </div>
                            </div>
                        <?php elseif ($value == "読谷村"):?>

                            <div class="pins yomitan">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572854736/yomitan.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>読谷村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "嘉手納町"):?>
                            <div class="pins kadena">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572842261/kadena.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>嘉手納町</span>
                                </div>
                            </div>
                        <?php elseif ($value == "北谷町") :?>
                            <div class="pins tyatan">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572842461/tyatan.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>北谷町</span>
                                </div>
                            </div>
                        <?php elseif ($value == "北中城村") :?>
                            <div class="pins kitanaka">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572842629/kitanaka.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>北中城村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "中城村") :?>
                            <div class="pins nakagusuku">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572843229/nakagusuku.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>中城村</span>
                                </div>
                            </div>
                        <?php elseif ($value == "宜野湾市") :?>
                            <div class="pins ginowan">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836412/ginowan.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>宜野湾市</span>
                                </div>
                            </div>
                        <?php elseif ($value == "浦添市") :?>
                            <div class="pins urasoe">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572843440/urasoe.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>浦添市</span>
                                </div>
                            </div>
                        <?php elseif ($value == "西原町"):?>
                            <div class="pins nishihara">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572843624/nishihara.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>西原町</span>
                                </div>
                            </div>
                        <?php elseif ($value == "那覇市"):?>
                            <div class="pins naha">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572843861/naha.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>那覇市</span>
                                </div>
                            </div>

                        <?php elseif ($value == "与那原町") :?>
                            <div class="pins yonabaru">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572844397/yonabaru.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>与那原町</span>
                                </div>
                            </div>
                        <?php elseif ($value == "南城市"):?>
                            <div class="pins nanzyou">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572844611/nanzyou.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>南城市</span>
                                </div>
                            </div>
                        <?php elseif ($value == "豊見城市"):?>
                            <div class="pins tomishiro">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572845210/tomishiro.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>豊見城市</span>
                                </div>
                            </div>
                        <?php elseif ($value == "八重瀬町"):?>
                            <div class="pins yaese">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572845435/yaese.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>八重瀬町</span>
                                </div>
                            </div>
                        <?php elseif ($value == "南風原町"):?>
                            <div class="pins hae">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836424/haebaru.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>南風原町</span>
                                </div>
                            </div>
                        <?php elseif ($value == "糸満市"):?>
                            <div class="pins itoman">
                                <div class="marker">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836434/itoman.png" alt="" class="icon">
                                </div>
                                <div class="name_text view">
                                    <span>糸満市</span>
                                </div>
                            </div>
                        <?php endif ;?>
                        <?php
                            }
                            wp_reset_postdata();
                        endif ;
                        ?>
                         </div>
                        </div>
                    </div>
                    <?php
                        $list = array();
                        $post_value = array();
                        foreach($post_article as $item){
                            if ($value == $item["cat_name"]):
                                array_push($list, $item["cat_name"]);
                                array_push($post_value , $item);
                            endif;
                        }
                        if (count($list) > 0):
                    ?>
                        <div class="name_text view info_box">
                            <div class="radio_box">
                                <div class="cancel">
                                    <div class="cancel_back">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        endif;
                    ?>




                </div><!-- /post -->
            </div><!-- /posts -->

        </div>
        <div class="main_block_sp">
            <div class="radio_mian_box">
                <div class="new_radio_content">
                    <p>
                        <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573907648/new.png" alt="">
                        Radio
                    </p>
                </div>
                <div class="radio_info_block">
                    <?php
                        if (have_posts()) :
                            $myposts = get_posts('numberposts=4');
                            foreach($myposts as $post) :
                    ?>
                    <div class="radio_content">
                        <div class="post-content">
                            <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(0, 0)); ?></a>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100">
                            <?php endif; ?>
                        </div>
                        <div class="post-header top_sp">
                            <p>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                            <div class="sub_text">

                                <?php the_excerpt(); ?>

                                <span>
                                    <?php echo get_post_time('F d, Y'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                    <div class="radios_button">
                        <a href="http://awamori-in-the-pocket.herokuapp.com/awamori-in-the-pocket/">
                            <button type="button" class="button">More Podcast</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="travel_info_block">
                <div class="travel_info_block_title">
                    <p>
                        TRAVEL <span>PLANNING</span>
                    </p>
                </div>
                <div class="back_video">
                    <video src="https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_375/v1574001737/back_video.mp4" muted webkit-playsinline playsinline autoplay loop>
                    </video>
                    <div class="travel_block_content">
                        <p>
                            僕らなりの旅行プランを提案します<br>
                            ラジオで紹介した場所以外で気になる場所があれば<br>
                            気軽にコメントください！！
                        </p>
                        <a href="https://www.facebook.com/awapocke/">
                            <button type="button" class="info_button">Messenger</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tips">
                <div class="support-title">
                    <div class="tips_title"><p>Awamori in The Pocket</p></div>
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
                                    「 沖縄 」をメインテーマに「ゆんたく」します<br>
                                    僕らはたくさんの人と交流し、人と人がつながり<br>
                                    広い輪を創れたらと考えています
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
                <div class="sns_box">
                    <div class="facebook_feed">
                        <p class="sns">Facebook</p>
                    </div>
                    <?php if ( wp_is_mobile() ) : ?>
                    <div class="device">
                        <div class="sp">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fawapocke%2F&tabs=timeline&width=290&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=2165553107045876" width="290" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
            </div>
            <div id="instagram_field">
                <div class="instagram_field_title">
                    <p>
                        <a href="https://www.instagram.com/awamori_in_the_pocket/">
                            @awamori_in_the_pocket
                        </a>
                        <span>on Instagram</span>
                    </p>
                </div>
                <!-- <div class="error_log">
                    <span>現在、表示可能な画像がありません</span>
                </div> -->
                <div class="insta_view_block first">
                    <div class="main_box"></div>
                </div>
                <div class="insta_view_block last">
                    <div class="main_box"></div>
                </div>
            </div>
        </div>
    <?php
        else:
    ?>
        <div class="main_top_img">
            <div class="main_back">
                <div class="top_main_img">
                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573972961/home.png" alt="" class="home_icon">
                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573972946/check.png" alt="" class="check_icon">
                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573972951/bar.png" alt="" class="bar_icon">
                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573912471/main_img_top.png" alt="" class="main_view_image">
                    <div class="main_top_text">
                        <h1>Awamori in The Pocket</h1>
                        <h2>TRAVEL, LIFE, AND RADIO BY KOU, ASUKA, ASATAI</h2>
                    </div>
                    <div class="scroll_text">
                        <span>Scroll for more</span>
                        <div class="icon icon_arrow_down_white"></div>
                    </div>
                </div>
            </div>
            <div class="iphone_main_back_image">
                <div class="iphone_main_back_image_text">
                    <h2>このラジオで、今日も誰かを笑顔に</h2>
                    <p>今日もどこかで収録しています</p>
                </div>
                <div class="back_img"></div>
                <div class="sliding_pictures">
                    <div class="picture left near sliding_picture2"></div>
                    <div class="picture right near sliding_picture3"></div>
                    <div class="picture left far sliding_picture1"></div>
                    <div class="picture right far sliding_picture4"></div>
                </div>
                <div class="nav_bar_icon">
                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573999241/picture_video_control.png" alt="">
                </div>
            </div>
        </div>
        <div id="main" class="container main map_view">
            <div class="next-stream">
                <span class="next-stream_date">次回の配信日は
                    <span id="js-next">2019年11月24日</span>です。
                </span>
            </div>

            <div id="posts">
                <div class="post top_page">
                    <div class="background_mian_image"></div>
                    <div class="main_top_map">
                        <!-- <img src="https://res.cloudinary.com/dq14n6i0f/image/upload/c_scale,h_2133,w_1673/v1573822260/main_view_back_img.png" alt=""> -->
                        <img src="https://res.cloudinary.com/hchyaihwv/image/upload/c_scale,h_2124,w_1624/v1573825085/main_view_back_img.png" alt="">
                        <div class="map_pin">
                        <?php
                        if (have_posts()) :
                            $post_array = array();
                            $test_posts = get_posts(array(
                                'posts_per_page'=> -1,
                            ));
                            foreach($test_posts as $post){
                                $cat_name = get_the_category()[0]->cat_name;
                                array_push($post_array, $cat_name);
                            }
                        ?>
                        <?php

                            $aligned = array_unique($post_array);
                            $alignedUnique = array_values($aligned);

                        ?>
                        <? foreach($alignedUnique as $value){
                            if ($value == "国頭村"): ?>
                            <div class="pins kunigami">
                                <a href="#">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572855551/kunigami.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>国頭村</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572861292/text_icon.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "大宜味村"):?>
                            <div class="pins oogimi">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836540/oogimi.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>大宜味村</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572868721/text_icon_4.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "東村"):?>
                            <div class="pins higashi">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836430/higashi.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>東村</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572861292/text_icon.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "名護市"):?>
                            <div class="pins nago">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572855808/nago.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>名護市</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572862998/text_icon_1.png" alt="">
                                </div>
                            </div>

                            <div class="pins nakizin_islands">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573871647/island_1.png" alt="">
                            </div>
                        <?php elseif ($value == "今帰仁村"):?>
                            <div class="pins nakizin">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572839600/nakizin.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>今帰仁村</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572868721/text_icon_4.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "本部町"):?>
                            <div class="pins motobu">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572840005/motobu.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>本部町</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572868728/text_icon_6.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "宜野座村"):?>
                            <div class="pins ginoza">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572839250/ginoza.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>宜野座村</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572862998/text_icon_1.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "恩納村"):?>
                            <div class="pins onna">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572840548/onna.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>恩納村</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572868721/text_icon_4.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "金武町"):?>
                            <div class="pins kin">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572840902/kin.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>金武町</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572863500/text_icon_2.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "うるま市"):?>
                            <div class="pins uruma">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572854149/uruma.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>うるま市</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572862998/text_icon_1.png" alt="">
                                </div>
                            </div>

                            <div class="pins uruma_island">
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573871637/test_icon.png" alt="">
                            </div>
                        <?php elseif ($value == "沖縄市"):?>
                            <div class="pins okinawa">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572841649/okinawa.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>沖縄市</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572866042/text_icon_3.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "読谷村"):?>
                            <div class="pins yomitan">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572854736/yomitan.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>読谷村</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572868721/text_icon_4.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "嘉手納町"):?>
                            <div class="pins kadena">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572842261/kadena.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>嘉手納町</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572868721/text_icon_4.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "北谷町") :?>
                            <div class="pins tyatan">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572842461/tyatan.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>北谷町</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572868721/text_icon_4.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "北中城村") :?>
                            <div class="pins kitanaka">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572842629/kitanaka.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>北中城村</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572866042/text_icon_3.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "宜野湾市") :?>
                            <div class="pins ginowan">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836412/ginowan.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>宜野湾市</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572868721/text_icon_4.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "浦添市") :?>
                            <div class="pins urasoe">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572843440/urasoe.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>浦添市</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572874949/text_icon_9.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "西原町"):?>
                            <div class="pins nishihara">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572843624/nishihara.png" alt="">
                                </a>
                            </div>
                        <?php elseif ($value == "那覇市"):?>
                            <div class="pins naha">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572843861/naha.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>那覇市</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572871791/text_icon_7.png" alt="">
                                </div>
                            </div>

                        <?php elseif ($value == "与那原町") :?>
                            <div class="pins yonabaru">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572844397/yonabaru.png" alt="">
                                </a>
                            </div>
                        <?php elseif ($value == "南城市"):?>
                            <div class="pins nanzyou">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572844611/nanzyou.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>南城市</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572863500/text_icon_2.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "豊見城市"):?>
                            <div class="pins tomishiro">
                                <a href="#">
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572845210/tomishiro.png" alt="">
                                </a>
                            </div>
                        <?php elseif ($value == "八重瀬町"):?>
                            <div class="pins yaese">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572845435/yaese.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>八重瀬町</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572866042/text_icon_3.png" alt="">
                                </div>
                            </div>
                        <?php elseif ($value == "糸満市"):?>
                            <div class="pins itoman">
                                <a href="#">

                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836434/itoman.png" alt="">
                                </a>
                                <div class="name_text view">
                                    <span>糸満市</span>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572871805/text_icon_8.png" alt="">
                                </div>
                            </div>
                        <?php endif ;?>
                        <?php
                            }
                        endif ;
                        ?>
                        <?php
                            if (have_posts()) :
                                $stack_1 = array();
                                $stach_2 = array();
                                foreach($test_posts as $post){
                                    $cat_name = get_the_category()[0]->cat_name;
                                    if ($cat_name == "中城村" || $cat_name == "西原町" || $cat_name == "与那原町" ) {
                                        array_push($stack_1, $cat_name);
                                    }
                                    if ($cat_name == "南風原町" || $cat_name == "豊見城市") {
                                        array_push($stach_2, $cat_name);
                                    }
                                }
                        ?>
                        <?php

                            if (in_array("中城村", $stack_1) || in_array("西原町", $stack_1) || in_array("与那原町", $stack_1) ):
                        ?>
                            <div class="pins nakagusuku">
                                <?php if ( in_array("中城村", $stack_1) ):?>
                                    <a href="#">
                                        <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572843229/nakagusuku.png" alt="">
                                    </a>
                                <?php endif; ?>
                                <div class="name_text view">

                                    <?php if (in_array("中城村", $stack_1)) :?>
                                        <span class="naka_text">中城村</span>
                                    <?php endif; ?>
                                    <?php if (in_array("西原町", $stack_1)) :?>

                                        <span class="nishi_text">西原町</span>
                                    <?php endif; ?>
                                    <?php if (in_array("与那原町", $stack_1)) :?>
                                        <span class="yona_text">与那原町</span>
                                    <?php endif; ?>
                                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572866042/text_icon_3.png" alt="">
                                </div>
                            </div>
                        <?php endif ;?>
                        <?php if (in_array("南風原町", $stach_2) || in_array("豊見城市", $stach_2)): ?>
                            <div class="pins hae">
                                <?php if (in_array("南風原町", $stach_2)) :?>
                                    <a href="#">
                                        <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572836424/haebaru.png" alt="">
                                    </a>
                                <?php endif ;?>
                                <div class="name_text view">
                                    <?php if (in_array("豊見城市", $stach_2)) :?>
                                        <span class="tomi_text">豊見城市</span>
                                    <?php endif; ?>
                                    <?php if (in_array("南風原町", $stach_2)):?>
                                        <span class="hae_text view">南風原町</span>
                                    <?php endif ;?>
                                        <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572871791/text_icon_7.png" alt="">
                                </div>
                            </div>
                        <?php endif ;?>
                        <?php
                        endif ;
                        ?>
                        </div>

                    </div>

                    <div class="radio_box">
                        <div class="cancel">
                            <div class="cancel_back">
                                <span></span>
                            </div>
                        </div>
                        <div class="contents">

                            <div class="list_box">

                            </div>

                        </div>
                        <div class="more_link">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"><path id="wave" d=""/></svg>
                            <div>
                                <a href="http://awamori-in-the-pocket.herokuapp.com/awamori-in-the-pocket/">
                                    More Podcast...
                                </a>
                            </div>

                        </div>
                    </div>


                </div><!-- /post -->
            </div><!-- /posts -->

        </div><!-- /main -->
        <div class="radio_mian_box">
            <div class="new_radio_content">
                <p>
                    <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573907648/new.png" alt="">
                    Radio
                </p>
            </div>
            <div class="radio_info_block">
                <?php
                    if (have_posts()) :
                        $myposts = get_posts('numberposts=4');
                        foreach($myposts as $post) :
                ?>
                <div class="radio_content">
                    <div class="post-content">
                        <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(0, 0)); ?></a>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100">
                        <?php endif; ?>
                    </div>
                    <div class="post-header">
                        <p>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                        <div class="sub_text">

                            <?php the_excerpt(); ?>

                            <span>
                                <?php echo get_post_time('F d, Y'); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php
                        endforeach;
                    endif;
                ?>
                <div class="radios_button">
                    <a href="http://awamori-in-the-pocket.herokuapp.com/awamori-in-the-pocket/">
                        <button type="button" class="button">More Podcast</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="travel_info_block">
            <div class="travel_info_block_title">
                <p>
                    TRAVEL <span>PLANNING</span>
                </p>
            </div>
            <div class="back_video">
                <video autoplay loop muted>
                    <source src="https://res.cloudinary.com/hchyaihwv/video/upload/v1574001737/back_video.mp4" muted webkit-playsinline playsinline autoplay loop>
                </video>
                <div class="travel_block_content">
                    <p>
                        僕らなりの旅行プランを提案します<br>
                        ラジオで紹介した場所以外で気になる場所があれば<br>
                        気軽にコメントください！！
                    </p>
                    <a href="https://www.facebook.com/awapocke/">
                        <button type="button" class="info_button">Messenger</button>
                    </a>
                </div>
            </div>
        </div>
        <div id="instagram_field">
            <div class="instagram_field_title">
                <p>
                    <a href="https://www.instagram.com/awamori_in_the_pocket/">
                        @awamori_in_the_pocket
                    </a>
                    <span>on Instagram</span>
                </p>
            </div>
            <!-- <div class="error_log">
                <span>現在、表示可能な画像がありません</span>
            </div> -->
            <div class="insta_view_block first">
                <div class="main_box"></div>
            </div>
            <div class="insta_view_block last">
                <div class="main_box"></div>
            </div>
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
                            「 沖縄 」をメインテーマに「ゆんたく」します<br>
                            僕らはたくさんの人と交流し、人と人がつながり<br>
                            広い輪を創れたらと考えています
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

