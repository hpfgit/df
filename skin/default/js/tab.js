(function ($) {
    $.fn.tab = function () {
        return this.each(function () {
            var me = $(this),
                aul = me.find(".news-left-nav"),
                ali = aul.find("li"),
                ulList = me.find(".ul-list"),
                aulList = ulList.find(".news-left-list");

            ali.mouseover(function () {
                var index = $(this).index();
                aulList.eq(index).show();
                aulList.eq(index).siblings().hide();
                ali.eq(index).css("background-color","#3366cc").find("a").css("color", '#fff');
                ali.eq(index).css("color","#fff");
                ali.eq(index).siblings().css("background-color","#fff").find("a").css("color", "#333");
                ali.eq(index).siblings().css("color","#333");
                $(".more").css("color", "#f39c04");
            });
        });
    };
    $.fn.tabt = function() {
        return this.each(function() {
            
            var me = $(this),
                ywnav = me.find(".yw-nav"),
                ali = ywnav.find("li"),
                ywc = me.find(".yw-content li");
            
            ali.click(function() {
                var index = $(this).index();
                ali.eq(index).css({
                    "background-color":"#018882",
                    "color":"#fff"
                });
                
//                if (index == 2) {
//                    if ($(".yw-content li").eq(index).css("display") == "none") {
//                        $(".dianxing").height(950);
//                    }
//                    }
//                
//                var height = $(".yw-content li").eq(index).height();
//                $(".ywfw").css({
//                    "height":height+150
//                });
                ali.eq(index).siblings().css({
                    "background-color":"#e5e5e5",
                    "color":"#999"
                });
                ywc.eq(index).show();
                ywc.eq(index).siblings().hide();
            });
            
        });
    };
})(jQuery);
