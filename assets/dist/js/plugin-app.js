"use strict";function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function(e){var o={};function r(t){if(o[t])return o[t].exports;var n=o[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,r),n.l=!0,n.exports}r.m=e,r.c=o,r.d=function(t,n,e){r.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:e})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(n,t){if(1&t&&(n=r(n)),8&t)return n;if(4&t&&"object"==_typeof(n)&&n&&n.__esModule)return n;var e=Object.create(null);if(r.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:n}),2&t&&"string"!=typeof n)for(var o in n)r.d(e,o,function(t){return n[t]}.bind(null,o));return e},r.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(n,"a",n),n},r.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},r.p="",r(r.s=0)}([function(t,n,e){e(1),e(2),t.exports=e(3)},function(t,n){$(function(){var t=$("title"),n=(t.text(),$(".headtitle h1").text());$("body").hasClass("home")?$(window).on("load",function(){t.text("IXBROKERS")}):$(window).on("load",function(){t.text(n.toLocaleUpperCase()+" | IXBROKERS")}),$(window).focus(function(){$("body").hasClass("home")?t.text("IXBROKERS"):t.text(n.toLocaleUpperCase()+" | IXBROKERS")}),$(window).blur(function(){t.text("IXBROKERS")})}),$(function(){$("#dfn-navtggle").click(function(){$(".dfn-megamenu").toggleClass("dfn-canvaskapat")}),$(".dfn-mobilemenu-mask").click(function(){$(".dfn-megamenu").removeClass("dfn-canvaskapat")})}),jQuery(function(r){991<r(window).width()?r(window).on("load resize scroll",function(t){var n=r(window).scrollTop(),e=r("header.header"),o=r("section.headtitle");n>e.height()/3?(e.addClass("navscroll"),o.addClass("navscroll")):(e.removeClass("navscroll"),o.removeClass("navscroll"))}).on("load resize",function(t){}):r(window).on("load resize scroll",function(t){var n=r(window).scrollTop(),e=r("header.header");10<n?e.addClass("navscroll"):e.removeClass("navscroll")})}),$(window).on("load resize",function(t){991<$(window).width()&&$('.dfn-menu .dfn-menu-list .dfn-menu-list-item > a[data-toggle="dropdown"]').click(function(){$(".dfn-menu").addClass("activenavbar"),$(document).click(function(t){$(t.target).hasClass("active")||$(".dfn-menu").removeClass("activenavbar")})})}),$(".dropdown-menu input, .dropdown-menu select, .dropdown-menu label").click(function(t){t.stopPropagation()}),$(function(){$('[data-toggle="tooltip"]').tooltip()}),jQuery(document).ready(function(){jQuery(window).scroll(function(){250<jQuery(this).scrollTop()?jQuery(".bottomtotopbutton").fadeIn(300):jQuery(".bottomtotopbutton").fadeOut(300)}),jQuery(".bottomtotopbutton").click(function(t){return t.preventDefault(),jQuery("html,body").animate({scrollTop:0},300),!1})}),$('.siteformui input[type="text"]').keyup(function(t){var n=$(this).val();$(this).val(n.replace(/^(.)|\s(.)/g,function(t){return t.toUpperCase()}))}),jQuery(document).ready(function(){$(".siteformuilabel .labelanimation > .selectclickjsblur").click(function(t){t.preventDefault(),$(this).hide().prev("select.autofill").prop("disabled",!1)})}),$(document).ready(function(){$(".inputphonemask").inputmask({mask:"+99{1,99}",placeholder:"",showMaskOnFocus:!0,showMaskOnHover:!1}),$(".inputgsmphonemask").inputmask({mask:"0599 999 99 99",placeholder:"",showMaskOnFocus:!0,showMaskOnHover:!1}),$(".inputphonemasktr").inputmask({mask:"0999 999 99 99",placeholder:"",showMaskOnFocus:!0,showMaskOnHover:!1}),$(".inputibanmask").inputmask({mask:"TR99 9999 9999 9999 9999 9999 99",placeholder:"",showMaskOnFocus:!0,showMaskOnHover:!1}),$(".inputidentitymask").inputmask({mask:"99999999999",placeholder:"",showMaskOnFocus:!0,showMaskOnHover:!1}),$(".inputdatemask").inputmask({mask:"99/99/9999",placeholder:"MM/DD/YYYY",showMaskOnFocus:!0,showMaskOnHover:!1}),$(".inputdatedottedmask").inputmask({mask:"99.99.9999",placeholder:"MM.DD.YYYY",showMaskOnFocus:!0,showMaskOnHover:!1}),$(".inputonlytextmask").inputmask({mask:"AAA",placeholder:"",showMaskOnFocus:!0,showMaskOnHover:!1})})},function(t,n){AOS.init()},function(t,n){$(window).on("load",function(t){var n={init:function(){this.browser=this.searchString(this.dataBrowser)||"An unknown browser",this.version=this.searchVersion(navigator.userAgent)||this.searchVersion(navigator.appVersion)||"UnknownBrowser",this.OS=this.searchString(this.dataOS)||"UnknownOS"},searchString:function(t){for(var n=0;n<t.length;n++){var e=t[n].string,o=t[n].prop;if(this.versionSearchString=t[n].versionSearch||t[n].identity,e){if(-1!=e.indexOf(t[n].subString))return t[n].identity}else if(o)return t[n].identity}},searchVersion:function(t){var n=t.indexOf(this.versionSearchString);if(-1!=n)return parseFloat(t.substring(n+this.versionSearchString.length+1))},dataBrowser:[{string:navigator.userAgent,subString:"Edge",identity:"MS Edge"},{string:navigator.userAgent,subString:"MSIE",identity:"Explorer"},{string:navigator.userAgent,subString:"Trident",identity:"Explorer"},{string:navigator.userAgent,subString:"Firefox",identity:"Firefox"},{string:navigator.userAgent,subString:"Opera",identity:"Opera"},{string:navigator.userAgent,subString:"OPR",identity:"Opera"},{string:navigator.userAgent,subString:"Chrome",identity:"Chrome"},{string:navigator.userAgent,subString:"Safari",identity:"Safari"}],dataOS:[{string:navigator.platform,subString:"Win",identity:"Windows"},{string:navigator.platform,subString:"Mac",identity:"Mac"},{string:navigator.userAgent,subString:"iPhone",identity:"iPhone"},{string:navigator.platform,subString:"Linux",identity:"Linux"}]};n.init(),"Chrome"===n.browser?$("html").addClass(n.OS+" Chrome Chrome"+n.version):"Firefox"===n.browser?$("html").addClass(n.OS+" Firefox Firefox"+n.version):"MS Edge"===n.browser?($("html").addClass(n.OS+" Edge Edge"+n.version),$("meta[name=viewport]").remove(),$("head").append('<meta name="viewport" content="width=1440">')):"Explorer"===n.browser&&($("html").addClass(n.OS+" IExplorer IExplorer"+n.version),$("meta[name=viewport]").remove(),$("head").append('<meta name="viewport" content="width=1440">'))})}]);