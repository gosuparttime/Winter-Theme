(function( $ ){
    $.fn.snowFallTrans = function( options ) {

        var settings = {
        };

        var container = this;

        //override default values if values provided
        if ( options ) {
            $.extend( settings, options );
        }


        var style = $('<style>.snow { color:white; cursor:default;position: absolute; transition-property: top,left,opacity;opacity:1}</style>');
        $('body').append(style);

        var selector = this;
        this.css('overflow','hidden');

        var fallTimer = setInterval(function(){
            var startTop = selector.offset().top;
            var startLeft = selector.offset().left;

            var width = selector.width();
            var height = selector.height();

            var obj = $("<div class='snow'>❄</div>");
            container.append(obj).hide();

            var startLeftRand = startLeft + (Math.random()*10000)%(selector.width()-400) + ((Math.random()*1000)%1000);

            obj.css({top:startTop - 20});
            obj.css({left:startLeftRand});
            container.show();

            var speedRand = 15 + (Math.random()*10000)%5,
                endLeft = startLeft + ((Math.random()*10000)%width + 50),
                endTop = startTop + ((Math.random()*10000)%height + 200),
                fontSizeRand = 12 + (Math.random()*10000)%6;

            setTimeout(function(){
                obj.css({
                    top:endTop,
                    left:endLeft,
                    'transition-duration':speedRand+'s',
                    opacity:0,
                    'font-size':fontSizeRand+'px'
                });
            },2);

        },300);

        setInterval(function(){
            $('.snow').each(function(){
                if ($(this).css('opacity') < 0.1){
                    $(this).remove();
                }
            });
        },5000);

        /*
         setTimeout(function(){
         clearInterval(fallTimer);
         },10000)
         */


    }
})( jQuery );
