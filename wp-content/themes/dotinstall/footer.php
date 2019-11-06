<!-- <div id="footer" class="container"></div>/footer -->
<?php wp_footer(); ?>

    <footer class="footer_view">
      <div class="footer_info">
        <div class="footer_sub_img">
          <img src="/wp-content/uploads/2019/10/footer_icon.png" alt="">
        </div>
        <div class="copy">
          <a href="<?php echo home_url() ?>">
            <img src="/wp-content/uploads/2019/10/footer_logo.png" alt="">
          </a>
          <img src="/wp-content/uploads/2019/10/copyright.png" alt="">
        </div>
      </div>
    </footer>
      <script>
        var ajaxurl = 'https://awamori-in-the-pocket.herokuapp.com/wp-admin/admin-ajax.php';
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sidebar/3.1.0/jquery.sidebar.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/jquery.wavify.js"></script>
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
                        console.log(jsonData)
                        $.each(jsonData, function(i, value) {
                          if (value == "True") {
                            $(".more_link a").show();
                          } else if (value == "False") {
                            $(".more_link a").hide();
                          }
                        });
                        if (jsonData.length < 3) {
                          $.each(jsonData, function(i, value) {
                            if (value == "False"){} else {
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
                            if (value == "False"){} else {
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
      <script type='text/javascript' src='/wp-content/themes/dotinstall/main.js'></script>
  </body>

</html>



