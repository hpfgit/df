$(function () {
    $(".islogin").eq(0).css({
        "height":0,
        "overflow":"hidden"
    });
    if ($("font").length > 0) {
        $(".islogin").eq(0).css({
            "height":210,
            "overflow":"hidden"
        });
        $(".login-right").find("form").children().remove();
        $(".login-right").find("form").append($(".islogin"));
        $(".login-p").html("用户信息");
    }
    if ($(".register").length == 0) {
        $(".islogin").css({
            "height":0,
            "overflow":"hidden"
        });
    }
    
    var inum = 2;
    var aul = $(".case-list");
    var ali = $(".case-list li");
    var onew = $(".case-list li").eq(0).width()+42;
    
    getWidth();
    
    function getWidth() {
        var len = $(".case-list li").length;
        aul.css("width", len*onew);
    }
    var time4 = null;
    time4 = setInterval(function() {
        for(var i=0;i<inum;i++){
            var oli = ali.eq(i).clone();
            aul.append(oli);
            getWidth();
        }
        $(".case-list").animate({
            "left":-inum*onew
        },function() {
            for(var i=0;i<inum;i++){
                aul.find("li").eq(0).remove();
                aul.css("left",0);
                getWidth();
            }
        });
    }, 5000);
    $(".case-prev").click(function() {
        for(var i=0;i<inum;i++){
            var oli = ali.eq(i).clone();
            aul.append(oli);
            getWidth();
        }
        $(".case-list").animate({
            "left":-inum*onew
        },function() {
            for(var i=0;i<inum;i++){
                aul.find("li").eq(0).remove();
                aul.css("left",0);
                getWidth();
            }
        });
    });
    $(".case-next").click(function() {
        for(var i=0;i<inum;i++){
            var oli = ali.eq(i).clone();
            aul.append(oli);
            getWidth();
        }
        $(".case-list").animate({
            "left":-inum*onew
        }, function() {
            for(var i=0;i<inum;i++){
                aul.find("li").eq(0).remove();
                aul.css("left",0);
                getWidth();
            }
        });
    });
    
//    var Indexi = $(".ind li").length;
//    $(".nav-list li").eq(Indexi).find("a").css({
//        "background-color": "#1e5798",
//        "color":"#fff"
//    });
//    
//    $(".nav-list li").eq(Indexi).siblings().find("a").css({
//        "background-color": "rgba(0,0,0,0)",
//        "color":"#000"
//    });

    if ($(".index").length == 1) {
        var iIndex = $(".index li").length;
        $(".about-left-list li").eq(iIndex).css({
            "background-color":"#3797e0"
        });
        $(".about-left-list li").eq(iIndex).find("a").css({
            "color":"#fff"
        });
        $(".about-left-list li").eq(iIndex).siblings().css({
            "background-color":"#fff"
        });
        $(".about-left-list li").eq(iIndex).siblings().find("a").css({
            "color":"#333"
        });
    }

    
    var navLi = $(".nav-list li");
    var timer = null;
    var timer2 = null;
    navLi.eq(4).mouseenter(function () {
        $(".news-hover").show();
    });
    navLi.eq(4).mouseleave(function () {
        timer = setTimeout(function () {
            $(".news-hover").hide();
        },200);
    });
    $(".news-hover").hover(function () {
        clearInterval(timer);
        $(this).show();
    }, function () {
        $(this).hide();
    });

    navLi.eq(1).mouseenter(function () {
        $(".about-df").show();
    });
    navLi.eq(1).mouseleave(function () {
        timer2 = setTimeout(function () {
            $(".about-df").hide();
        },200);
    });
    $(".about-df").hover(function () {
        clearInterval(timer2);
        $(this).show();
    }, function () {
        $(this).hide();
    });

    $(".news-hover-banner").slidesShow();

    var newHover = $(".news-hover-banner-container .news-hover-banner-b");
    $(".news-hover-nav li").hover(function () {
        var index = $(this).index();
        newHover.eq(index).show();
        $(".news-hover-nav li").eq(index).css("background-color", "#3366cc").find("a").css("color", "#fff");
        $(".news-hover-nav li").eq(index).siblings().css("background-color", "#fff").find("a").css("color", "#333");
        newHover.eq(index).siblings().hide();
    });
    

    $(".yw").tabt();

    $(".ywly li").each(function(index) {
        $(".ywly li").eq(index).click(function() {
            // var index = $(this).index();
            $(".ywly li").eq(index).css({
                "background-color":"#69c3ae",
                "color":"#fff"
            });
            // $(".ywfw").css({
            //     "height":$(".ywly-content li").eq(index).height()+150
            // });
            $(".ywly li").eq(index).siblings().css({
                "background-color":"#e5e5e5",
                "color":"#5a5a5a"
            });
            $(".hyyj li").css({
                "background-color":"#e5e5e5",
                "color":"#5a5a5a"
            });
            $(".hyyj-content li").hide();
            $(".ywly-content li").eq(index).show();
            $(".ywly-content li").eq(index).siblings().hide();
        });
    });
    
    $(".hyyj li").each(function (index) {
        $(".hyyj li").eq(index).click(function() {
            // var index = $(this).index();
            $(".hyyj li").eq(index).css({
                "background-color":"#69c3ae",
                "color":"#fff"
            });
            // $(".ywfw").css({
            //     "height":$(".hyyj-content li").eq(index).height()+150
            // });
            $(".hyyj li").eq(index).siblings().css({
                "background-color":"#e5e5e5",
                "color":"#5a5a5a"
            });
            $(".ywly li").css({
                "background-color":"#e5e5e5",
                "color":"#5a5a5a"
            });
            $(".hyyj-content").show();
            $(".ywly-content li").hide();
            $(".hyyj-content li").eq(index).show();
            $(".hyyj-content li").eq(index).siblings().hide();
        });
    });


    //banner 轮播图
    $(".login-left").slides();

    //tab 选项卡
    $(".news-left").tab();
    $(".news-right").tab();
    
    // $(".about-right-b-list").hide();
    if ($(".about-right-b-list li").length > 0) {
        $(".about-right-b-list").show();
    }
    
    var total = parseInt($("a[title='Total record']").find('b').html());
    var currentPage = parseInt($(".current_page_num").html());
    var pagenum = 8;
    var totalPage = Math.ceil(total/pagenum);
    $(".current-page").html(currentPage);
    $(".total-page").html(totalPage);
    
    $(".ywfw-nav li").click(function() {
        var index = $(this).index();
        $(".about-left-list li").css({
            "background-color":"#3797e0",
            "color":"#fff"
        });
        $(".ywly").eq(index).find("li").eq(0).css({
            "background-color": "rgb(105, 195, 174)",
            "color": "rgb(255, 255, 255)"
        });
        $(".ywly-content").eq(index).find("li").eq(0).show();
        $(".hyyj-content").hide();
        $(".about-left-list li").eq(index).siblings().css({
            "background-color":"#fff",
            "color":"#333"
        });
        $(".ywly li").eq(0).siblings().css({
            "background-color":"#e5e5e5",
            "color":"#5a5a5a"
        });
        $(".hyyj li").css({
            "background-color":"#e5e5e5",
            "color":"#5a5a5a"
        });
        $(".ywfw > li").eq(index).show();
        $(".ywfw > li").eq(index).siblings().hide();
    });

    var indexx = $(".indexx li").length;
    $(".ywfw-nav li").eq(indexx).css({
        "background-color":"#3797e0",
        "color": "#fff"
    }).find("a").css("color", '#fff');
    $(".ywfw > li").eq(indexx).show();
    $(".ywfw > li").eq(indexx).siblings().hide();
    $(".ywfw-nav li").eq(indexx).siblings().css({
        "background-color":"#fff",
        "color": "#333"
    }).find("a").css("color", '#333');
    $(".gs-nav li").click(function() {
        var index = $(this).index();
        $(".gs-nav li").eq(index).find("a").css("color", "#fff");
        $(".gs-nav li").eq(index).siblings().find("a").css("color", "#333");
        $(".gongsi > li").eq(index).show();
        $(".gongsi > li").eq(index).siblings().hide();
    });

    var time2 = null;
    $(".nav-list li").eq(3).mouseenter(function() {
        $(".ywfw1").show();
    });
    $(".nav-list li").eq(3).mouseleave(function() {
        time2 = setTimeout(function() {
            $(".ywfw1").hide();           
        }, 200);
    });
    $(".ywfw1").mouseenter(function() {
        clearInterval(time2);
       $(this).show(); 
    });
    $(".ywfw1").mouseleave(function() {
       $(this).hide();
    });
    
    var time3 = null;
    $(".nav-list li").eq(6).mouseenter(function() {
        $(".rencai1").show();
    });
    $(".nav-list li").eq(6).mouseleave(function() {
        time3 = setTimeout(function() {
            $(".rencai1").hide();            
        }, 200);
    });
    $(".rencai1").mouseenter(function() {
        clearInterval(time3);
        $(this).show();
    });
    $(".rencai1").mouseleave(function() {
        $(this).hide();
    });
    var time5 = null;
    $(".nav-list li").eq(2).mouseenter(function() {
       $(".qiye").show();
    });
    $(".nav-list li").eq(2).mouseleave(function() {
        time5 = setTimeout(function() {
            $(".qiye").hide();
        }, 200);
    });
    $(".qiye").mouseenter(function() {
        clearInterval(time5);
        $(this).show(); 
    });
    $(".qiye").mouseleave(function() {
        $(this).hide(); 
    });
    var times = null;
    $(".nav-list li").eq(7).mouseenter(function() {
        $(".contact-hover").show();
    });
    $(".nav-list li").eq(7).mouseleave(function() {
        times = setTimeout(function() {
            $(".contact-hover").hide();
        }, 200);
    });
    $(".contact-hover").mouseenter(function() {
        clearInterval(times);
        $(this).show(); 
    });
    $(".contact-hover").mouseleave(function() {
        $(this).hide();
    });
    $(".banner .banner-list li").width($(window).width());
    $(window).resize(function() {
        $(".banner .banner-list li").width($(window).width());
    });
    $(".contactusdiyou").hover(function() {
        $(".contactusdiyou").stop().animate({
            "right":78
        }, 100);
    }, function() {
        $(".contactusdiyou").stop().animate({
            "right":-210
        }, 100);
    });

    $(".link-class li").click(function() {
        var index = $(this).index();
        $(this).css({
            "background-color":"#0066cc",
            "color":"#fff"
        });
        $(".link-class li").eq(index).siblings().css({
            "background-color":"#fff",
            "color":"#333"
        });
        $(".links-list div").eq(index).show();
        $(".links-list div").eq(index).siblings().hide();
    });

    $(".about-right-c img").click(function() {
        // alert($(this).attr("src"));
        $(".posimg img").attr("src", $(this).attr("src"));
        $(".posimg").show();
        $("html,body").css("overflow","hidden");
    });
    $(".posimg").click(function() {
        $(this).hide();
        $("html,body").css("overflow","auto");
    })

    $(".qywh-right-b img").each(function(index) {
        $(".qywh-right-b img").eq(index).click(function() {            
            $(".posimg img").attr("src", $(".qywh-right-b img").eq(index).attr("src"));
            $(".posimg").show();
            $("html,body").css("overflow","hidden");
        })
    });
    $(".posimg").click(function() {
        $(this).hide();
        $("html,body").css("overflow","auto");
    })
});
