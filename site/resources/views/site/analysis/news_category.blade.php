@extends('layouts.sitelayout')

@section('content')

    <!-- Research Start -->
    <section class="research-section section-content noheadtitle">
        <div class="container">
            <div class="research-news">

                <!-- Head Big News -->
                <div class="research-newscat newscatonlyone">
                    <div class="research-newscat-head">
                        <div class="research-newscat-head-row">
                            <div class="research-newscat-head-textarea">
                                <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-left sitetitle-line">
                                    @switch($category)
                                        @case("forex_news")
                                            <h2>FOREX <span class="sitecolorgreen">NEWS</span></h2>
                                            @break

                                        @case("economic_indicators")
                                            <h2>ECONOMIC <span class="sitecolorgreen">INDICATORS</span></h2>
                                            @break

                                        @case("economy_news")
                                            <h2>ECONOMY <span class="sitecolorgreen">NEWS</span></h2>
                                            @break
                                    @endswitch
                                </div>
                                <div class="headnewstopimg">
                                    <a href="/news/{{ $news[0]->_id }}" class="newsimgbg" style="background-image: url(https://i-invdn-com.akamaized.net/trkd-images/LYNXNPEG7B08Q_L.jpg);" title="{{ $news[0]->title }}" rel="bookmark"></a>
                                </div>
                                <div class="sitecontent-desc">
                                    <strong class="headnewsinfodate sitecolorgreen">{{ date('d F Y', strtotime($news[0]->publish_date)) }}</strong>
                                    <h3><a href="/news/{{ $news[0]->_id }}" title="" rel="bookmark">{{ $news[0]->title }}</a></h3>
                                    @php
                                        $newsSpot = $news[0]->news_detail[1];
                                        $newsSpot = str_replace('Investing.com - ', '', $newsSpot);
                                        $newsSpot = str_replace('Investing.com -- ', '', $newsSpot);
                                        $newsSpot = str_replace('TAIPEI (Reuters) - ', '', $newsSpot);
                                        $newsSpot = str_replace('SINGAPORE (Reuters) - ', '', $newsSpot);
                                        $newsSpot = str_replace('(Bloomberg) -- ', '', $newsSpot);
                                    @endphp
                                    <p>{{ $newsSpot }}</p>
                                </div>
                                <div class="headnewsreadbtn">
                                    <a href="/news/{{ $news[0]->_id }}" class="btn btn-info" title="CONTINUE READING" rel="bookmark">CONTINUE READING</a>
                                </div>
                            </div>
                            <div class="research-newscat-head-imgarea">
                                <div class="bignewstopimg">
                                    <a href="/news/{{ $news[0]->_id }}" class="newsimgbg"  @if($news[0]->image_url != '') style="background-image: url({{ $news[0]->image_url }});" @endif title="{{ $news[0]->title }}" rel="bookmark"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Head Big News -->

                <!-- List Box News -->
                <div class="research-listbox">
                    <div class="research-listbox-row">
                        <div class="research-listbox-infoarea">
                            <div class="sitetitle sitetitle-sm sitetitle-dark sitetitle-left sitetitle-line">
                                @switch($category)
                                    @case("forex_news")
                                    <h5>MORE <span class="sitecolorgreen">FOREX</span> NEWS</h5>
                                    @break

                                    @case("economic_indicators")
                                    <h5>MORE <span class="sitecolorgreen">ECONOMIC</span> INDICATORS</h5>
                                    @break

                                    @case("economy_news")
                                    <h5>MORE <span class="sitecolorgreen">ECONOMY</span> NEWS</h5>
                                    @break
                                @endswitch
                                <p>The featured articles are selected by experienced editors. It is also based on the reader's rating. These posts have a lot of interest.</p>
                            </div>
                        </div>
                        <div class="research-listbox-listarea">
                            <ul class="research-listbox-listarea-ul">

                                @php
                                    $skip = true;
                                @endphp
                                @foreach($news as $item)
                                    @if(!$skip)
                                        <li>
                                            <div class="research-listbox-listarea-cont">
                                                <div class="listnewstopimg">
                                                    <a href="/news/{{ $item->_id }}" class="newsimgbg" @if($item->image_url != '') style="background-image: url({{ $item->image_url }});" @endif title="{{ $item->title }}" rel="bookmark"></a>
                                                </div>
                                                <div class="sitecontent-desc">
                                                    <strong class="listnewsinfodate sitecolorgreen">{{ date('d F Y', strtotime($item->publish_date)) }}</strong>
                                                    <h5><a href="/news/{{ $item->_id }}" title="" rel="bookmark">{{ $item->title }}</a></h5>
                                                </div>
                                                <div class="listnewsreadbtn">
                                                    <a href="/news/{{ $item->_id }}" class="btn btn-sm btn-outline-info" title="CONTINUE READING" rel="bookmark">CONTINUE READING</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @php
                                        $skip = false;
                                    @endphp
                                @endforeach

                            </ul>

                            @if($paginationEnabled)
                                <div class="sitepagination">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link prev" href="#" title="Previous" rel="bookmark"><i></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" title="Page" rel="bookmark">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#" title="Page" rel="bookmark">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" title="Page" rel="bookmark">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" title="Page" rel="bookmark">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" title="Page" rel="bookmark">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link next" href="#" title="Next" rel="bookmark"><i></i></a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- List Box News -->

            </div>
        </div>
    </section>
    <!-- Research End -->


@endsection
