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

    $(function(){
        if ($(".container.main").length) {
            $(".navbar-toggler").each(function(){
                $(this).on("click",function(){
                    if ($(".nav_header_menu").css("bottom") == "0px"){
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
                            'bottom': '0px',
                        },{
                            duration: 500,
                            queue: false
                        });

                    }

                    $(this).find("span").each(function(){
                        $(this).toggleClass("active");
                    });
                });
            });
        } else {
            $(".navbar-toggler").each(function(){
                $(this).on("click",function(){
                    if ($(".nav_header_menu").css("bottom") == "-65px"){
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
                            'bottom': '-65px',
                        },{
                            duration: 500,
                            queue: false
                        });

                    }

                    $(this).find("span").each(function(){
                        $(this).toggleClass("active");
                    });
                });
            });
        }
    });
});