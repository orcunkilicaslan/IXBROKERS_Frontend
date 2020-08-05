@include('manage.header')

<style>
.btn-block-remove{
    height: 38px;
    margin: 10px -15px 0px;
}
.fa.fa-times{
    margin: 0;
    padding: 0;
}
</style>

<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container justify-content-center">
                    <div class="col-md-8">
                        <div class="kt-subheader__main">
                            @isset($update)
                                <h3 class="kt-subheader__title">{{ date('d F Y', strtotime($update->release_date)) }} tarihli bülten</h3>
                            @else
                                <h3 class="kt-subheader__title">Yeni Bülten</h3>
                            @endisset
                            
                        </div>
                        <div class="kt-subheader__toolbar">
                            <div class="kt-subheader__wrapper">
        
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
        <!-- end:: Subheader -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            @isset($update)
                <form action="/moneytalks/updates/save/{{$update->id}}" method="post">
            @else
                <form action="/moneytalks/updates/save" method="post">
            @endisset
        
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!--begin::Portlet-->
                            <div class="kt-portlet">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">Yayın Tarihi</h3>
                                    </div>
                                </div>
                                <div class="kt-portlet__body">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <label class="col-3 col-form-label">Yayın Tarihi</label>
                                                        <div class="col-9">
                                                            @isset($update)
                                                                <input type="text" class="form-control" id="kt_datepicker_1" name="j_date" readonly value="{{ date('m/d/Y', strtotime($update->release_date)) }}"/>
                                                            @else
                                                                <input type="text" class="form-control" id="kt_datepicker_1" name="j_date" readonly placeholder="Select date"/>
                                                            @endisset
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <button type="button" class="btn btn-primary" id="repeat-block-add"><i class="fa fa-plus"></i>Yeni Blok Ekle</button>
                            </div>
                        </div>
                        <div class="col-md-8" id="repeat-block-list">
                            
                            @isset($update)
                                @foreach ($update->articles as $article)
                                    <!--begin::Portlet-->
                                    <div class="kt-portlet repeat-block">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">{{$article->title}}</h3>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary btn-block-remove"><i class="fa fa-times"></i></button>
                                        </div>
                                        <div class="kt-portlet__body">
                                            <div class="row justify-content-center">
                                                <div class="col-md-10">
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-section__body">
                                                            <div class="form-group row">
                                                                <label class="col-3 col-form-label">Başlık</label>
                                                                <div class="col-9">
                                                                    <input type="text" class="form-control block-title" name="blocktitle[]" value="{{$article->title}}"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <input type="hidden">
                                                                <label class="col-3 col-form-label">Bülten Fotoğrafı</label>
                                                                <div class="col-9 preview-wrapper">
                                                                    <div>
                                                                        <img src="{{$article->image_url}}" class="campaign-form-preview">
                                                                    </div>
                                                                    <div style="margin-top:10px">
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1">
                                                                            <i class="fa fa-camera"></i> Başka Fotoğraf Yükle
                                                                        </button>
                                                                        <input type="hidden" class="form-control image-url" name="blockimage[]"  value="{{$article->image_url}}"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            

                                                            <div class="form-group row">
                                                                <div class="col-12">
                                                                    <textarea class="journal_editor" name="blockdesc[]">{{$article->desc}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Portlet-->
                                @endforeach
                            @else 
                                <!--begin::Portlet-->
                                <div class="kt-portlet repeat-block">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">Yeni Bülten</h3>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary btn-block-remove"><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-section__body">
                                                        <div class="form-group row">
                                                            <label class="col-3 col-form-label">Başlık</label>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control block-title" name="blocktitle[]"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <input type="hidden">
                                                            <label class="col-3 col-form-label">Bülten Fotoğrafı</label>
                                                            <div class="col-9 preview-wrapper">
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1"><i class="fa fa-camera"></i> Fotoğraf Yükle</button>
                                                                <input type="hidden" class="form-control image-url" name="blockimage[]"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <textarea class="journal_editor" name="blockdesc[]"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                            @endisset
                            
                        </div>

                        <div class="col-md-8">
                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-primary" id="repeat-block-add"><i class="fa fa-save"></i>Kaydet</button>
                            </div>
                        </div>
                </div>
            </form>
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
var uploadTarget = null;


jQuery(document).ready(function(){
    
    BlockClone.init();
    KTCkeditor.init();
    KTDropzoneDemo.init();

    $("#kt_modal_1").on('show.bs.modal', function(event){
        uploadTarget = event.relatedTarget;
        while(!uploadTarget.classList.contains("preview-wrapper")){
            uploadTarget = uploadTarget.parentElement;
        }
        if(dropzone){
            dropzone[0].dropzone.removeAllFiles();
        }
    });

    $("#kt_modal_1").on('hide.bs.modal', function(event){
        uploadTarget = null;
    });
});

var KTCkeditor={
    init:function(){
        var items = document.querySelectorAll('.journal_editor');
        items.forEach(item => {
            ClassicEditor.create(item, {
            //toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList' ],
            }).then(e=>{console.log(e)}).catch(e=>{console.error(e)})
        });
    },
    updateNonEditors(){
        var item = document.querySelector('.repeat-block:first-child .journal_editor');
        ClassicEditor.create(item, {
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
                console.log(uploadTarget);
                uploadTarget.innerHTML = '<div><img src="/uploads/' + response.image_url + '" class="campaign-form-preview"></div><div style="margin-top:10px"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1"><i class="fa fa-camera"></i> Başka Fotoğraf Yükle</button><input type="hidden" class="form-control image-url" name="blockimage[]"  value="/uploads/' + response.image_url + '"/></div>';
                $("#kt_modal_1").modal("hide");
            }
        });

        console.log(dropzone);
    }
};



var BlockClone = {};
BlockClone.block = 
`<div class="kt-portlet repeat-block">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Yeni Bülten</h3>
        </div>
        <button type="button" class="btn btn-outline-primary btn-block-remove"><i class="fa fa-times"></i></button>
    </div>
    <div class="kt-portlet__body">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="kt-section kt-section--first">
                    <div class="kt-section__body">
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Başlık</label>
                            <div class="col-9">
                                <input type="text" class="form-control block-title" name="blocktitle[]"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden">
                            <label class="col-3 col-form-label">Bülten Fotoğrafı</label>
                            <div class="col-9 preview-wrapper">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1"><i class="fa fa-camera"></i> Fotoğraf Yükle</button>
                                <input type="hidden" class="form-control image-url" name="blockimage[]"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <textarea class="journal_editor" name="blockdesc[]"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>`;

BlockClone.init = function(){
    
    $("#repeat-block-add").click(function(){
        event.preventDefault();
        BlockClone.addNewBlock();
    });

    $(document).on("click",".btn-block-remove",function() {
        var target = $(this).parent().parent();
        target.hide(300, function(){
            $(this).remove();
        })
    });
}

BlockClone.addNewBlock = function(){
    $("#repeat-block-list").prepend(BlockClone.block);
    $(".repeat-block:first").hide(0);
    $(".repeat-block:first .block-title").val("");
    $(".repeat-block:first .journal_editor").val("");
    $(".repeat-block:first").show(300);
    KTCkeditor.updateNonEditors();
}


</script>
@include('manage.footer')
