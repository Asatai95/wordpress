$(function(){
    if ($(".top_main_img.active").length) {} else {
        var placelist = $(".top_main_img").attr("class").split(" ");
        $.each(placelist, function(index, val) {
        if(val.indexOf("tag") != -1){
            $(".top_main_img").removeClass(""+placelist[1]+"");
        }
        });
    }
    var ua = navigator.userAgent;
    var windowWidth = window.innerWidth;
    var wH = $(window).height();
    console.log(wH)
    var windowWidth_other = $(window).width();
    var screen_width = screen.width;
    console.log(screen_width)
    ua_window = window.navigator.userAgent.toLowerCase()
    var timer = false;
    $(window).on("orientationchange resize",function(){
        if ($(".top_main_img.active").length) {} else {
            var placelist = $(".top_main_img").attr("class").split(" ");
            $.each(placelist, function(index, val) {
            if(val.indexOf("tag") != -1){
                $(".top_main_img").removeClass(""+placelist[1]+"");
            }
            });
        }
        var windowWidth = window.innerWidth;
        if (timer !== false) {
            clearTimeout(timer);
        }
        timer = setTimeout(function() {
            if (windowWidth == 375) {
                if (wH == 812) {
                    $(".top_main_img").addClass("tag_812");
                } else if (wH == 568){
                    $(".top_main_img").addClass("tag_568");
                } else if (wH == 667) {
                    $(".top_main_img").addClass("tag_667");
                }
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_375/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_375/v1574001737/back_video.mp4");
                });
            } else if (windowWidth == 414) {
                $(".top_main_img").css("padding-top", "83px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_414/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_414/v1574001737/back_video.mp4");
                });
            } else if (windowWidth == 320) {
                $(".top_main_img").css("padding-top", "83px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_320/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_320/v1574001737/back_video.mp4");
                });
            } else if (windowWidth == 360){
                if (wH == 640) {
                    $(".top_main_img").addClass("tag_640");
                }
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_360/v1574258843/my_media_bg.mp4");
                });
            } else if ( windowWidth == 640){
                $(".top_main_img").css("padding-top", "0px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_640/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_640/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 667) {
                if (wH == 375) {
                    $(".top_main_img").addClass("tag_667");
                }
                $(".top_main_img").css("padding-top", "0px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_667/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_667/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 736) {
                $(".top_main_img").css("padding-top", "0px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_736/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_736/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 568	) {
                $(".top_main_img").css("padding-top", "83px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_568/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_568/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 667) {
                $(".top_main_img").css("padding-top", "0px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_667/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_667/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 896) {
                $(".top_main_img").css("padding-top", "0px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_896/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_896/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 1024) {
                $(".top_main_img").css("padding-top", "0px");
                $(".top_main_img .back_movie").removeClass("active");
            $(".top_main_img .back_movie .main_top_view_video").removeClass("active");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1024/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1024/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 1112) {
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1112/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1112/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 1194) {
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1194/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1194/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 1366) {
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1366/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1366/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 812) {
                $(".top_main_img").css("padding-top", "83px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_812/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_812/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 768) {
                $(".top_main_img").css("padding-top", "0px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_768/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_768/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth == 418) {
                $(".top_main_img").css("padding-top", "83px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_418/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_418/v1574001737/back_video.mp4");
                });
            } else if ( windowWidth < 770 || windowWidth > 765) {
                $(".top_main_img").css("padding-top", "0px");
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_768/v1574258843/my_media_bg.mp4");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_768/v1574001737/back_video.mp4");
                });
            } else {
                $(".main_top_view_video").each(function(){
                    $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/v1574258843/my_media_bg.mp4");
                    $(this).find("video").css("width", "100%");
                });
                $(".travel_info_block .back_video video").each(function(){
                    $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/v1574001737/back_video.mp4");
                });
            }
        }, 100);
    });

    if ((ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) && ua.indexOf('Mobile') > 0) {
        console.log("tets")
        console.log(wH)
        if (windowWidth_other == 375){
            if (wH == 812) {
                $(".top_main_img").addClass("tag_812");
            } else if (wH == 568){
                $(".top_main_img").addClass("tag_568");
            } else if (wH == 667) {
                $(".top_main_img").addClass("tag_667");
            }

            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_375/v1574258843/my_media_bg.mp4");
            });
        } else if (windowWidth_other == 360){
            if (wH == 640) {
                $(".top_main_img").addClass("tag_640");
            }
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_360/v1574258843/my_media_bg.mp4");
            });
        } else if (screen_width == 414) {
            if (wH == 736) {
                $(".top_main_img").addClass("tag_736");
            } else if (wH == 896){
                $(".top_main_img").addClass("tag_896");
            } else if (wH == 812) {
                $(".top_main_img").addClass("tag_812");
            }
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_414/v1574258843/my_media_bg.mp4");
            });
        } else if (windowWidth_other == 320) {
            if (wH == 812) {
                $(".top_main_img").addClass("tag_812");
            } else if (wH == 568){
                $(".top_main_img").addClass("tag_568");
            } else if (wH == 667) {
                $(".top_main_img").addClass("tag_667");
            }
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_320/v1574258843/my_media_bg.mp4");
            });
        }
        if (windowWidth == 375) {
            if (wH == 667) {
                $(".top_main_img").addClass("tag_667");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_375/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_375/v1574001737/back_video.mp4");
            });
        } else if (windowWidth == 414) {
            if (wH == 736) {
                $(".top_main_img").addClass("tag_736");
            } else if (wH == 896){
                $(".top_main_img").addClass("tag_896");
            } else if (wH == 812){
                $(".top_main_img").addClass("tag_812");
            }
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_414/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_414/v1574001737/back_video.mp4");
            });
        } else if (windowWidth == 320) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_320/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_320/v1574001737/back_video.mp4");
            });
        } else if (windowWidth == 360) {
            if (wH == 640) {
                $(".top_main_img").addClass("tag_640");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_360/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_360/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 640){
            if (wH == 360) {
                $(".top_main_img").addClass("tag_640");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_640/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_640/v1574001737/back_video.mp4");
            });
        }  else if ( windowWidth == 736) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_736/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_736/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 568	) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_568/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_568/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 667) {
            if (wH == 667) {
                $(".top_main_img").addClass("tag_667");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_667/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_667/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 896) {
            if (wH == 414) {
                $(".top_main_img").addClass("tag_896");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_896/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_896/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 1024) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1024/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1024/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 1112) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1112/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1112/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 1194) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1194/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1194/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 1366) {
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1366/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1366/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 812) {
            if (wH == 375) {
                $(".top_main_img").addClass("tag_812");
            } else if (wH == 414) {
                $(".top_main_img").addClass("tag_414");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_812/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_812/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 768) {
            $(".top_main_img").css("padding-top", "83px");
            $(".top_main_img .back_movie").addClass("active");
            $(".top_main_img .back_movie .main_top_view_video").addClass("active");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_768/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_768/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 418) {
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_418/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_418/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth < 770 || windowWidth > 765) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_768/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_768/v1574001737/back_video.mp4");
            });
        } else {
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/v1574258843/my_media_bg.mp4");
                $(this).find("video").css("width", "100%");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/v1574001737/back_video.mp4");
            });
        }
        $(".insta_view_block .main_box .post").on("touchstart click", function(e){
            if (e.type == "touchstart" || e.type == "click"){
                e.preventDefault();
                $(this).css("transform", "scale(1.0)");
                return false;
            }
        });
        $(".main_top_map img").each(function(){
            $(this).on("click", function(e){
                e.preventDefault();
                return false;
            });
        });
        $(".background_main_image").each(function(){
            $(this).on("click", function(e){
                e.preventDefault();
                return false;
            });
        });
        $(".map_pin .pins").each(function(){
            $(this).find(".marker img.pin").on("click", function(e){
                e.preventDefault();
                return false;
            });
        });

        $(".css-cancel").each(function(){
            $(this).on("click",function(){
                $(this).fadeOut();
                $(".top_main_img").removeClass("active");
                $("aside").fadeIn(800, function(){
                    $(".video_back_image_box").css("visibility", "visible");
                    $(".top_main_img").css("padding-top", "83px");
                    $(".top_main_img .back_movie video").css("opacity", ".7");
                    $(".top_main_img .back_movie video").addClass("active");
                    $("body").css("position", "absolute");
                    date = new Date();
                    date.setTime( date.getTime() + ( 15 * 60 * 1000 ));
                    $.cookie("awamori", "active", { expires : date });
                });
            });
        });
        if ($.cookie("awamori")){
            $(".css-cancel").hide();
            $("aside").show();
            $(".video_back_image_box").show();
            $(".video_back_image_box").css("visibility", "visible");
            $(".top_main_img").css("padding-top", "83px");
            $(".top_main_img .back_movie video").css("opacity", ".7");
            $(".top_main_img .back_movie video").addClass("active");
            $("body").css("position", "absolute");
        } else {
            $(".top_main_img").addClass("active");
        }

    } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
        var windowWidth = window.innerWidth;
        var windowWidth_other = $(window).width();
        $(".insta_view_block .main_box .post").on("touchstart click", function(e){
            if (e.type == "touchstart" || e.type == "click"){
                e.preventDefault();
                $(this).css("transform", "scale(1.0)");
                return false;
            }
        });
        $(".main_top_map img").each(function(){
            $(this).on("click", function(e){
                e.preventDefault();
                return false;
            });
        });
        $(".background_main_image").each(function(){
            $(this).on("click", function(e){
                e.preventDefault();
                return false;
            });
        });
        $(".map_pin .pins").each(function(){
            $(this).find(".marker img.pin").on("click", function(e){
                e.preventDefault();
                return false;
            });
        });

        $(".css-cancel").each(function(){
            $(this).on("click",function(){
                $(this).fadeOut();
                $(".top_main_img").removeClass("active");
                $("aside").fadeIn(800, function(){
                    $(".video_back_image_box").css("visibility", "visible");
                    $(".top_main_img").css("padding-top", "83px");
                    $(".top_main_img .back_movie video").css("opacity", ".7");
                    $(".top_main_img .back_movie video").addClass("active");
                    $("body").css("position", "absolute");
                    date = new Date();
                    date.setTime( date.getTime() + ( 15 * 60 * 1000 ));
                    $.cookie("awamori", "active", { expires : date });
                });
            });
        });
        if ($.cookie("awamori")){
            $(".css-cancel").hide();
            $("aside").show();
            $(".video_back_image_box").show();
            $(".video_back_image_box").css("visibility", "visible");
            $(".top_main_img").css("padding-top", "83px");
            $(".top_main_img .back_movie video").css("opacity", ".7");
            $(".top_main_img .back_movie video").addClass("active");
            $("body").css("position", "absolute");
        } else {
            $(".top_main_img").addClass("active");
        }
        console.log("tetsaaaaaaa")
        if (windowWidth == 375) {
            if (wH == 812) {
                $(".top_main_img").css("padding-top", "150px");
            } else if (wH == 568){
                $(".top_main_img").css("padding-top", "35px");
            } else if (wH == 667) {

            }
            $(".top_main_img.active").css("padding-top", "35px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_375/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_375/v1574001737/back_video.mp4");
            });
        } else if (screen_width == 414) {
            if (wH == 736) {
                $(".top_main_img").addClass("tag_736");
            } else if (wH == 896){
                $(".top_main_img").addClass("tag_896");
            } else if (wH == 812){
                $(".top_main_img").addClass("tag_812");
            }
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_414/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_414/v1574001737/back_video.mp4");
            });
        } else if (windowWidth == 320) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_320/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_320/v1574001737/back_video.mp4");
            });
        } else if (windowWidth == 360) {
            if (wH == 640) {
                $(".top_main_img").addClass("tag_640");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_360/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_360/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 375) {
            if (wH == 667) {
                $(".top_main_img").addClass("tag_667");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_667/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_667/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 640){
            if (wH == 360) {
                $(".top_main_img").addClass("tag_640");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_640/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_640/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 667) {
            if (wH == 375) {
                $(".top_main_img").addClass("tag_667");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_667/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_667/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 736) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_736/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_736/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 568	) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_568/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_568/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 667) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_667/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_667/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 896) {
            if (wH == 414) {
                $(".top_main_img").addClass("tag_896");
            }

            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_896/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_896/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 1024) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_768,w_1024/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1024/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 1112) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1112/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1112/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 1194) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1194/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1194/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 1366) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_1366/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_1366/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 812) {
            if (wH == 375) {
                $(".top_main_img").addClass("tag_812");
            } else if (wH == 414) {
                $(".top_main_img").addClass("tag_414");
            }
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_812/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_812/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 768) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_768/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_768/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth == 418) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_418/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_418/v1574001737/back_video.mp4");
            });
        } else if ( windowWidth < 770 || windowWidth > 765) {
            $(".top_main_img").css("padding-top", "83px");
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_fill,h_500,w_768/v1574258843/my_media_bg.mp4");
            });
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/c_scale,h_450,w_768/v1574001737/back_video.mp4");
            });
        } else {
            $(".main_top_view_video").each(function(){
                $(this).find("video").attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/v1574258843/my_media_bg.mp4");
            });
            $(this).find("video").css("width", "100%");
            $(".travel_info_block .back_video video").each(function(){
                $(this).attr("src", "https://res.cloudinary.com/hchyaihwv/video/upload/v1574001737/back_video.mp4");
            });
        }
    }

    if ($(".container.radio_content_view").length) {
        $("aside").addClass("page");
    }
    if ($(".container.single").length){
        $("aside").addClass("page");
    }
    if($(".container.main.map_view").length){
        $(window).scroll(function() {
            var scroll = $(this).scrollTop();

            if (scroll > 2800){
                $("#instagram_field").css("margin-top", "0");
            } else {
                $("#instagram_field").css("margin-top", "250px");
            }
            if (scroll > 2100){
                $(".travel_info_block").css("margin-top", "0");
            } else {
                $(".travel_info_block").css("margin-top", "250px");
            }
            if(scroll > 1640){
                $(".radio_mian_box").css("margin-top", "0");
            } else {
                $(".radio_mian_box").css("margin-top", "250px");
            }
        });
    }
    $(".footer_sub_img img").each(function(){
        $(this).on("mouseover", function(){
            var item = $('.footer_sub_img');
            var itemRight = item.position().left;
            if (itemRight == 0) {
                $(this).parents(".footer_sub_img").animate({
                    "left": -200
                },{
                    duration: 500,
                    queue: false
                });
            } else if (itemRight == -200){
                $(this).parents(".footer_sub_img").animate({
                    "left": 600
                },{
                    duration: 500,
                    queue: false
                });
            } else if (itemRight == 600){
                $(this).parents(".footer_sub_img").animate({
                    "left": 1000
                },{
                    duration: 500,
                    queue: false
                });
            } else if (itemRight == 1000){
                $(this).parents(".footer_sub_img").animate({
                    "left": 0
                },{
                    duration: 500,
                    queue: false
                });
            }
        });
    });
    $(".background_mian_image").each(function(){
        $(this).on("click",function(e){
            e.preventDefault();
            return false;
        });
    });
    $(window).ready(function(){

        $('html,body').animate({ scrollTop: 0 }, '1');
    });
    if ($(".container.main.map_view").length){
        $(window).scroll(function(){
            if( $(window).scrollTop() + $(window).height() > 1000){
                $("aside").fadeIn(800);
            } else {
                $("aside").fadeOut();
            }
            var view_top = $(".container.main.map_view").offset();
            var scroll_count = 1.0 - $(window).scrollTop()/4500;
            var scroll_count_other = scroll_count - $(window).scrollTop()/500;
            if ($(window).scrollTop() > 800){
                $(".main_top_img").addClass("disactive");
            } else {
                if ($(".main_top_img.disactive").length) {
                    $(".main_top_img.disactive").removeClass("disactive");
                }
            }
            // if ($(window).scrollTop() > 1000){
            //     $(".main_top_img.disactive").css("display", "none");
            // }
        });

        $(window).scroll(function(){
            var scroll_count = 1.0 - $(window).scrollTop()/500;
            var scroll_opacity = .2 + $(window).scrollTop()/250;
            var scroll_out_opacity = 1.0 - $(window).scrollTop()/250;

            if (scroll_count < .85) {
                $(".main_top_img img.main_view_image").css("border-radius", "10px");
            } else {
                $(".main_top_img img.main_view_image").css("border-radius", "0px");
            }
            if (scroll_count < .9 ){
                $(".top_main_img .home_icon, .top_main_img .check_icon, .top_main_img .bar_icon").css(
                    'opacity', scroll_opacity
                );
                $(".scroll_text span").css("display","none");
                $(".scroll_text .icon_arrow_down_white").css("display","none");
            } else {
                $(".top_main_img .home_icon, .top_main_img .check_icon, .top_main_img .bar_icon").css(
                    'opacity', 0
                );
                $(".scroll_text span").css("display","block");
                $(".scroll_text .icon_arrow_down_white").css("display","block");
            }
            if (scroll_count < 0.298 && scroll_count > 0.15) {
                $(".top_main_img").css(
                    'transform', 'scale(0.298)'
                );
                $(".top_main_img").hide();
                if ($(".back_img.active").length) {
                    $(".back_img").removeClass("active");
                    $(".back_img").show();
                    $(".iphone_main_back_image .sliding_pictures").removeClass("active");
                    $(".nav_bar_icon").removeClass("active");
                    $(".iphone_main_back_image_text").removeClass("active");
                }
            } else if (scroll_count < 0.15){
                if ($(".back_img.active").length) {} else {
                    $(".back_img").addClass("active");
                    $(".back_img").show();
                    $(".iphone_main_back_image .sliding_pictures").addClass("active");
                    $(".nav_bar_icon").addClass("active");
                    $(".iphone_main_back_image_text").addClass("active");
                }
            } else {
                $(".top_main_img").css(
                    'transform', 'scale('+scroll_count+')'
                );
                $(".top_main_img").show();
            }
        });
    }

    $(".radio_content .post-content a img").each(function(){
        $(this).on("mouseover mouseout", function(e){
            if (e.type == "mouseover"){
                $(this).css("transform", "scale(1.15)");
            }
            if (e.type == "mouseout"){
                $(this).css("transform", "scale(1.0)");
            }
        });
    });

    $('#wave').wavify({
        height: 20,
        bones: 3,
        amplitude: 40,
        color: "#51a5ff",
        speed: .25
    });

    $(".cancel .cancel_back").each(function(){
        $(this).on("mouseover mouseout click", function(e){
            if(e.type == "mouseover") {
                $(this).find("span").css("transform", "rotate(45deg) scale(1.1)");
                $(this).find("span:before").css("transform", "rotate(45deg) scale(1.1)");
            }
            if(e.type == "mouseout") {
                $(this).find("span").css("transform", "rotate(45deg) scale(1.0)");
                $(this).find("span:before").css("transform", "rotate(45deg) scale(1.0)");
            }
            if(e.type == "click") {
                e.preventDefault();
                if($(".container.main .post .main_top_map .map_pin.active").length){
                } else {
                    $(".container.main .post .main_top_map .map_pin").addClass("active");
                }

                $(".pins .name_text span").each(function(){
                    try {
                        var list = $(this).attr("class").split(" ");
                        if ($.inArray("text_color" ,list) > -1){
                            $(this).removeClass("text_color");
                        }
                    } catch {
                        var list = $(this).attr("class");
                        if (list == "text_color"){
                            $(this).removeClass("text_color");
                        }
                    }
                });

                if ($(this).parents(".name_text.view").length){
                    $(".container.main .post .main_top_map .map_pin .pins .name_text").removeClass("view");
                }
                if ($(".container.main .post .main_top_map .map_pin .pins .name_text.disactive").length){
                    $(".container.main .post .main_top_map .map_pin .pins .name_text").removeClass("disactive");
                } else {
                    $(".container.main .post .main_top_map .map_pin .pins .name_text").addClass("disactive");
                }

                $(this).parents(".name_text").removeClass("disactive");
                if ($(".container.main .post .main_top_map.active").length){
                    $(".container.main .post .main_top_map").addClass("map");
                } else {
                    $(".container.main .post .main_top_map").addClass("active");
                    $(".container.main .post .main_top_map.active").css("transform", "scale(.5)");

                }

                if ($(".pins a img.pin_icon_active").length){
                    $(".pins a img.pin_icon_active").remove();

                    $(".pins a img").each(function(){
                        $(this).removeClass("active");
                    });
                } else {
                    $(".pins a").prepend(
                        '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png" alt="" class="pin_icon_active">'
                    );

                    $(".pins a img").each(function(){
                        $(this).addClass("active");
                    });
                }

                if ($(".container.main .post .main_top_map.active.map").length){
                    $(".container.main .post .main_top_map .map_pin.active").removeClass("map_view");
                    $(".container.main .post .main_top_map .map_pin").css("width", "auto");
                    $(".container.main .post .main_top_map .map_pin").css("height", "auto");
                    $(".radio_box").each(function(){
                        $(this).css("transform", "scale(.5)");
                        $(this).animate(
                            {"right": -600}, 1000, function(){
                                $(this).fadeOut(800, function(){

                                    $(this).find(".contents").each(function(){
                                        $(this).find("div").remove();
                                    });
                                    // $(".container.main .post .main_top_map.active.map").animate(
                                    //     {}, 300);
                                    // $(".container.main .post .main_top_map.active.map").animate(
                                    //     {}, 800
                                    // );
                                    $(".container.main .post .main_top_map .map_pin").css("padding-bottom", "0px");
                                    $(".container.main .post .main_top_map.active.map").animate(
                                        {
                                        "top": 0,
                                        "right": 0,
                                        "bottom": 0,
                                        "left": 0}, 800 , function(){
                                            $(".container.main .post .main_top_map").delay(1000).queue(function(){
                                                $(this).css("transform", "scale(1.0)");
                                                $(this).find(".map_pin").css("width", "410px");
                                                $(this).find(".map_pin").css("height", "562px");
                                            });
                                        }
                                    );
                                    $(this).css("right", "0px");
                                    if ($(".container.main .post .main_top_map.active").length){
                                        $(".container.main .post .main_top_map").removeClass("map");
                                        $(".container.main .post .main_top_map").removeClass("active");

                                    } else {
                                        $(".container.main .post .main_top_map").addClass("active");
                                    }

                                });
                            }
                        );
                    });
                } else {

                    $(document).ready(function(){

                        $(".container.main .post .main_top_map .map_pin.active").addClass("map_view");
                        $(".container.main .post .main_top_map.active").stop().animate(
                            {
                                'top': '200px',
                                'right': '700px',
                                'left': '55px',
                                'bottom': '0px'
                            }, 800, function(){

                                $(".container.main .post .main_top_map .map_pin").delay(1000).queue(function(){
                                    $(this).css("width","410px");
                                    $(this).css("height","562px");
                                });
                                setTimeout(function(){
                                    $(".container.main .post .main_top_map .map_pin.active").removeClass("map_view");
                                },1500);

                            });

                    });
                }
                return false;
            }
        });
    });

    $(".container.main .post .main_top_map .map_pin .pins a img").hide();

    $(".pins.hae").each(function(){
        var array = [];
        $(this).find(".name_text span").each(function(index){
            array.push(index);
        });
        if (array.length < 2) {
            $(this).find(".name_text").addClass("active");
        } else {
            $(this).find(".name_text").removeClass("active");
        }
    });
    $(".pins.nakagusuku").each(function(){
        var array = [];
        $(this).find(".name_text span").each(function(index){
            array.push(index)
        });
        if (array.length == 1) {
            $(this).find(".name_text").addClass("active");
        } else if (array.length == 2) {
            $(this).find(".name_text").removeClass("active");
            $(this).find(".name_text").addClass("other_active");
        } else if (array.length == 3) {
            $(this).find(".name_text").removeClass("active");
            $(this).find(".name_text").removeClass("other_active");
        }
    });

    $(".map_pin .pins").each(function(){
        $(this).find(".name_text span").on("mouseover mouseout click", function(e){
            if(e.type == "mouseover") {

                if ($(this).text() == "中城村") {
                    $(this).parents(".map_pin").find(".nakagusuku a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".nakagusuku a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                    if ($(this).parents('.pins.nakagusuku').find("a img.pin_icon_active").length){
                    } else {
                        $(this).parents(".map_pin").find(".nakagusuku a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin_icon">'
                        );
                        $(this).parents(".map_pin").find(".nakagusuku a .pin_icon").animate(
                            {"bottom": "45px"},
                            {
                                complete: function() {
                                    $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                    $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                    setTimeout(function(){
                                        $("img.pin_icon").addClass("after");
                                    },2500);
                                },
                            }
                        );
                    }
                } else if ($(this).text() == "西原町") {
                    $(this).parents(".map_pin").find(".nishihara a img").show();
                    $(this).parents(".map_pin").find(".nishihara a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".nishihara a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                    if ($(this).parents('.pins.nishihara').find("a img.pin_icon_active").length){
                    } else {
                        $(this).parents(".map_pin").find(".nishihara a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin_icon">'
                        );
                        $(this).parents(".map_pin").find(".nishihara a .pin_icon").animate(
                            {"bottom": "45px"},
                            {
                                complete: function() {
                                    $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                    $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                    setTimeout(function(){
                                        $("img.pin_icon").addClass("after");
                                    },2500);
                                },
                            }
                        );
                    }
                } else if ($(this).text() == "与那原町") {
                    $(this).parents(".map_pin").find(".yonabaru a img").show();
                    $(this).parents(".map_pin").find(".yonabaru a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".yonabaru a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                    if ($(this).parents('.pins.yonabaru').find("a img.pin_icon_active").length){
                    } else {
                        $(this).parents(".map_pin").find(".yonabaru a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin_icon">'
                        );
                        $(this).parents(".map_pin").find(".yonabaru a .pin_icon").animate(
                            {"bottom": "55px"},
                            {
                                complete: function() {
                                    $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                    $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                    setTimeout(function(){
                                        $("img.pin_icon").addClass("after");
                                    },2500);
                                },
                            }
                        );
                    }
                } else if ($(this).text() == "南風原町") {
                    $(this).parents(".map_pin").find(".hae a img").show();
                    $(this).parents(".map_pin").find(".hae a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".hae a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                    if ($(this).parents('.pins.hae').find("a img.pin_icon_active").length){
                    } else {
                        $(this).parents(".map_pin").find(".hae a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin_icon">'
                        );
                        $(this).parents(".map_pin").find(".hae a .pin_icon").animate(
                            {"bottom": "45px"},
                            {
                                complete: function() {
                                    $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                    $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                    setTimeout(function(){
                                        $("img.pin_icon").addClass("after");
                                    },2500);
                                },
                            }
                        );
                    }
                } else if ($(this).text() == "豊見城市") {
                    $(this).parents(".map_pin").find(".tomishiro a img").show();
                    $(this).parents(".map_pin").find(".tomishiro a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".tomishiro a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });

                    if ($(this).parents('.pins.tomishiro').find("a img.pin_icon_active").length){
                    } else {
                        $(this).parents(".map_pin").find(".tomishiro a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin_icon">'
                        );
                        $(this).parents(".map_pin").find(".tomishiro a .pin_icon").animate(
                            {"bottom": "45px"},
                            {
                                complete: function() {
                                    $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                    $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                    setTimeout(function(){
                                        $("img.pin_icon").addClass("after");
                                    },2500);
                                },
                            }
                        );
                    }

                } else {
                    if ($(this).parents('.pins').find("a img.pin_icon_active").length){}{
                        if ($(this).parents('.pins').find("a img.pin_icon_active").length){

                        } else {
                            $(this).parents(".pins").find("a img").show();
                            $(this).parents(".pins").find("a img").fadeIn(function(){
                                $(this).css("transform", "translate(-3px,-3px) scale(.98)");
                            });
                            $(this).parents(".pins").find("a").prepend(
                                '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794941/map_pin_icon.png" alt="" class="pin_icon">'
                            );
                            if($(this).parents(".pins.oogimi").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "60px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.higashi").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "50px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.nago").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "70px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.nakizin").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "60px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.motobu").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "45px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.ginoza").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "40px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.onna").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "35px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.yomitan").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "45px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.kadena").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "35px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.ginowan").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "45px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.urasoe").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "45px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.kitanaka").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "45px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.nanzyou").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "45px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.naha").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "40px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },3000);
                                        },
                                    }
                                );
                            } else if ($(this).parents(".pins.kin").length){
                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "40px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            } else {

                                $(this).parents(".pins").find("a .pin_icon").animate(
                                    {"bottom": "25px"},
                                    {
                                        complete: function() {
                                            $(this).parents(".pins").find("a img.pin_icon").attr("src", "https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png");
                                            $(this).parents(".pins").find("a img.pin_icon").addClass("action");
                                            setTimeout(function(){
                                                $("img.pin_icon").addClass("after");
                                            },2500);
                                        },
                                    }
                                );
                            }
                        }
                    }
                }

                $(this).css("border-bottom", "3px solid #222");
                $(this).parents(".name_text").find("img").hide();
                if ($(this).parents(".main_top_map.active").length){} else{
                    if ($(this).parents(".name_text.view").length){} else {
                        $(".container.main .post .main_top_map .map_pin .pins .name_text").addClass("view");
                    }
                }
            }
            if(e.type == "mouseout") {
                $(".map_pin .pins a img").hide();
                $("img.pin_icon").removeClass("after");
                $(".map_pin .pins a img").css("transform", "none");
                $(this).css("border-bottom", "none");
                $(this).parents(".name_text").find("img").show();
                $(this).parents(".map_pin").find(".pins a .pin_icon").remove();
            }

            if(e.type == "click") {
                if($(".container.main .post .main_top_map .map_pin.active").length){
                } else {
                    $(".container.main .post .main_top_map .map_pin").addClass("active");
                }

                try {
                    var list = $(this).attr("class").split(" ");
                    console.log(list)
                    if ($.inArray("text_color" ,list) > -1){
                        $(this).removeClass("text_color");
                    } else {
                        $(this).addClass("text_color");
                    }
                } catch {
                    var list = $(this).attr("class");
                    if (list == "text_color"){
                        $(this).removeClass("text_color");
                    } else {
                        $(this).addClass("text_color");
                    }
                }

                if ($(this).parents(".name_text.view").length){
                    $(".container.main .post .main_top_map .map_pin .pins .name_text").removeClass("view");
                }
                if ($(".container.main .post .main_top_map .map_pin .pins .name_text.disactive").length){
                    $(".container.main .post .main_top_map .map_pin .pins .name_text").removeClass("disactive");
                } else {
                    $(".container.main .post .main_top_map .map_pin .pins .name_text").addClass("disactive");
                }

                $(this).parents(".name_text").removeClass("disactive");
                if ($(".container.main .post .main_top_map.active").length){
                    $(".container.main .post .main_top_map").addClass("map");
                } else {
                    $(".container.main .post .main_top_map").addClass("active");
                    $(".container.main .post .main_top_map.active").css("transform", "scale(.5)");

                }

                if ($(this).text() == "与那原町"){
                    if ($(this).parents(".map_pin").find(".pins.yonabaru a img.pin_icon_active").length){
                        $(this).parents(".map_pin").find(".pins.yonabaru a img.pin_icon_active").remove();

                        $(this).parents(".map_pin").find(".pins.yonabaru a img").each(function(){
                            $(this).removeClass("active");
                        });
                    } else {
                        $(this).parents(".map_pin").find(".pins.yonabaru a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png" alt="" class="pin_icon_active">'
                        );
                        $(this).parents(".map_pin").find(".pins.yonabaru a img").each(function(){
                            $(this).addClass("active");
                        });
                    }
                } else if ($(this).text() == "中城村") {
                    if ($(this).parents(".map_pin").find(".pins.nakagusuku a img.pin_icon_active").length){
                        $(this).parents(".map_pin").find(".pins.nakagusuku a img.pin_icon_active").remove();

                        $(this).parents(".map_pin").find(".pins.nakagusuku a img").each(function(){
                            $(this).removeClass("active");
                        });
                    } else {
                        $(this).parents(".map_pin").find(".pins.nakagusuku a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png" alt="" class="pin_icon_active">'
                        );
                        $(this).parents(".map_pin").find(".pins.nakagusuku a img").each(function(){
                            $(this).addClass("active");
                        });
                    }
                } else if ($(this).text() == "西原町") {
                    if ($(this).parents(".map_pin").find(".pins.nishihara a img.pin_icon_active").length){
                        $(this).parents(".map_pin").find(".pins.nishihara a img.pin_icon_active").remove();

                        $(this).parents(".map_pin").find(".pins.nishihara a img").each(function(){
                            $(this).removeClass("active");
                        });
                    } else {
                        $(this).parents(".map_pin").find(".pins.nishihara a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png" alt="" class="pin_icon_active">'
                        );
                        $(this).parents(".map_pin").find(".pins.nishihara a img").each(function(){
                            $(this).addClass("active");
                        });
                    }
                } else if ($(this).text() == "豊見城市") {
                    if ($(this).parents(".map_pin").find(".pins.tomishiro a img.pin_icon_active").length){
                        $(this).parents(".map_pin").find(".pins.tomishiro a img.pin_icon_active").remove();

                        $(this).parents(".map_pin").find(".pins.tomishiro a img").each(function(){
                            $(this).removeClass("active");
                        });
                    } else {
                        $(this).parents(".map_pin").find(".pins.tomishiro a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png" alt="" class="pin_icon_active">'
                        );
                        $(this).parents(".map_pin").find(".pins.tomishiro a img").each(function(){
                            $(this).addClass("active");
                        });
                    }
                } else if ($(this).text() == "南風原町") {
                    if ($(this).parents(".map_pin").find(".pins.hae a img.pin_icon_active").length){
                        $(this).parents(".map_pin").find(".pins.hae a img.pin_icon_active").remove();

                        $(this).parents(".map_pin").find(".pins.hae a img").each(function(){
                            $(this).removeClass("active");
                        });
                    } else {
                        $(this).parents(".map_pin").find(".pins.hae a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png" alt="" class="pin_icon_active">'
                        );
                        $(this).parents(".map_pin").find(".pins.hae a img").each(function(){
                            $(this).addClass("active");
                        });
                    }
                } else {
                    if ($(this).parents('.pins').find("a img.pin_icon_active").length){
                        $(this).parents(".pins").find("a img.pin_icon_active").remove();

                        $(this).parents(".pins").find("a img").each(function(){
                            $(this).removeClass("active");
                        });
                    } else {
                        $(this).parents(".pins").find("a").prepend(
                            '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573794792/map_pin_icon_after.png" alt="" class="pin_icon_active">'
                        );

                        $(this).parents(".pins").find("a img").each(function(){
                            $(this).addClass("active");
                        });
                    }
                }

                if ($(".container.main .post .main_top_map.active.map").length){
                    $(".container.main .post .main_top_map .map_pin.active").removeClass("map_view");
                    $(".container.main .post .main_top_map .map_pin").css("width", "auto");
                    $(".container.main .post .main_top_map .map_pin").css("height", "auto");
                    $(".radio_box").each(function(){
                        $(this).css("transform", "scale(.5)");
                        $(this).animate(
                            {"right": -600}, 1000, function(){
                                $(this).fadeOut(800, function(){

                                    $(this).find(".contents").each(function(){
                                        $(this).find("div").remove();
                                    });
                                    // $(".container.main .post .main_top_map.active.map").animate(
                                    //     {}, 300);
                                    // $(".container.main .post .main_top_map.active.map").animate(
                                    //     {}, 800
                                    // );
                                    $(".container.main .post .main_top_map .map_pin").css("padding-bottom", "0px");
                                    $(".container.main .post .main_top_map.active.map").animate(
                                        {
                                        "top": 0,
                                        "right": 0,
                                        "bottom": 0,
                                        "left": 0}, 800 , function(){
                                            $(".container.main .post .main_top_map").delay(1000).queue(function(){
                                                $(this).css("transform", "scale(1.0)");
                                                $(this).find(".map_pin").css("width", "410px");
                                                $(this).find(".map_pin").css("height", "562px");
                                            });
                                        }
                                    );
                                    $(this).css("right", "0px");
                                    if ($(".container.main .post .main_top_map.active").length){
                                        $(".container.main .post .main_top_map").removeClass("map");
                                        $(".container.main .post .main_top_map").removeClass("active");

                                    } else {
                                        $(".container.main .post .main_top_map").addClass("active");
                                    }

                                });
                            }
                        );
                    });
                } else {

                    $(document).ready(function(){

                        $(".container.main .post .main_top_map .map_pin.active").addClass("map_view");
                        $(".container.main .post .main_top_map.active").stop().animate(
                            {
                                'top': '200px',
                                'right': '700px',
                                'left': '55px',
                                'bottom': '0px'
                            }, 800, function(){

                                $(".container.main .post .main_top_map .map_pin").delay(1000).queue(function(){
                                    $(this).css("width","410px");
                                    $(this).css("height","562px");
                                });
                                setTimeout(function(){
                                    $(".container.main .post .main_top_map .map_pin.active").removeClass("map_view");
                                },1500);

                            });

                    });
                }
            }
        });
    });

    $(".navigation.container.footer_nav div a").each(function(){
        $(this).on("mouseover mouseout", function(e){
            if (e.type == "mouseover") {
                $(this).css("background-color", "rgb(255,255,255)");
                $(this).css("border", "3px solid rgb(81, 165, 255)");
                $(this).css("color", "rgb(81, 165, 255)");
            }
            if (e.type == "mouseout") {
                $(this).css("background-color", "rgb(81, 165, 255)");
                $(this).css("border", "none");
                $(this).css("color", "#fff");
            }
        });
    });

    $(".navigation.single div a").each(function(){
        $(this).on("mouseover mouseout", function(e){
            if (e.type == "mouseover") {
                $(this).css("background-color", "rgb(255,255,255)");
                $(this).css("border", "3px solid rgb(81, 165, 255)");
                $(this).css("color", "rgb(81, 165, 255)");
            }
            if (e.type == "mouseout") {
                $(this).css("background-color", "rgb(81, 165, 255)");
                $(this).css("border", "none");
                $(this).css("color", "#fff");
            }
        });
    });

    var w = $(window).width();
    if (w <= 500) {
        $('.device').each(function(){
            $(this).find(".sp").show();
            $(this).find(".tb").hide();
            $(".contact_form_box.tb").hide();
            $(".user_info .box_info").css('flex-direction', "column");
            $(".user_info .box_info .profile").removeClass("tb");
        });
    } else if (w <= 770) {
        $('.device').each(function(){
            $(this).find(".tab_view").show();
            $(this).find(".sp").hide();
            $(this).find(".tb").hide();
            $(".contact_form_box.sp").hide();
            $(".contact_form_box.tb").show();
            $(".user_info .box_info").css('flex-direction', "column");
            $(".user_info .box_info .profile").addClass("tb");
        });
    } else if (w <= 900 && w >= 770) {
        $('.device').each(function(){
            $(this).find(".sp").hide();
            $(this).find(".tb").show();
            $(".contact_form_box.sp").hide();
            $(".contact_form_box.tb").show();
            $(".user_info .box_info").css('flex-direction', "initial");
            $(".user_info .box_info .profile").removeClass("tb");
        });
    } else if (w <= 1024 && w >= 1000) {
        $(".nav_header_menu").removeClass("sp");
        $(".contact_form_box.sp").hide();
        $(".contact_form_box.tb").show();
    } else {
        $('.device').each(function(){
            $(this).find(".sp").hide();
            $(this).find(".tb").show();
            $(".contact_form_box.tb").hide();
        });
    }

    $(function(){
        if ($(".container.main").length) {
            $(".navbar-toggler").each(function(){
                $(this).on("click",function(){
                    $("aside").toggleClass("active");
                    if ($(".nav_header_menu.sp").length){
                        if ($(".nav_header_menu").css("bottom") == "-75px"){
                            $(".nav_header_menu").fadeOut(400, function(){
                                $("body").css("position", "relative");
                            }).animate({
                                'bottom': '-700px',
                            },{
                                duration: 500,
                                queue: false
                            });
                        } else {
                            $(".nav_header_menu").fadeIn(400, function(){
                                $("body").css("position", "fixed");
                            }).animate({
                                'bottom': '-75px',
                            },{
                                duration: 500,
                                queue: false
                            });

                        }
                    } else {
                        if ($(".nav_header_menu").css("bottom") == "-96px"){
                            $(".nav_header_menu").fadeOut(400, function(){
                                $("body").css("position", "relative");
                            }).animate({
                                'bottom': '-700px',
                            },{
                                duration: 500,
                                queue: false
                            });
                        } else {
                            $(".nav_header_menu").fadeIn(400, function(){
                                $("body").css("position", "fixed");
                            }).animate({
                                'bottom': '-96px',
                            },{
                                duration: 500,
                                queue: false
                            });

                        }
                    }

                    $(this).find("span").each(function(){
                        $(this).toggleClass("active");
                    });

                });
            });
        } else {
            $(".navbar-toggler").each(function(){
                $(this).on("click",function(){
                    $("aside").toggleClass("active");
                    if ($(".nav_header_menu.sp").length){
                        if ($(".nav_header_menu").css("bottom") == "-75px"){
                            $(".nav_header_menu").fadeOut(400, function(){
                                $("body").css("position", "relative");
                            }).animate({
                                'bottom': '-700px',
                            },{
                                duration: 500,
                                queue: false
                            });
                        } else {
                            $(".nav_header_menu").fadeIn(400, function(){
                                $("body").css("position", "fixed");
                            }).animate({
                                'bottom': '-75px',
                            },{
                                duration: 500,
                                queue: false
                            });

                        }
                    } else {
                        if ($(".nav_header_menu").css("bottom") == "-96px"){
                            $(".nav_header_menu").fadeOut(400, function(){
                                $("body").css("position", "relative");
                            }).animate({
                                'bottom': '-700px',
                            },{
                                duration: 500,
                                queue: false
                            });
                        } else {
                            $(".nav_header_menu").fadeIn(400, function(){
                                $("body").css("position", "fixed");
                            }).animate({
                                'bottom': '-96px',
                            },{
                                duration: 500,
                                queue: false
                            });

                        }
                    }
                    $(this).find("span").each(function(){
                        $(this).toggleClass("active");
                    });
                });
            });
        }
    });
});


