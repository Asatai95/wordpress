$(function(){
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

    var w = $(window).width();
    if (w <= 500) {
        $('.device').each(function(){
            $(this).find(".sp").show();
            $(this).find(".tb").hide();
        });
    } else if (w <= 770) {
        $('.device').each(function(){
            $(this).find(".tab_view").show();
            $(this).find(".sp").hide();
            $(this).find(".tb").hide();
        });
    } else if (w <= 900 && w >= 770) {
        $('.device').each(function(){
            $(this).find(".sp").hide();
            $(this).find(".tb").show();
        });
    } else if (w <= 1024 && w >= 1000) {
        $(".nav_header_menu").removeClass("sp");
    } else {
        $('.device').each(function(){
            $(this).find(".sp").hide();
            $(this).find(".tb").show();
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
                        if ($(".nav_header_menu").css("bottom") == "-120px"){
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
                                'bottom': '-120px',
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
                        if ($(".nav_header_menu").css("bottom") == "-115px"){
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
                                'bottom': '-115px',
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