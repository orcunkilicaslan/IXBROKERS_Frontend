@include('manage.header')

<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container ">
                <div class="kt-subheader__main">
                    @if (isset($campaign))
                        <h3 class="kt-subheader__title">Kampanya Düzenle</h3>
                    @else
                        <h3 class="kt-subheader__title">Yeni Kampanya Ekle</h3>
                    @endif
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">

                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Subheader -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Portlet-->
                            <div class="kt-portlet">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        @if (isset($campaign))
                                        <h3 class="kt-portlet__head-title">{{ $campaign->title }}</h3>
                                        @else
                                            <h3 class="kt-portlet__head-title">Yeni Kampanya Ekle</h3>
                                        @endif

                                    </div>
                                </div>
                                <!--begin::Form-->
                                @if (isset($campaign))
                                    <form class="kt-form" method="POST" action="/moneytalks/campaigns/save/{{$campaign->id}}">
                                    <input type="hidden" name="c_image_url" id="c_image_field" value="{{$campaign->image}}">
                                @else
                                    <form class="kt-form" method="POST" action="/moneytalks/campaigns/save">
                                    <input type="hidden" name="c_image_url" id="c_image_field">
                                @endif
                                    @csrf
                                    <div class="kt-portlet__body">
                                        <form class="kt-form" id="kt_form">
                                            <div class="row">
                                                <div class="col-xl-3"></div>
                                                <div class="col-xl-6">
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-section__body">
                                                            <h3 class="kt-section__title kt-section__title-lg">Genel Bilgiler</h3>
                                                            <div class="form-group row">
                                                                <label class="col-3 col-form-label">Kampanya Başlığı</label>
                                                                <div class="col-9">
                                                                    @if (isset($campaign))
                                                                        <input class="form-control" type="text" value="{{$campaign->title}}" name="c_title">
                                                                    @else
                                                                        <input class="form-control" type="text" name="c_title">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                                    <div class="kt-section">
                                                        <div class="kt-section__body">
                                                            <div class="form-group row">
                                                                <label class="col-3 col-form-label">Kampanya Fotoğrafı</label>
                                                                <div class="col-9" id="preview-wrapper">
                                                                    @if (isset($campaign))
                                                                        <div><img src="{{$campaign->image}}" class="campaign-form-preview"></div>
                                                                        <div style="margin-top:10px">
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1"><i class="fa fa-camera"></i> Başka Fotoğraf Yükle</button>
                                                                        </div>
                                                                    @else
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1"><i class="fa fa-camera"></i> Fotoğraf Yükle</button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                                    <div class="kt-section">
                                                        <div class="kt-section__body">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                        <h3 class="kt-section__title kt-section__title-lg">Kampanya Özeti</h3>
                                                                </div>
                                                                <div class="col-sm-4 text-right">
                                                                    Kalan Karakter: &nbsp;&nbsp;<input disabled  maxlength="3" size="3" value="10" id="counter">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-12">

                                                                    @if (isset($campaign))
                                                                        <textarea class="summary_area" onkeyup="textCounter(this,'counter',350);" name="c_summary">{{$campaign->summary}}</textarea>
                                                                    @else
                                                                        <textarea class="summary_area" onkeyup="textCounter(this,'counter',350);" name="c_summary"></textarea>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                                    <div class="kt-section">
                                                        <div class="kt-section__body">
                                                            <h3 class="kt-section__title kt-section__title-lg">Kampanya Detayları</h3>
                                                            <div class="form-group row">
                                                                <div class="col-12">
                                                                    @if (isset($campaign))
                                                                        <textarea name="c_detail" id="c_detail_editor">{{$campaign->detail}}</textarea>
                                                                    @else
                                                                        <textarea name="c_detail" id="c_detail_editor"></textarea>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                                    <div class="kt-form__actions">
                                                        <button type="submit" class="btn btn-primary">Kaydet</button>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3"></div>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Portlet-->
                        </div>
                    </div>
        </div><!-- end:: Content -->
    </div>
</div>



<!--begin::Modal-->
<div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fotoğraf Yükle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="dropzone dropzone-default" id="kt_dropzone_1">
                        <div class="dropzone-msg dz-message needsclick">
                            <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                            <span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

<script>
var dropzone = null;

jQuery(document).ready(function(){
    KTCkeditor.init()
    KTDropzoneDemo.init();

    $("#kt_modal_1").on('show.bs.modal', function(){
        if(dropzone){
            dropzone[0].dropzone.removeAllFiles();
        }
    });
});

function textCounter(field,field2,maxlimit)
{
    var countfield = document.getElementById(field2);
    if ( field.value.length > maxlimit ) {
        field.value = field.value.substring( 0, maxlimit );
        return false;
    } else {
        countfield.value = maxlimit - field.value.length;
    }
}

var KTCkeditor={
    init:function(){
        ClassicEditor.create(document.querySelector("#c_detail_editor"), {
            //toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList' ],
        }).then(e=>{console.log(e)}).catch(e=>{console.error(e)})
    }
};


var KTDropzoneDemo={
    init:function(){
        dropzone = $("#kt_dropzone_1").dropzone({
            url:"/moneytalks/media/upload",
            paramName:"file",
            maxFiles:1,
            maxFilesize:5,
            addRemoveLinks:!0,
            acceptedFiles: '.jpg,.jpeg,.png',
            init: function () {
                this.hiddenFileInput.removeAttribute('multiple');
            },
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{ csrf_token() }}");
            },
            renameFile: function(file) {
                console.log(file);
                var dt = new Date();
                var time = dt.getTime();
                var nameArr = file.name.split('.');
                return time + '.' + nameArr[nameArr.length -1];
            },
            success: function(file, response)
            {
                $("#preview-wrapper").empty();
                var html = '<div><img src="/uploads/' + response.image_url + '" class="campaign-form-preview"></div><div style="margin-top:10px"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1"><i class="fa fa-camera"></i> Başka Fotoğraf Yükle</button></div>';
                $("#preview-wrapper").html(html);
                $("#c_image_field").val("/uploads/" + response.image_url);
                $("#kt_modal_1").modal("hide");
            }
        });

        console.log(dropzone);
    }
};
</script>
@include('manage.footer')
