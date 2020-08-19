@extends('layouts.sitelayout')

@section('content')

    <!-- Research Start -->
    <section class="research-section section-content noheadtitle">
        <div class="container">
            <div class="research-news">

                <!-- News Detail -->
                <div class="research-newsdetail">
                    <div class="research-newsdetail-row">

                        <!-- Detail -->
                        <div class="research-newsdetail-detail sitecontent-desc">
                            <div class="newsdetailtopinfo">
                                <strong class="listnewsinfodate">{{ date('d F Y', strtotime($news->publish_date)) }}</strong>
                                @switch($news->type)
                                    @case("forex_news")
                                    <h5 class="sitecolorgreen">FOREX NEWS</h5>
                                    @break

                                    @case("economic_indicators")
                                    <h5 class="sitecolorgreen">ECONOMIC INDICATORS</h5>
                                    @break

                                    @case("economy_news")
                                    <h5 class="sitecolorgreen">ECONOMY NEWS</h5>
                                    @break
                                @endswitch


                            </div>
                            <h1>{{$news->title}}</h1>
                            @if($news->image_url != '')
                                <div class="newsdetailtopimg" style="background-image: url({{$news->image_url}});"></div>
                            @endif

                            @foreach($news->news_detail as $item)
                                <p>{!! $item !!}</p>
                            @endforeach
                        </div>
                        <!-- Detail -->

                        <!-- Sidebar -->
                        <div class="research-newsdetail-sidebar"></div>
                        <!-- Sidebar -->

                    </div>
                </div>
                <!-- News Detail-->

            </div>

        </div>
    </section>
    <!-- Research End -->


@endsection
