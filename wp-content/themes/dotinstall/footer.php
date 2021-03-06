<?php wp_footer(); ?>


    <footer class="footer_view">
      <div class="footer_info">
      <?php
        if (wp_is_mobile()):
      ?>
      <?php else: ?>
        <div class="footer_sub_img">
          <img src="/wp-content/uploads/2019/10/footer_icon.png" alt="">
        </div>
      <?php endif; ?>
        <div class="copy">
          <a href="<?php echo home_url() ?>">
            <img src="/wp-content/uploads/2019/10/footer_logo.png" alt="">
          </a>
          <img src="/wp-content/uploads/2019/10/copyright.png" alt="">
        </div>
      </div>
    </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sidebar/3.1.0/jquery.sidebar.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/jquery.wavify.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

      <script src="https://awamori-in-the-pocket.herokuapp.com/wp-content/themes/dotinstall/jquery.scrollify.js"></script>
      <script src="https://awamori-in-the-pocket.herokuapp.com/wp-content/themes/dotinstall/jquery.smooth-scroll.js"></script>
      <script>
        var ajaxurl = 'https://awamori-in-the-pocket.herokuapp.com/wp-admin/admin-ajax.php';
      </script>
      <script>
        $(function(){
          $(".name_text.view.info_box .radio_box").each(function(){
            $(this).find(".cancel .cancel_back").on("click touch",  function(e){
              e.preventDefault();
              console.log("click")
              if (e.type == "click" || e.type == "touch") {
                $(".map_pin .pins.active").removeClass("active");
                $(".map_pin .pins .marker .pin").removeClass("active");
                $(".map_pin .pins .marker .pin").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png");
                $(".map_pin .pins .marker .icon").removeClass("active");
                if ($(".main_top_map.active").length) {
                  $(".main_top_map").animate(
                    {"bottom": "0px"}, 300, "swing" , function(){
                      setTimeout(function(){
                        $(".main_top_map.active").removeClass("active");
                      },1000);
                    });
                }
                if($(".name_text.view.info_box.active").length){
                  $(".name_text.view.info_box.active").css("z-index", "-1");
                  $(".name_text.view.info_box.active").animate(
                    {"top": "-360px"}, 100, "swing", function(){
                      $(".name_text.view.info_box.active").removeClass("active");
                      setTimeout(function(){
                        $("#posts").each(function(){
                          $(this).find(".name_text.view.info_box .city_tag_text").remove();
                          $(this).find(".name_text.view.info_box .radio_content").remove();
                        });
                      },1000);
                  });
                }
              }
              return false;
            });
          });
          $(".map_pin").each(function(){
            $(this).find(".pins .marker .pin").on("click touch", function(e){
              e.preventDefault();
              if (e.type == "click" || e.type == "touch") {
                if ($(this).parents(".map_pin").find(".pins.active").length){
                  $(this).parents(".map_pin").find(".pins.active").removeClass("active");
                  $(".map_pin .pins .marker .pin").removeClass("active");
                  $(".map_pin .pins .marker .pin").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png");
                  $(".map_pin .pins .marker .icon").removeClass("active");
                  if ($(".main_top_map.active").length) {
                    $(".main_top_map").animate(
                      {"bottom": "0px"}, 300, "swing" , function(){
                        setTimeout(function(){
                          $(".main_top_map.active").removeClass("active");
                        },1000);
                      });
                  }
                  if($(".name_text.view.info_box.active").length){
                    $(".name_text.view.info_box.active").css("z-index", "-1");
                    $(".name_text.view.info_box.active").animate(
                      {"top": "-360px"}, 100, "swing", function(){
                        $(".name_text.view.info_box.active").removeClass("active");
                        setTimeout(function(){
                          $("#posts").each(function(){
                            $(this).find(".name_text.view.info_box .city_tag_text").remove();
                            $(this).find(".name_text.view.info_box .radio_content").remove();
                          });
                        },1000);
                    });

                  }
                } else {
                  var text = $(this).parents(".marker").next(".name_text").find("span").text();
                  if (e.type == "click" || e.type == "touch"){
                    if ($(this).parents(".marker").find(".icon.active").length){
                      $(this).parents(".marker").find(".icon").removeClass("active");
                    } else {
                      $(this).parents(".marker").find(".icon").addClass("active");
                    }
                  }
                  if ($(this).hasClass("active")){
                    $(this).removeClass("active");
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png");

                  } else {
                    $(this).addClass("active");
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                  }
                  if ($(".main_top_map.active").length) {
                    // $(".main_top_map.active").css("bottom", "0px");
                    // $(".main_top_map.active").removeClass("active");
                    $(".main_top_map").animate(
                      {"bottom": "0px"}, 300, "swing" , function(){
                        setTimeout(function(){
                          $(".main_top_map.active").removeClass("active");
                        },1000);
                      });
                  } else {

                    $(".main_top_map").animate(
                      {"bottom": "-130px"}, 200, "swing", function(){
                        $(".main_top_map").addClass("active");
                    });
                  }
                  if($(".name_text.view.info_box.active").length){
                    $(".name_text.view.info_box.active").css("z-index", "-1");
                    $(".name_text.view.info_box.active").animate(
                      {"top": "-360px"}, 100, "swing", function(){
                        $(".name_text.view.info_box.active").removeClass("active");
                        setTimeout(function(){
                          $("#posts").each(function(){
                            $(this).find(".name_text.view.info_box .city_tag_text").remove();
                            $(this).find(".name_text.view.info_box .radio_content").remove();
                          });
                        },1000);
                    });

                  } else {
                    $(".name_text.view.info_box").show();
                    $(".name_text.view.info_box").css("display", "flex");
                    $(".name_text.view.info_box").animate(
                      {"top": "0px"}, 100, "swing", function(){
                          $(".name_text.view.info_box").addClass("active");
                    });
                  }
                  var city_name = $(this).parents(".pins").find(".name_text span").text();
                  console.log(city_name)
                  $(this).parents(".pins").addClass("active");
                  $.ajax({
                      type: 'POST',
                      url: ajaxurl,
                      data: {
                          'action' : 'ajax_get_radio_contents_posts',
                          'mes' : city_name,
                      },
                      success: function( response ){
                        console.log(response)
                        var jsonData = JSON.parse( response );
                        $(".name_text.info_box").each(function(){
                          $(this).append(
                            '<div class="city_tag_text">\
                                <p>'+city_name+'</p>\
                            </div>\
                            <div class="radio_content">\
                              <div class="post-content sub_image_box">\
                                  <a href="'+ jsonData["permalink"]+'"><img src="'+ jsonData["thumbnail"] +'" alt=""></a>\
                              </div>\
                              <div class="post-header top_sp context_block">\
                                  <p>\
                                      <a href="'+ jsonData["permalink"]+'">'+ jsonData["post_title"]+'</a>\
                                  </p>\
                                  <div class="sub_text">\
                                      <span>\
                                        '+ jsonData["date"]+'\
                                      </span>\
                                  </div>\
                              </div>\
                            </div>\
                            '
                          );
                        });

                      }
                  });
                }
              }
              return false;
            });
          });

          if ($(".radio_content_view").length){
              $(this).find("form").submit(function(e){
                e.preventDefault();
                var search = $(".search_box").find("select option:selected").text();
                console.log(search)
                $.ajax({
                  type: 'POST',
                  url: ajaxurl,
                  data: {
                      'action' : 'ajax_get_search_posts',
                      'mes' : search,
                  },
                  success: function( response ){
                    var jsonData = JSON.parse( response );
                    console.log(jsonData.length)
                    if (jsonData.length == 0){
                      $("#posts .post").fadeOut(500, function(){
                        $(this).remove();
                        $("#posts").append(
                          "<div id='posts'>\
                              <div class='error_view'>\
                                <p>現在, "+ search +"の関する収録はまだです！<br>\
                                    少々お待ちください\
                                </p>\
                              </div>\
                            </div>\
                          "
                        );
                        $("#posts .post").each(function(index){
                          if (index > 0){
                            $(this).remove();
                          }
                        });

                      });
                    }
                    $(".navigation.container.footer_nav").hide();
                    var list = [];
                    $("#posts .post").fadeOut(500, function(){

                      $(this).remove();
                      $.each(jsonData, function(i, value) {
                        $("#posts").each(function(){
                          $(this).append(
                            '<div class="post">\
                                <div class="post-content">\
                                  <a href="'+ value["permalink"]+'">\
                                    <img src="'+ value["thumbnail"] +'" alt="">\
                                  </a>\
                                </div>\
                                <div class="post-header">\
                                  <h2>\
                                      <a href="'+ value["permalink"]+'">'+ value["post_title"]+'</a>\
                                  </h2>\
                                  <p>\
                                    ' +value["excerpt"]+ '\
                                  </p>\
                                </div>\
                            </div>'
                          );
                        });
                      });

                    });
                  }
                });
                return false;
              });
          }

          $.ajax({
            type: 'GET',
            url: 'https://graph.facebook.com/v5.0/17841424196402135?fields=name%2Cmedia.limit(10)%7Bcaption%2Ccomments%2Clike_count%2Cmedia_url%2Cpermalink%2Ctimestamp%2Cusername%7D&access_token=EAALLFpPwJVkBAMGZBCZBFQZBVUEBXWdJlAXPNZBzOyEEY7O9sqT80yaVdxsQ7eX9SBTkz5OGzLDJAAr4ZAW5uLD3SnZBvkJcBVJmLFE9bGzBUi6iG7ubuguVBcIoWO8ej6epZBcYlLSTtXM9XxsXbcz5Qo8jp0Wj2ZBA2PXgNmOEecDG7UC1ZA5N9',
            dataType: 'json',
            success: function(json) {

                var html_first = '';
                var html_last = '';
                var insta = json.media.data;
                var list = [];
                for (var i = 0; i < insta.length; i++) {
                  list.push(i)
                  if (list.length < 6){
                    try{
                      var comment_count = insta[i].comments.data.length;
                    } catch {
                      var comment_count = 0;
                    }
                    var ua = navigator.userAgent;
                    if ((ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) && ua.indexOf('Mobile') > 0) {
                      html_first +='<div class="post">\
                                <a href="' + insta[i].permalink + '" target="_blank">\
                                  <img src="' + insta[i].media_url + '">\
                                </a>\
                              </div>';
                    } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
                      html_first +='<div class="post">\
                                <a href="' + insta[i].permalink + '" target="_blank">\
                                  <img src="' + insta[i].media_url + '">\
                                </a>\
                              </div>';
                    } else {
                      html_first +='<div class="post">\
                                <a href="' + insta[i].permalink + '" target="_blank">\
                                  <img src="' + insta[i].media_url + '">\
                                </a>\
                                <div class="insta_box">\
                                  <div class="icon">\
                                    <div class="like">\
                                      <svg class="eapps-instagram-feed-posts-item-likes-count-icon" viewBox="0 0 24 24">\
                                          <path d="M17.7,1.5c-2,0-3.3,0.5-4.9,2.1c0,0-0.4,0.4-0.7,0.7c-0.3-0.3-0.7-0.7-0.7-0.7c-1.6-1.6-3-2.1-5-2.1C2.6,1.5,0,4.6,0,8.3\
                                                  c0,4.2,3.4,7.1,8.6,11.5c0.9,0.8,1.9,1.6,2.9,2.5c0.1,0.1,0.3,0.2,0.5,0.2s0.3-0.1,0.5-0.2c1.1-1,2.1-1.8,3.1-2.7\
                                                  c4.8-4.1,8.5-7.1,8.5-11.4C24,4.6,21.4,1.5,17.7,1.5z M14.6,18.6c-0.8,0.7-1.7,1.5-2.6,2.3c-0.9-0.7-1.7-1.4-2.5-2.1\
                                                  c-5-4.2-8.1-6.9-8.1-10.5c0-3.1,2.1-5.5,4.9-5.5c1.5,0,2.6,0.3,3.8,1.5c1,1,1.2,1.2,1.2,1.2C11.6,5.9,11.7,6,12,6.1\
                                                  c0.3,0,0.5-0.2,0.7-0.4c0,0,0.2-0.2,1.2-1.3c1.3-1.3,2.1-1.5,3.8-1.5c2.8,0,4.9,2.4,4.9,5.5C22.6,11.9,19.4,14.6,14.6,18.6z"></path>\
                                      </svg>\
                                      <span class="text">'+insta[i].like_count+'</span>\
                                    </div>\
                                    <div class="comment">\
                                      <svg class="eapps-instagram-feed-posts-item-comments-count-icon" viewBox="0 0 24 24">\
                                          <path d="M1,11.9C1,17.9,5.8,23,12,23c1.9,0,3.7-1,5.3-1.8l5,1.3l0,0c0.1,0,0.1,0,0.2,0c0.4,0,0.6-0.3,0.6-0.6c0-0.1,0-0.1,0-0.2\
                                          l-1.3-4.9c0.9-1.6,1.4-2.9,1.4-4.8C23,5.8,18,1,12,1C5.9,1,1,5.9,1,11.9z M2.4,11.9c0-5.2,4.3-9.5,9.5-9.5c5.3,0,9.6,4.2,9.6,9.5\
                                          c0,1.7-0.5,3-1.3,4.4l0,0c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.1,0,0.1l0,0l1.1,4.1l-4.1-1.1l0,0c-0.1,0-0.1,0-0.2,0\
                                          c-0.1,0-0.2,0-0.3,0.1l0,0c-1.4,0.8-3.1,1.8-4.8,1.8C6.7,21.6,2.4,17.2,2.4,11.9z"></path>\
                                      </svg>\
                                      <span class="text">'+comment_count+'</span>\
                                    </div>\
                                  </div>\
                                  <div class="contents">\
                                    <p class="text">'+insta[i].caption+'</p>\
                                  </div>\
                                </div>\
                              </div>';
                    }


                  } else {

                    html_last += '<div class="post">\
                                <a href="' + insta[i].permalink + '" target="_blank">\
                                  <img src="' + insta[i].media_url + '">\
                                </a>\
                                <div class="insta_box">\
                                  <div class="icon">\
                                    <div class="like">\
                                      <svg class="eapps-instagram-feed-posts-item-likes-count-icon" viewBox="0 0 24 24">\
                                          <path d="M17.7,1.5c-2,0-3.3,0.5-4.9,2.1c0,0-0.4,0.4-0.7,0.7c-0.3-0.3-0.7-0.7-0.7-0.7c-1.6-1.6-3-2.1-5-2.1C2.6,1.5,0,4.6,0,8.3\
                                          c0,4.2,3.4,7.1,8.6,11.5c0.9,0.8,1.9,1.6,2.9,2.5c0.1,0.1,0.3,0.2,0.5,0.2s0.3-0.1,0.5-0.2c1.1-1,2.1-1.8,3.1-2.7\
                                          c4.8-4.1,8.5-7.1,8.5-11.4C24,4.6,21.4,1.5,17.7,1.5z M14.6,18.6c-0.8,0.7-1.7,1.5-2.6,2.3c-0.9-0.7-1.7-1.4-2.5-2.1\
                                          c-5-4.2-8.1-6.9-8.1-10.5c0-3.1,2.1-5.5,4.9-5.5c1.5,0,2.6,0.3,3.8,1.5c1,1,1.2,1.2,1.2,1.2C11.6,5.9,11.7,6,12,6.1\
                                          c0.3,0,0.5-0.2,0.7-0.4c0,0,0.2-0.2,1.2-1.3c1.3-1.3,2.1-1.5,3.8-1.5c2.8,0,4.9,2.4,4.9,5.5C22.6,11.9,19.4,14.6,14.6,18.6z"></path>\
                                      </svg>\
                                      <span class="text">'+insta[i].like_count+'</span>\
                                    </div>\
                                    <div class="comment">\
                                      <svg class="eapps-instagram-feed-posts-item-comments-count-icon" viewBox="0 0 24 24">\
                                          <path d="M1,11.9C1,17.9,5.8,23,12,23c1.9,0,3.7-1,5.3-1.8l5,1.3l0,0c0.1,0,0.1,0,0.2,0c0.4,0,0.6-0.3,0.6-0.6c0-0.1,0-0.1,0-0.2\
                                          l-1.3-4.9c0.9-1.6,1.4-2.9,1.4-4.8C23,5.8,18,1,12,1C5.9,1,1,5.9,1,11.9z M2.4,11.9c0-5.2,4.3-9.5,9.5-9.5c5.3,0,9.6,4.2,9.6,9.5\
                                          c0,1.7-0.5,3-1.3,4.4l0,0c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.1,0,0.1l0,0l1.1,4.1l-4.1-1.1l0,0c-0.1,0-0.1,0-0.2,0\
                                          c-0.1,0-0.2,0-0.3,0.1l0,0c-1.4,0.8-3.1,1.8-4.8,1.8C6.7,21.6,2.4,17.2,2.4,11.9z"></path>\
                                      </svg>\
                                      <span class="text">'+comment_count+'</span>\
                                    </div>\
                                  </div>\
                                  <div class="contents">\
                                    <p class="text">'+insta[i].caption+'</p>\
                                  </div>\
                                </div>\
                              </div>';
                  }
                }
                try {
                  $("#instagram_field .insta_view_block.first .main_box").append(html_first);
                } catch {}
                try {
                  $("#instagram_field .insta_view_block.last .main_box").append(html_last);
                } catch {}
                $("#instagram_field .insta_view_block.first").each(function(){
                  if ($(this).find(".post").length){
                    $("#instagram_field .insta_view_block.first").show();
                  }
                });
                $("#instagram_field .insta_view_block.last").each(function(){

                  if ($(this).find(".post").length){
                    $("#instagram_field .insta_view_block.last").show();
                  }
                });
                if ((ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) && ua.indexOf('Mobile') > 0) {
                  $(".insta_view_block .post").each(function(){
                    $(this).on("touchstart click", function(e){
                      if (e.type == "touchstart" || e.type == "click"){
                        var link = $(this).find("a").attr("href");
                        window.location.href = link;
                      }
                    });
                  });
                } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
                  $(".insta_view_block .post").each(function(){
                    $(this).on("touchstart click", function(e){
                      if (e.type == "touchstart" || e.type == "click"){
                        var link = $(this).find("a").attr("href");
                        window.location.href = link;
                      }
                    });
                  });
                } else {
                  $(".insta_view_block .post").each(function(){
                    $(this).on("mouseover mouseout click", function(e){
                      if (e.type=="mouseover") {
                        $(this).find("a img").css("transform", "scale(1.1)");
                        $(this).find(".insta_box").stop().animate({paddingTop: "0px"},100);
                        $(this).find(".insta_box").css("display", "flex");
                        $(this).find(".insta_box").css("background", "rgb(81, 165,255, .9)");
                      }
                      if (e.type=="mouseout") {
                        $(this).find(".insta_box").stop().animate({paddingTop: "50px"},100);
                        $(this).find("a img").css("transform", "scale(1.0)");
                        $(this).find(".insta_box").hide();
                        $(this).find(".insta_box").css("background", "none");
                      }
                      if (e.type == "click") {
                        var link = $(this).find("a").attr("href");
                        window.location.href = link;
                      }
                    });
                  });
                }
            },
            error: function() {
              $(".error_log").show();
            }
          });
        });
      </script>
      <script>
        $(function(){

          $(".pins .name_text.view").each(function(){
            $(this).find("span").on( 'click', function(e){

                if ($(this).parents(".name_text.view").length) {
                  var text = $(this).html();
                  console.log(text)

                  $.ajax({
                      type: 'POST',
                      url: ajaxurl,
                      data: {
                          'action' : 'ajax_get_new_posts',
                          'mes' : text,
                      },
                      success: function( response ){
                        var jsonData = JSON.parse( response );
                        var count = Object.keys(jsonData).length;
                        if (count > 3){
                          if (jsonData["flag"] == true) {
                            $(".more_link a").show();
                          } else if (jsonData["flag"] == false) {
                            $(".more_link a").hide();
                          }
                        }
                        if (count < 3) {
                          $.each(jsonData, function(i, value) {
                            if (value == jsonData["flag"]){} else {
                              $(".radio_box .contents").each(function(){
                                $(this).append(
                                  '<div class="contents_box">\
                                      <div class="post-content">\
                                        <a href="'+ value["permalink"]+'">\
                                          <img src="'+ value["thumbnail"] +'" alt="">\
                                        </a>\
                                      </div>\
                                      <div class="post-header">\
                                        <h2>\
                                            <a href="'+ value["permalink"]+'">'+ value["post_title"]+'</a>\
                                        </h2>\
                                      </div>\
                                  </div>'
                                );
                              });
                            }
                          });
                        } else {
                          $.each(jsonData, function(i, value) {
                            if (value == jsonData["flag"]){} else {
                              if (i < 2) {
                                $(".radio_box .contents").each(function(){
                                  $(this).prepend(
                                    '<div class="contents_box">\
                                        <div class="post-content">\
                                          <a href="'+ value["permalink"]+'">\
                                            <img src="'+ value["thumbnail"] +'" alt="">\
                                          </a>\
                                        </div>\
                                        <div class="post-header">\
                                          <h2>\
                                              <a href="'+ value["permalink"]+'">'+ value["post_title"]+'</a>\
                                          </h2>\
                                        </div>\
                                    </div>'
                                  );
                                });
                              } else {
                                if ($(".radio_box .contents .list_box").length){} else {
                                  $(".radio_box .contents").each(function(){
                                    $(this).append(
                                      '<div class="list_box"></div>'
                                    );
                                  });
                                }
                                $(".radio_box .contents .list_box").each(function(){
                                  $(this).append(
                                    '<div class="contents_box">\
                                        <div class="post-content">\
                                          <a href="'+ value["permalink"]+'">\
                                            <img src="'+ value["thumbnail"] +'" alt="">\
                                          </a>\
                                        </div>\
                                        <div class="post-header">\
                                          <h2>\
                                              <a href="'+ value["permalink"]+'">'+ value["post_title"]+'</a>\
                                          </h2>\
                                        </div>\
                                    </div>'
                                  );
                                });
                              }
                            }
                          });
                        }
                        $(".radio_box").each(function(){
                          $(this).fadeIn(1000,function(){
                            $(this).css("transform", "scale(1.0)");
                            $(this).find(".contents_box").fadeTo("slow", 1);
                          });
                        });

                      }
                  });
                  return false;
                }
            });
          });
        });
      </script>
      <script type='text/javascript' src='https://awamori-in-the-pocket.herokuapp.com/wp-content/themes/dotinstall/main.js'></script>

  </body>

</html>




