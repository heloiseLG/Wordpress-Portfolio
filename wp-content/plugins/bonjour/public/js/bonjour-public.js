jQuery(document).ready(function($) {
	'use strict';
    
    function createCookie(name,value,days) {

		var cookies_opt = bar_data_js.cookies_opt,
    	days = parseInt( bar_data_js.cookies_days_number );

		if (cookies_opt == "cookies-days") {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
			document.cookie = name+"="+value+expires+"; path=/";
		}else if (cookies_opt == "cookies-new-sesson") {
			var expires = "";
			document.cookie = name+"="+value+expires+"; path=/";
		}else{
			return null;
		}
		
	}

    function readCookie(name) {
      
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		
		for(var i=0;i < ca.length;i++) {
		    var c = ca[i];
		    while (c.charAt(0)==' ') c = c.substring(1,c.length);
		    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}

		return null;

    }
           
    var hidePromotion = readCookie('hidePromotion'),
    barPosition = bar_data_js.bar_position;

    if( hidePromotion !== "true" ){
        var promotionBar = $('.bonjour__bar');
        var barHeight = promotionBar.outerHeight( true );

        if ( barPosition === "bottom" ) {
        	promotionBar.addClass("bonjour__bar-position-bottom-hide"); 

        }else{
        	promotionBar.addClass("bonjour__bar-position-top-hide");
         }
        $(".bonjour__bar-body-pusher").css({"margin-top": barHeight + "px" });

    }


    var hide_promotion_button = $('#bonjour__bar-hide-promotion');

    hide_promotion_button.on('click', function() {
        $(this).toggleClass('active');
        if ( barPosition === "bottom" ) {
        	$(".bonjour__bar").css({ "margin-bottom" : "-" + barHeight + "px" });
        }else{
        	$(".bonjour__bar").css({ "margin-top" : "-" + barHeight + "px" });
         }

        $('.bonjour__bar-body-pusher').toggleClass('bonjour__bar-body-pusher-down');
        createCookie('hidePromotion','true',1);
    });
   

});