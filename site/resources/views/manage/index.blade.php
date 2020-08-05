@include('manage.header')

<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">Yönetim Paneli</h3>
                </div>
            </div>
        </div>
        <!-- end:: Subheader -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="kt-portlet kt-callout">
                        <div class="kt-portlet__body">
                            <div class="kt-callout__body">
                                <div class="kt-callout__content">
                                    <h3 class="kt-callout__title">Kampanyalar</h3>
                                </div>
                                <div class="kt-callout__action">
                                    <a href="/moneytalks/campaigns" class="btn btn-custom btn-bold btn-upper btn-font-sm btn-primary">İncele</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kt-portlet kt-callout">
                        <div class="kt-portlet__body">
                            <div class="kt-callout__body">
                                <div class="kt-callout__content">
                                    <h3 class="kt-callout__title">Sabah Bültenleri</h3>

                                </div>
                                <div class="kt-callout__action">
                                        <a href="/moneytalks/journals" class="btn btn-custom btn-bold btn-upper btn-font-sm btn-success">İncele</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet kt-callout">
                        <div class="kt-portlet__body">
                            <div class="kt-callout__body">
                                <div class="kt-callout__content">
                                    <h3 class="kt-callout__title">Güniçi Bültenler</h3>

                                </div>
                                <div class="kt-callout__action">
                                        <a href="/moneytalks/updates" class="btn btn-custom btn-bold btn-upper btn-font-sm btn-success">İncele</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end:: Content -->
    </div>
</div>

@include('manage.footer')
