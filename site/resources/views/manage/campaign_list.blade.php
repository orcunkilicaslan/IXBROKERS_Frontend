@include('manage.header')

<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        </div>

        <!-- end:: Subheader -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            @if (session('campaign_saved'))
                <div class="alert alert-primary  fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                    <div class="alert-text"><b>"{{ session('campaign_saved') }}"</b> başlıklı kampanya kaydedildi.</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="la la-close"></i></span>
                        </button>
                    </div>
                </div>
            @endif
            @if (session('campaign_updated'))
                <div class="alert alert-primary  fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                    <div class="alert-text"><b>"{{ session('campaign_updated') }}"</b> başlıklı kampanya güncellendi.</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="la la-close"></i></span>
                        </button>
                    </div>
                </div>
            @endif
                <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <span class="kt-portlet__head-icon">
                                    <i class="kt-font-brand flaticon2-line-chart"></i>
                                </span>
                                <h3 class="kt-portlet__head-title">
                                    Kampanyalar
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <a href="/moneytalks/campaigns/new" class="btn btn-brand btn-icon-sm">
                                <i class="la la-plus"></i>
                                Yeni Kampanya
                            </a>
                        </div>
                    </div>		</div>
                        </div>

                        <div class="kt-portlet__body">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Resim</th>
                                            <th>Başlık</th>
                                            <th>Slug</th>
                                            <th>Son Güncellenme Tarihi</th>
                                            <th>Durum</th>
                                            <th class="text-right">İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($campaigns as $campaign)
                                            <tr>
                                                <td>
                                                    <img class="table-img" src="{{ $campaign->image }}">
                                                </td>
                                                <td>{{ $campaign->title }}</td>
                                                <td><a href="/campaign/{{ $campaign->slug }}" target="_blank">{{ $campaign->slug }}</a></td>
                                                <td>{{ $campaign->updated_at }}</td>
                                                @if ( $campaign->status == 1)
                                                    <td><span class="kt-badge kt-badge--brand kt-badge--inline">Yayında</span></td>
                                                @else
                                                    <td><span class="kt-badge kt-badge--dark kt-badge--brand kt-badge--inline" style="opacity: 0.3;">Gizli</span></td>
                                                @endif

                                                <td class="text-right">
                                                    @if ( $campaign->status == 1)
                                                        <a href="/moneytalks/campaigns/hide/{{$campaign->id}}" class="btn btn-outline-secondary btn-sm">Gizle</a>
                                                    @else
                                                        <a href="/moneytalks/campaigns/show/{{$campaign->id}}" class="btn btn-outline-secondary btn-sm">Yayınla</a>
                                                    @endif
                                                    <a href="/moneytalks/campaigns/edit/{{ $campaign->id }}" class="btn btn-outline-secondary btn-sm">Düzenle</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="kt-portlet__foot">
                                    <div class="row align-items-center">
                                            {{ $campaigns->links() }}
                                    </div>
                                </div>

                    </div>
        </div><!-- end:: Content -->
    </div>
</div>

@include('manage.footer')
