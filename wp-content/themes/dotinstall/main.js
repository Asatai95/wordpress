$(function(){
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
                if ($(".container.main .post .main_top_map.active.map").length){
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
                                    $(".container.main .post .main_top_map.active.map").animate(
                                        {
                                        "top": 0,
                                        "right": 0,
                                        "bottom": 0,
                                        "left": 0}, 800 , function(){
                                            $(".container.main .post .main_top_map").delay(1000).queue(function(){
                                                $(this).css("transform", "scale(1.0)");
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
                        $(".container.main .post .main_top_map.active").stop().animate(
                            {
                                'top': '200px',
                                'right': '700px',
                                'left': '55px',
                                'bottom': '0px'
                            }, 800);
                    });

                }
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
                } else if ($(this).text() == "西原町") {
                    $(this).parents(".map_pin").find(".nishihara a img").show();
                    $(this).parents(".map_pin").find(".nishihara a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".nishihara a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                } else if ($(this).text() == "与那原町") {
                    $(this).parents(".map_pin").find(".yonabaru a img").show();
                    $(this).parents(".map_pin").find(".yonabaru a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".yonabaru a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                } else if ($(this).text() == "南風原町") {
                    $(this).parents(".map_pin").find(".hae a img").show();
                    $(this).parents(".map_pin").find(".hae a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".hae a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                } else if ($(this).text() == "豊見城市") {
                    $(this).parents(".map_pin").find(".tomishiro a img").show();
                    $(this).parents(".map_pin").find(".tomishiro a img").fadeIn(function(){
                        $(this).parents(".map_pin").find(".tomishiro a img").css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                } else {
                    $(this).parents(".pins").find("a img").show();
                    $(this).parents(".pins").find("a img").fadeIn(function(){
                        $(this).css("transform", "translate(-3px,-3px) scale(.98)");
                    });
                    $(this).parents(".pins").find("a").prepend(
                        '<img src="https://res.cloudinary.com/hchyaihwv/image/upload/v1573226334/pin_icon.png" alt="" class="pin_icon">'
                    );
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
                $(".map_pin .pins a img").css("transform", "none");
                $(this).css("border-bottom", "none");
                $(this).parents(".name_text").find("img").show();
                $(this).parents(".pins").find("a .pin_icon").remove();
            }

            if(e.type == "click") {

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

                if ($(".container.main .post .main_top_map.active.map").length){
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
                                    $(".container.main .post .main_top_map.active.map").animate(
                                        {
                                        "top": 0,
                                        "right": 0,
                                        "bottom": 0,
                                        "left": 0}, 800 , function(){
                                            $(".container.main .post .main_top_map").delay(1000).queue(function(){
                                                $(this).css("transform", "scale(1.0)");
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
                        $(".container.main .post .main_top_map.active").stop().animate(
                            {
                                'top': '200px',
                                'right': '700px',
                                'left': '55px',
                                'bottom': '0px'
                            }, 800);

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


