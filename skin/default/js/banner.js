;(function ($) {
    $.fn.slides = function () {
        return this.each(function () {

            var me = $(this),
                bannerList = me.find(".banner-list"),
                bannerBtn = me.find(".banner-list-btn"),
                bannerBtnLi = bannerBtn.find("li"),
                timer = null,
                inum = 0;

            var bannerLi = bannerList.find("li");
            bannerLi.css("width", $(window).width());
            var oneW = bannerLi.eq(0).width(),
                cloneLi = bannerLi.eq(0).clone();

            bannerList.append(cloneLi);
            var len = bannerList.find("li").length;
            bannerList.css("width", len*oneW);
            // bannerBtn.css({
            //     left:(me.width()-bannerBtn.width())/2
            // });
            $(".login-left").css("height", bannerList.eq(0).find("img").height());
            bannerBtn.css("left", (bannerList.eq(0).find("img").width()-bannerBtn.width())/2);
            set();
            function set() {
                clearInterval(timer);
                timer = setInterval(function() {
                    if (inum > 2) {
                        inum = 0;
                        bannerList.css("left",0);
                    }
                    inum++;
                    bannerList.stop().animate({
                        left:-(inum)*oneW
                    }, 500, function () {
                        bannerBtnLi.eq(inum).addClass("on");
                    });
                }, 30000);
            }

            $(".login-left").mouseenter(function() {
                clearInterval(timer);
            });
            
            $(".login-left").mouseleave(function() {
                set();
            });
            
            bannerBtnLi.click(function () {
                var index = $(this).index();
                bannerList.stop().animate({
                    left:-(index)*oneW
                }, 500, function () {
                    bannerBtnLi.eq(index).addClass("on");
                });
            });

        });
    };
})(jQuery);
