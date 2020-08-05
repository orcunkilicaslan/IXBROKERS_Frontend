"use strict";
var KTDropzoneDemo={
    init:function(){
        $("#kt_dropzone_1").dropzone({
            url:"https://keenthemes.com/scripts/void.php",
            paramName:"file",
            maxFiles:1,
            maxFilesize:5,
            addRemoveLinks:!0,
            acceptedFiles: '.jpg,.jpeg,.png',
        });
    }
};
KTUtil.ready(function(){
    KTDropzoneDemo.init()
});
