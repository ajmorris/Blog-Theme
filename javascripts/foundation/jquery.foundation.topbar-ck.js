/*
 * jQuery Foundation Top Bar 2.0.2
 * http://foundation.zurb.com
 * Copyright 2012, ZURB
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
*//*jslint unparam: true, browser: true, indent: 2 */(function(e,t,n){"use strict";var r={index:0,initialized:!1},i={init:function(n){return this.each(function(){r=e.extend(r,n);r.$w=e(t),r.$topbar=e("nav.top-bar"),r.$section=r.$topbar.find("section"),r.$titlebar=r.$topbar.children("ul:first");var s=e("<div class='top-bar-js-breakpoint'/>").appendTo("body");r.breakPoint=s.width();s.remove();if(!r.initialized){i.assemble();r.initialized=!0}r.height||i.largestUL();r.$topbar.parent().hasClass("fixed")&&e("body").css("padding-top",r.$topbar.outerHeight());e(".top-bar .toggle-topbar").die("click.fndtn").live("click.fndtn",function(e){e.preventDefault();if(i.breakpoint()){r.$topbar.toggleClass("expanded");r.$topbar.css("min-height","")}if(!r.$topbar.hasClass("expanded")){r.$section.css({left:"0%"});r.$section.find(">.name").css({left:"100%"});r.$section.find("li.moved").removeClass("moved");r.index=0}});e(".top-bar .has-dropdown>a").die("click.fndtn").live("click.fndtn",function(t){(Modernizr.touch||i.breakpoint())&&t.preventDefault();if(i.breakpoint()){var n=e(this),s=n.closest("li"),o=s.children("ul"),u=0,a;r.index+=1;s.addClass("moved");r.$section.css({left:-(100*r.index)+"%"});r.$section.find(">.name").css({left:100*r.index+"%"});n.siblings("ul").height(r.height+r.$titlebar.outerHeight(!0));r.$topbar.css("min-height",r.height+r.$titlebar.outerHeight(!0)*2)}});e(t).on("resize.fndtn.topbar",function(){i.breakpoint()||r.$topbar.css("min-height","")});e(".top-bar .has-dropdown .back").die("click.fndtn").live("click.fndtn",function(t){t.preventDefault();var n=e(this),i=n.closest("li.moved"),s=i.parent();r.index-=1;r.$section.css({left:-(100*r.index)+"%"});r.$section.find(">.name").css({left:100*r.index+"%"});r.index===0&&r.$topbar.css("min-height",0);setTimeout(function(){i.removeClass("moved")},300)})})},breakpoint:function(){return r.$w.width()<r.breakPoint},assemble:function(){r.$section.detach();r.$section.find(".has-dropdown>a").each(function(){var t=e(this),n=t.siblings(".dropdown"),r=e('<li class="title back js-generated"><h5><a href="#"></a></h5></li>');r.find("h5>a").html(t.html());n.prepend(r)});r.$section.appendTo(r.$topbar)},largestUL:function(){var t=r.$topbar.find("section ul ul"),n=t.first(),i=0;t.each(function(){e(this).children("li").length>n.children("li").length&&(n=e(this))});n.children("li").each(function(){i+=e(this).outerHeight(!0)});r.height=i}};e.fn.foundationTopBar=function(t){if(i[t])return i[t].apply(this,Array.prototype.slice.call(arguments,1));if(typeof t=="object"||!t)return i.init.apply(this,arguments);e.error("Method "+t+" does not exist on jQuery.foundationTopBar")}})(jQuery,this);