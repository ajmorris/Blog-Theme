(function(e,t,n){"use strict";e.fn.foundationAccordion=function(t){var n=e(".accordion");n.hasClass("hover")&&!Modernizr.touch?e(".accordion li",this).on({mouseenter:function(){console.log("due");var t=e(this).parent(),n=e(this).children(".content").first();e(".content",t).not(n).hide().parent("li").removeClass("active");n.show(0,function(){n.parent("li").addClass("active")})}}):e(".accordion li",this).on("click.fndtn",function(){var t=e(this),n=e(this).parent(),r=e(this).children(".content").first();if(t.hasClass("active"))n.find("li").removeClass("active").end().find(".content").hide();else{e(".content",n).not(r).hide().parent("li").removeClass("active");r.show(0,function(){r.parent("li").addClass("active")})}})}})(jQuery,this);