;(function ($) {
    $.fn.slidesShow = function () {
        return this.each(function () {
            var me = $(this);
            var iNum = 0;
            var oul = me.find(".news-hover-banner-ul");
            var oneW = oul.find("li").eq(0).width();
            var cloneLi = oul.find("li").eq(0).clone();
            var perv = me.find(".news-hover-banner-prev");
            var next = me.find(".news-hover-banner-next");
            oul.append(cloneLi);
            var len = me.find("li").length;
            oul.css("width", len*oneW);

            perv.click(function () {
                if (iNum <= -0) {
                    iNum = len-1;
                    oul.css({
                        left:-(len-1)*oneW
                    });
                }
                iNum--;
                oul.stop().animate({
                    left:-iNum*oneW
                });
            });
            next.click(function () {
                if (iNum >= len-1) {
                    oul.css({
                        left:0
                    });
                    iNum = 0;
                }
                iNum++;
                oul.stop().animate({
                    left:-iNum*oneW
                });
            });

        });
    };
})(jQuery);