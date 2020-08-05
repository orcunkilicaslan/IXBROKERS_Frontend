@include('manage.header')

<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container ">
                <div class="kt-subheader__main">
                    @if (isset($journal))
                        <h3 class="kt-subheader__title">Bülten Düzenle</h3>
                    @else
                        <h3 class="kt-subheader__title">Bülten Ekle</h3>
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
                                        @if (isset($journal))
                                        <h3 class="kt-portlet__head-title">{{ date('d F Y', strtotime($journal->release_date)) }} tarihli bülten</h3>
                                        @else
                                            <h3 class="kt-portlet__head-title">Yeni Bülten</h3>
                                        @endif

                                    </div>
                                </div>
                                <!--begin::Form-->
                                @if (isset($journal))
                                    <form class="kt-form" method="POST" action="/moneytalks/journals/save/{{$journal->id}}">
                                @else
                                    <form class="kt-form" method="POST" action="/moneytalks/journals/save">
                                @endif
                                    @csrf
                                    <div class="kt-portlet__body">
                                        <div class="row">
                                            <div class="col-xl-3"></div>
                                            <div class="col-xl-6">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-section__body">
                                                        <h3 class="kt-section__title kt-section__title-lg">Genel Bilgiler</h3>
                                                        <div class="form-group row">
                                                            <label class="col-3 col-form-label">Yayın Tarihi</label>
                                                            <div class="col-9">
                                                                @if (isset($journal))
                                                                    <input type="text" class="form-control" id="kt_datepicker_1" name="j_date" readonly value="{{ date('m/d/Y', strtotime($journal->release_date)) }}"/>
                                                                @else
                                                                    <input type="text" class="form-control" id="kt_datepicker_1" name="j_date" readonly placeholder="Select date"/>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                                <div class="kt-section">
                                                    <div class="kt-section__body">
                                                        <h3 class="kt-section__title kt-section__title-lg">Bülten Detayları</h3>
                                                        @if ($morning)
                                                            <ul class="nav nav-tabs  nav-tabs-line" role="tablist">
                                                                @php $first = true; @endphp
                                                                @foreach ($currencies as $currency)
                                                                    <li class="nav-item">
                                                                        <a class="nav-link @if ($first) {{ "active" }}@endif" data-toggle="tab" href="#kt_tabs_{{ $currency->symbol }}" role="tab">{{ $currency->symbol }}</a>
                                                                    </li>
                                                                    @php $first = false; @endphp
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                        <div class="tab-content">
                                                            @php $first = true; @endphp
                                                            @foreach ($currencies as $currency)
                                                                @if (isset($journal))
                                                                    @foreach ($journal->currencies as $item)
                                                                        @if ($item->currency_id == $currency->id)
                                                                            <div class="tab-pane @if ($first) {{ "active" }}@endif" id="kt_tabs_{{ $currency->symbol }}" role="tabpanel">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-3 col-form-label">Başlık</label>
                                                                                        <div class="col-9">
                                                                                            <input type="text" class="form-control" name="jt_{{$currency->symbol}}"  value="@if (isset($item->title)) {{ $item->title }} @endif"/>
                                                                                        </div>
                                                                                    </div>
                                                                                <div class="form-group row">
                                                                                    @if (isset($item->image_url))
                                                                                        <input type="hidden" name="ji_{{ $currency->symbol }}" id="ji_{{ $currency->symbol }}" value="{{ $item->image_url }}">
                                                                                    @else
                                                                                        <input type="hidden" name="ji_{{ $currency->symbol }}" id="ji_{{ $currency->symbol }}">
                                                                                    @endif
                                                                                    <label class="col-3 col-form-label">Bülten Fotoğrafı</label>
                                                                                    <div class="col-9" id="preview-wrapper-{{$currency->symbol}}">
                                                                                        @if (isset($item->image_url))
                                                                                            <div><img src="{{$item->image_url}}" class="campaign-form-preview"></div>
                                                                                            <div style="margin-top:10px">
                                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1" data-currency="{{ $currency->symbol }}"><i class="fa fa-camera"></i> Başka Fotoğraf Yükle</button>
                                                                                            </div>
                                                                                        @else
                                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1" data-currency="{{ $currency->symbol }}"><i class="fa fa-camera"></i> Fotoğraf Yükle</button>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-12">
                                                                                        @if (isset($item->detail))
                                                                                            <textarea name="jd_{{$currency->symbol}}" class="journal_editor" id="jd_{{$currency->symbol}}">{{$item->detail}}</textarea>
                                                                                        @else
                                                                                            <textarea name="jd_{{$currency->symbol}}" class="journal_editor" id="jd_{{$currency->symbol}}"></textarea>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">

                                                                                    <label class="col-3 col-form-label">Dirençler</label>
                                                                                    <div class="col-3">
                                                                                        <input type="text" class="form-control" name="jr1_{{$currency->symbol}}" value="@if (isset($item->resistance_c1)) {{ $item->resistance_c1 }} @endif"/>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <input type="text" class="form-control" name="jr2_{{$currency->symbol}}" value="@if (isset($item->resistance_c2)) {{ $item->resistance_c2 }} @endif"/>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <input type="text" class="form-control" name="jr3_{{$currency->symbol}}" value="@if (isset($item->resistance_c3)) {{ $item->resistance_c3 }} @endif"/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-3 col-form-label">Destekler</label>
                                                                                    <div class="col-3">
                                                                                        <input type="text" class="form-control" name="js1_{{$currency->symbol}}"  value="@if (isset($item->support_c1)) {{ $item->support_c1 }} @endif"/>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <input type="text" class="form-control" name="js2_{{$currency->symbol}}"  value="@if (isset($item->support_c2)) {{ $item->support_c2 }} @endif"/>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <input type="text" class="form-control" name="js3_{{$currency->symbol}}" value="@if (isset($item->support_c3)) {{ $item->support_c3 }} @endif"/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                    <div class="tab-pane @if ($first) {{ "active" }}@endif" id="kt_tabs_{{ $currency->symbol }}" role="tabpanel">
                                                                        <div class="form-group row">
                                                                            <label class="col-3 col-form-label">Başlık</label>
                                                                            <div class="col-9">
                                                                                <input type="text" class="form-control" name="jt_{{$currency->symbol}}" placeholder="Anasayfa Başlığı"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <input type="hidden" name="ji_{{ $currency->symbol }}" id="ji_{{ $currency->symbol }}">
                                                                            <label class="col-3 col-form-label">Bülten Fotoğrafı</label>
                                                                            <div class="col-9" id="preview-wrapper-{{$currency->symbol}}">
                                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1" data-currency="{{ $currency->symbol }}"><i class="fa fa-camera"></i> Fotoğraf Yükle</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-12">
                                                                                <textarea name="jd_{{$currency->symbol}}" class="journal_editor" id="jd_{{$currency->symbol}}"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-3 col-form-label">Dirençler</label>
                                                                            <div class="col-3">
                                                                                <input type="text" class="form-control" name="jr1_{{$currency->symbol}}"/>
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <input type="text" class="form-control" name="jr2_{{$currency->symbol}}"/>
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <input type="text" class="form-control" name="jr3_{{$currency->symbol}}"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-3 col-form-label">Destekler</label>
                                                                            <div class="col-3">
                                                                                <input type="text" class="form-control" name="js1_{{$currency->symbol}}"/>
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <input type="text" class="form-control" name="js2_{{$currency->symbol}}"/>
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <input type="text" class="form-control" name="js3_{{$currency->symbol}}"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                @php $first = false; @endphp
                                                            @endforeach
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
var selectedDropzoneCurrency = null;

jQuery(document).ready(function(){
    KTCkeditor.init()
    KTDropzoneDemo.init();

    $("#kt_modal_1").on('show.bs.modal', function(event){
        selectedDropzoneCurrency = $(event.relatedTarget).data('currency');
        if(dropzone){
            dropzone[0].dropzone.removeAllFiles();
        }
    });

    $("#kt_modal_1").on('hide.bs.modal', function(event){
        selectedDropzoneCurrency = null;
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
                $("#preview-wrapper-" + selectedDropzoneCurrency).empty();
                var html = '<div><img src="/uploads/' + response.image_url + '" class="campaign-form-preview"></div><div style="margin-top:10px"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1" data-currency="' + selectedDropzoneCurrency + '"><i class="fa fa-camera"></i> Başka Fotoğraf Yükle</button></div>';
                $("#preview-wrapper-" + selectedDropzoneCurrency).html(html);
                $("#ji_" + selectedDropzoneCurrency).val("/uploads/" + response.image_url);
                $("#kt_modal_1").modal("hide");
            }
        });

        console.log(dropzone);
    }
};
</script>
@include('manage.footer')
