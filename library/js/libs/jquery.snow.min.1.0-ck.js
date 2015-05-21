/**
 * jquery.snow - jQuery Snow Effect Plugin
 *
 * Available under MIT licence
 *
 * @version 1 (21. Jan 2012)
 * @author Ivan Lazarevic
 * @requires jQuery
 * @see http://workshop.rs
 *
 * @params minSize - min size of snowflake, 10 by default
 * @params maxSize - max size of snowflake, 20 by default
 * @params newOn - frequency in ms of appearing of new snowflake, 500 by default
 * @params flakeColor - color of snowflake, #FFFFFF by default
 * @example $.fn.snow({ maxSize: 200, newOn: 1000 });
 */(function(e){e.fn.snow=function(t){var n=e('<div id="flake" />').css({position:"absolute",top:"-50px"}).html("&#10052;"),r=e(document).height(),i=e(document).width(),s={minSize:5,maxSize:15,newOn:200,flakeColor:"#FFFFFF"},t=e.extend({},s,t),o=setInterval(function(){var s=Math.random()*i-100,o=.5+Math.random(),u=t.minSize+Math.random()*t.maxSize,a=r-40,f=s-100+Math.random()*250,l=r*10+Math.random()*5e3;n.clone().appendTo("#snowflakesContainer").css({left:s,opacity:o,"font-size":u,color:t.flakeColor}).animate({top:a,left:f,opacity:.2},l,"linear",function(){e(this).remove()})},t.newOn)}})(jQuery);