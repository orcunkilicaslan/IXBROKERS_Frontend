"use strict";function _classCallCheck(e,r){if(!(e instanceof r))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,r){for(var t=0;t<r.length;t++){var a=r[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}function _createClass(e,r,t){return r&&_defineProperties(e.prototype,r),t&&_defineProperties(e,t),e}function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}!function(t){var a={};function o(e){if(a[e])return a[e].exports;var r=a[e]={i:e,l:!1,exports:{}};return t[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=t,o.c=a,o.d=function(e,r,t){o.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(r,e){if(1&e&&(r=o(r)),8&e)return r;if(4&e&&"object"==_typeof(r)&&r&&r.__esModule)return r;var t=Object.create(null);if(o.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var a in r)o.d(t,a,function(e){return r[e]}.bind(null,a));return t},o.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(r,"a",r),r},o.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},o.p="",o(o.s=0)}([function(e,r,t){t(1),e.exports=t(2)},function(e,r){$("#headbigsliderowl").owlCarousel({loop:!0,nav:!1,dots:!0,autoplay:!0,autoplayTimeout:1e4,autoplayHoverPause:!1,items:1,margin:0,autoWidth:!1}),$("#headslidervideoowl").owlCarousel({loop:!0,nav:!0,dots:!0,autoplay:!0,autoplayTimeout:1e4,autoplayHoverPause:!1,items:1,margin:0,autoWidth:!1,mouseDrag:!1,animateIn:"fadeInUp",animateOut:"fadeOutUp"}),$("#headfeaturesiconsowl").owlCarousel({loop:!1,nav:!1,dots:!1,autoplay:!1,autoplayTimeout:1500,autoplayHoverPause:!1,items:6,margin:0,autoWidth:!1}),$("#newssmalllistowl").owlCarousel({loop:!0,nav:!1,dots:!0,autoplay:!0,autoplayTimeout:5e3,autoplayHoverPause:!0,items:2,margin:30,autoWidth:!1,mouseDrag:!1,animateIn:"fadeInUp",animateOut:"fadeOutUp",responsiveClass:!0,responsive:{0:{items:1,loop:!0,autoplay:!0},767:{items:2},1939:{margin:50}}}),$("#productsfeaturesiconsowl").owlCarousel({loop:!1,nav:!1,dots:!1,autoplay:!1,autoplayTimeout:1500,autoplayHoverPause:!1,items:4,margin:30,autoWidth:!1}),$("#sitefeaturesboxsowl").owlCarousel({loop:!1,nav:!1,dots:!1,autoplay:!1,autoplayTimeout:1500,autoplayHoverPause:!1,items:3,margin:45,autoWidth:!1}),$(document).ready(function(){$("#HomeInstrumentsCarousel").carousel({interval:2e4,pause:"hover"});var a=!1;$("#HomeInstrumentsCarousel").on("click",".nav a",function(){a=!0,$(".nav li").removeClass("active"),$(this).parent().addClass("active")}).on("slide.bs.carousel",function(e){if(!a){var r=$(".nav").children().length-1,t=$(".nav li.active");t.removeClass("active").next().addClass("active"),r==parseInt(t.data("slide-to"))&&$(".nav li").first().addClass("active")}a=!1})})},function(e,r){var t={tr:{NameAlert:"En Az 2 Karakter",SurnameAlert:"En Az 2 Karakter",PhoneAlert:"Hatalı Format",EmailAlert:"Hatalı Format",Min10Character:"En Az 10 Karakter",PleaseChoose:"Lütfen Seçiniz",MessageAlert:"En Az 10 Karakter",MessageCharacterOutAlert:"En Fazla 2000 Karakter",PasswordAlert:"En Az 8 Karakter",RePasswordAlert:"Şifreler Uyuşmuyor",IdentityNoAlert:"11 Karakter Giriniz",DateSelectAlert:"Tarih Seçiniz"},en:{NameAlert:"En Az 2 Karakter",SurnameAlert:"En Az 2 Karakter",PhoneAlert:"Hatalı Format",EmailAlert:"Hatalı Format",Min10Character:"En Az 10 Karakter",PleaseChoose:"Lütfen Seçiniz",MessageAlert:"En Az 10 Karakter",MessageCharacterOutAlert:"En Fazla 2000 Karakter",PasswordAlert:"En Az 8 Karakter",RePasswordAlert:"Şifreler Uyuşmuyor",IdentityNoAlert:"11 Karakter Giriniz",DateSelectAlert:"Tarih Seçiniz"}},n=function(){function e(){_classCallCheck(this,e)}return _createClass(e,null,[{key:"translate",value:function(e,r){return t.hasOwnProperty(e)&&t[e].hasOwnProperty(r)?t[e][r]:""}}]),e}();window.generalvalidform=new(function(){function e(){_classCallCheck(this,e)}return _createClass(e,[{key:"sendGeneralValidForm",value:function(){}},{key:"setGeneralValidFormErrorMessages",value:function(e,r,t,a){var o=document.getElementById(e);o.innerHTML=r,o.classList.add(t),o.classList.remove(a)}},{key:"setGeneralValidFormErrorInput",value:function(e){document.getElementById(e)}},{key:"setGeneralValidFormErrorIcon",value:function(e,r,t){var a=document.getElementById(e);a.classList.add(r),a.classList.remove(t)}},{key:"verifyContent",value:function(e,r,t,a){var o=document.getElementById(r),s=(document.getElementById(t),document.getElementById(a),o.value.trim());switch(e){case"inputNameProcess":s.length<2?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","NameAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"inputSurnameProcess":s.length<2?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","SurnameAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"inputPhoneProcess":s.replace(/\s/g,"").length<11?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","PhoneAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"inputEmailProcess":/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(s)?(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")):(this.setGeneralValidFormErrorMessages(t,n.translate("tr","EmailAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")),this.setGeneralValidFormErrorInput(r);break;case"inputMin10CharacterProcess":s.length<10?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","Min10Character"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"inputIdentityProcess":s.length<11?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","IdentityNoAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"inputDateSelectProcess":s.length<10?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","DateSelectAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"selectPleaseChoose":""===s?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","PleaseChoose"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"textareaMessageProcess":s.length<10?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","MessageAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):2e3<=s.length?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","MessageCharacterOutAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"inputPasswordProcess":s.length<8?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","PasswordAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,"","check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r)}}},{key:"verifyContentErrorDelete",value:function(e,r,t,a){var o=document.getElementById(r),s=(document.getElementById(t),document.getElementById(a),o.value.trim());switch(e){case"inputNameProcess":0===s.length&&(this.setGeneralValidFormErrorMessages(t,n.translate("tr","NameAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check"),this.setGeneralValidFormErrorInput(r));break;case"inputSurameProcess":0===s.length&&(this.setGeneralValidFormErrorMessages(t,n.translate("tr","SurnameAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check"),this.setGeneralValidFormErrorInput(r));break;case"inputPhoneProcess":0===s.length&&(this.setGeneralValidFormErrorMessages(t,n.translate("tr","PhoneAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check"),this.setGeneralValidFormErrorInput(r));break;case"inputEmailProcess":0===s.length&&(this.setGeneralValidFormErrorMessages(t,n.translate("tr","EmailAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check"),this.setGeneralValidFormErrorInput(r));break;case"inputMin10CharacterProcess":s.length<10?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","Min10Character"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,n.translate("tr",""),"check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"inputIdentityProcess":0===s.length&&(this.setGeneralValidFormErrorMessages(t,n.translate("tr","IdentityNoAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check"),this.setGeneralValidFormErrorInput(r));break;case"inputDateSelectProcess":0===s.length&&(this.setGeneralValidFormErrorMessages(t,n.translate("tr","DateSelectAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check"),this.setGeneralValidFormErrorInput(r));break;case"selectPleaseChoose":""===s?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","PleaseChoose"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,n.translate("tr",""),"check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"textareaMessageProcess":s.length<10?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","MessageAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):2e3<=s.length?(this.setGeneralValidFormErrorMessages(t,n.translate("tr","MessageCharacterOutAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check")):(this.setGeneralValidFormErrorMessages(t,n.translate("tr",""),"check","error"),this.setGeneralValidFormErrorIcon(a,"check","error")),this.setGeneralValidFormErrorInput(r);break;case"inputPasswordProcess":0===s.length&&(this.setGeneralValidFormErrorMessages(t,n.translate("tr","PasswordAlert"),"error","check"),this.setGeneralValidFormErrorIcon(a,"error","check"),this.setGeneralValidFormErrorInput(r))}}}]),e}())}]);
//# sourceMappingURL=custom-app.js.map
