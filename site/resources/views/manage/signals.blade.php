@include('manage.header')
@php
    $row_count = 21;
    $col_count = 5;
    $table_data = NULL;
    if(!is_null($signal_data) && isset($signal_data->value)){
        $table_data = json_decode($signal_data->value);
    }

@endphp
<style>
    .signal-row{
        margin-bottom: 10px;
        padding-bottom: 10px;
    }
    .signal-input{
        width: 100%;
        height: 40px;
        padding: 10px 15px;
        border: none;
    }
    th .signal-input{
        font-weight: 600;
    }

    .table-bordered td, .table-bordered th, .table thead td, .table thead th{
        padding: 0;
    }

    th.scope{
        padding: 10px 10px 10px;
        text-align: center;
    }
</style>

<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        </div>

        <!-- end:: Subheader -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <span class="kt-portlet__head-icon">
                                    <i class="kt-font-brand flaticon2-line-chart"></i>
                                </span>
                                <h3 class="kt-portlet__head-title">
                                    Sinyaller
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <button class="btn btn-brand btn-icon-sm" id="save-changes">Dağişiklikleri Kaydet</button>
                        </div>
                    </div>		</div>
                        </div>

                        <div class="kt-portlet__body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="row" class="scope"></th>
                                        @for ($i = 0; $i < $col_count; $i++)
                                            <th>
                                                @if (!is_null($table_data) && array_key_exists(0, $table_data) && array_key_exists($i, $table_data[0]))
                                                    <input type="text" class="signal-input f_0_{{$i}}" placeholder="Kolon Başlığı" value="{{ $table_data[0][$i] }}">        
                                                @else 
                                                    <input type="text" class="signal-input f_0_{{$i}}" placeholder="Kolon Başlığı">    
                                                @endif
                                            </th>    
                                        @endfor
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i < $row_count; $i++)
                                        <tr>
                                            <th scope="row" class="scope">{{ $i }}</th>
                                            @for ($j = 0; $j < $col_count; $j++)
                                                <td>
                                                    @if (!is_null($table_data) && array_key_exists($i, $table_data)&& array_key_exists($j, $table_data[$i]))
                                                        <input type="text" class="signal-input f_{{$i}}_{{$j}}" value="{{ $table_data[$i][$j] }}">    
                                                    @else 
                                                        <input type="text" class="signal-input f_{{$i}}_{{$j}}">
                                                    @endif
                                                </td>
                                            @endfor
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>    
                        </div>
                    </div>
        </div><!-- end:: Content -->
    </div>
</div>


<script>
var rowCount = {{ $row_count }};
var colCount = {{ $col_count }};
jQuery(document).ready(function(){
    $("#save-changes").click(function() {
        var tableData = getTableData();
        saveTableData(tableData);
    });
});

function getTableData(){
    var data = [];
    for (let i = 0; i < rowCount; i++) {
        var rowData = [];
        var emptyColCount = 0;
        for (let j = 0; j < colCount; j++) {
            var value = $('.f_' + i + '_' + j).val();
            rowData.push(value);
            if(value === ""){
                emptyColCount += 1;
            }
        }

        if(emptyColCount !== colCount){
            data.push(rowData);
        }
    }
    return JSON.stringify(data);
}

function saveTableData(tableData){
    $.ajax({
        url: '/moneytalks/signals/save',
        type: 'POST',
        beforeSend: function(request) {
            request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
        },
        data: {
            table_data: tableData,
            _token: '{{csrf_token()}}'
        },
        success: function (response) {
            console.log("Success");
            console.log(response);
            alert("Değişiklikler kaydedildi");
        },
        error: function (hata) {
            console.log("Error");
            console.log(hata);
            alert("Sinyaller kaydedilirken bir hata oluştu");
        }
    });
}
</script>
@include('manage.footer')
