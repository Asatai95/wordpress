<?php get_header(); ?>
        <div id="main" class="container main map_view">
            <div class="next-stream">
                <span class="next-stream_date">次回の配信日は
                    <span id="js-next">2019年11月03日</span>です。
                </span>
            </div>
            <div id="posts">
                <div class="post top_page">
                    <div class="background_mian_image"></div>
                    <div class="main_top_map">
                        <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572877248/main_view_back.png" alt="">
                        <div class="map_pin">
                        <?php
                        if (have_posts()) :
                            $post_array = array();
                            while (have_posts()) :
                                the_post();
                        ?>
                        <?php

                                $category = get_the_category();
                                $cat_name = $category[0]->cat_name;
                                array_push($post_array, $cat_name);
                            endwhile;
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
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/c_scale,w_33/v1572878354/tese_image.png" alt="">
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
                                <img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1572878524/test_icon.png" alt="">
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
                                while (have_posts()) :
                                    the_post();
                                    $category = get_the_category();
                                    $cat_name = $category[0]->cat_name;
                                    if ($cat_name == "中城村" || $cat_name == "西原町" || $cat_name == "与那原町" ) {
                                        array_push($stack_1, $cat_name);
                                    }
                                    if ($cat_name == "南風原町" || $cat_name == "豊見城市") {
                                        array_push($stach_2, $cat_name);
                                    }
                                endwhile;
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
                                <a href="#">
                                    More Podcast...
                                </a>
                            </div>

                        </div>
                    </div>


                </div><!-- /post -->
            </div><!-- /posts -->

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
		    <li class="support_form_link">
                応援していただける方は
                <a href="https://polca.jp/users/pockeawa">
                こちらへ！
                </a>
            </li>
	        </ul></div>
	    </div>
	</div>
<?php get_footer(); ?>

