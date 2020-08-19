@extends('layouts.sitelayout')

@section('content')


    <!-- Research Start -->
    <section class="research-section section-content noheadtitle">
        <div class="container">
            <div class="research-news">

                <!-- FOREX News Category List -->
                <div class="research-newscat">

                    <!-- Head Big News -->
                    <div class="research-newscat-head">
                        <div class="research-newscat-head-row">
                            <div class="research-newscat-head-textarea">
                                <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-left sitetitle-line">
                                    <h2><a href="/news/category/forex_news" title="FOREX NEWS" rel="bookmark">FOREX <span class="sitecolorgreen">NEWS</span></a></h2>
                                </div>
                                <div class="sitecontent-desc">
                                    <strong class="headnewsinfodate sitecolorgreen">{{ date('d F Y', strtotime($fxnews[0]->publish_date)) }}</strong>
                                    <h3><a href="/news/{{ $fxnews[0]->_id }}" title="" rel="bookmark">{{ $fxnews[0]->title }}</a></h3>
                                    @php
                                    $newsSpot = $fxnews[0]->news_detail[1];
                                    $newsSpot = str_replace('Investing.com - ', '', $newsSpot);
                                    $newsSpot = str_replace('Investing.com -- ', '', $newsSpot);
                                    $newsSpot = str_replace('TAIPEI (Reuters) - ', '', $newsSpot);
                                    $newsSpot = str_replace('SINGAPORE (Reuters) - ', '', $newsSpot);
                                    $newsSpot = str_replace('(Bloomberg) -- ', '', $newsSpot);
                                    @endphp
                                    <p>{{ $newsSpot }}</p>
                                </div>
                                <div class="headnewsreadbtn">
                                    <a href="/news/{{ $fxnews[0]->_id }}" class="btn btn-info" title="CONTINUE READING: {{ $fxnews[0]->title }}" rel="bookmark">CONTINUE READING</a>
                                </div>
                            </div>
                            <div class="research-newscat-head-imgarea">
                                <div class="bignewstopimg">
                                    <a href="/news/{{ $fxnews[0]->_id }}" class="newsimgbg" @if($fxnews[0]->image_url != '') style="background-image: url({{ $fxnews[0]->image_url }});" @endif title="{{ $fxnews[0]->title }}" rel="bookmark"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Head Big News -->
                    <!-- List Owl News -->
                    <div class="research-newscat-owlbox">
                        <div class="research-newscat-owlbox-row">
                            <div class="research-newscat-owlbox-infoarea">
                                <div class="sitetitle sitetitle-sm sitetitle-soft sitetitle-left sitetitle-line">
                                    <h5><a href="/news/category/forex_news" title="MORE FOREX NEWS" rel="bookmark">MORE <span class="sitecolorwhite">FOREX</span> NEWS</a></h5>
                                    <p>The featured articles are selected by experienced editors. It is also based on the reader's rating. These posts have a lot of interest.</p>
                                    <a class="btn btn-sm btn-outline-light" href="/news/category/forex_news" title="MORE NEWS" rel="bookmark">MORE NEWS</a>
                                </div>
                            </div>
                            <div class="research-newscat-owlbox-listarea">
                                <ul class="researchnewscatlistowl owl-carousel owl-theme">
                                    @php
                                        $skip = true;
                                        $count = 0;
                                    @endphp
                                    @foreach($fxnews as $news)
                                        @if(!$skip)
                                            <li>
                                                <div class="listnewstopimg">
                                                    <a href="/news/{{ $news->_id }}" class="newsimgbg" @if($news->image_url != '') style="background-image: url({{ $news->image_url }});" @endif title="{{ $news->title }}" rel="bookmark"></a>
                                                </div>
                                                <div class="sitecontent-desc">
                                                    <strong class="listnewsinfodate sitecolorgreen">{{ date('d F Y', strtotime($news->publish_date)) }}</strong>
                                                    <h5><a href="/news/{{ $news->_id }}" title="" rel="bookmark">{{ $news->title }}</a></h5>
                                                </div>
                                                <div class="listnewsreadbtn">
                                                    <a href="/news/{{ $news->_id }}" class="btn btn-sm btn-outline-info" title="CONTINUE READING" rel="bookmark">CONTINUE READING</a>
                                                </div>
                                            </li>
                                        @endif
                                        @php
                                            $skip = false;
                                            $count ++;
                                        @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- List Owl News -->

                </div>
                <!-- FOREX News Category List -->

                <!-- ECONOMY News Category List -->
                <div class="research-newscat">

                    <!-- Head Big News -->
                    <div class="research-newscat-head">
                        <div class="research-newscat-head-row">
                            <div class="research-newscat-head-textarea">
                                <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-left sitetitle-line">
                                    <h2><a href="/news/category/economy_news" title="ECONOMY NEWS" rel="bookmark">ECONOMY <span class="sitecolorgreen">NEWS</span></a></h2>
                                </div>
                                <div class="sitecontent-desc">
                                    <strong class="headnewsinfodate sitecolorgreen">{{ date('d F Y', strtotime($econews[0]->publish_date)) }}</strong>
                                    <h3><a href="/news/{{ $econews[0]->_id }}" title="" rel="bookmark">{{ $econews[0]->title }}</a></h3>
                                    @php
                                        $newsSpot = $econews[0]->news_detail[1];
                                        $newsSpot = str_replace('Investing.com - ', '', $newsSpot);
                                        $newsSpot = str_replace('Investing.com -- ', '', $newsSpot);
                                        $newsSpot = str_replace('TAIPEI (Reuters) - ', '', $newsSpot);
                                        $newsSpot = str_replace('SINGAPORE (Reuters) - ', '', $newsSpot);
                                        $newsSpot = str_replace('(Bloomberg) -- ', '', $newsSpot);
                                    @endphp
                                    <p>{{ $newsSpot }}</p>
                                </div>
                                <div class="headnewsreadbtn">
                                    <a href="/news/{{ $econews[0]->_id }}" class="btn btn-info" title="CONTINUE READING: {{ $econews[0]->title }}" rel="bookmark">CONTINUE READING</a>
                                </div>
                            </div>
                            <div class="research-newscat-head-imgarea">
                                <div class="bignewstopimg">
                                    <a href="/news/{{ $econews[0]->_id }}" class="newsimgbg"  @if($econews[0]->image_url != '') style="background-image: url({{ $econews[0]->image_url }});" @endif title="{{ $econews[0]->title }}" rel="bookmark"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Head Big News -->
                    <!-- List Owl News -->
                    <div class="research-newscat-owlbox">
                        <div class="research-newscat-owlbox-row">
                            <div class="research-newscat-owlbox-infoarea">
                                <div class="sitetitle sitetitle-sm sitetitle-soft sitetitle-left sitetitle-line">
                                    <h5><a href="/news/category/economy_news" title="MORE FOREX NEWS" rel="bookmark">MORE <span class="sitecolorwhite">ECONOMY</span> NEWS</a></h5>
                                    <p>The featured articles are selected by experienced editors. It is also based on the reader's rating. These posts have a lot of interest.</p>
                                    <a class="btn btn-sm btn-outline-light" href="/news/category/economy_news" title="MORE NEWS" rel="bookmark">MORE NEWS</a>
                                </div>
                            </div>
                            <div class="research-newscat-owlbox-listarea">
                                <ul class="researchnewscatlistowl owl-carousel owl-theme">
                                    @php
                                        $skip = true;
                                        $count = 0;
                                    @endphp
                                    @foreach($econews as $news)
                                        @if(!$skip)
                                            <li>
                                                <div class="listnewstopimg">

                                                    <a href="/news/{{ $news->_id }}" class="newsimgbg"  @if($news->image_url != '') style="background-image: url({{ $news->image_url }});" @endif title="{{ $news->title }}" rel="bookmark"></a>

                                                </div>
                                                <div class="sitecontent-desc">
                                                    <strong class="listnewsinfodate sitecolorgreen">{{ date('d F Y', strtotime($news->publish_date)) }}</strong>
                                                    <h5><a href="/news/{{ $news->_id }}" title="" rel="bookmark">{{ $news->title }}</a></h5>
                                                </div>
                                                <div class="listnewsreadbtn">
                                                    <a href="/news/{{ $news->_id }}" class="btn btn-sm btn-outline-info" title="CONTINUE READING" rel="bookmark">CONTINUE READING</a>
                                                </div>
                                            </li>
                                        @endif
                                        @php
                                            $skip = false;
                                            $count ++;
                                        @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- List Owl News -->

                </div>
                <!-- ECONOMY News Category List -->


                <!-- ECONOMIC INDICATORS Category List -->
                <div class="research-newscat">

                    <!-- Head Big News -->
                    <div class="research-newscat-head">
                        <div class="research-newscat-head-row">
                            <div class="research-newscat-head-textarea">
                                <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-left sitetitle-line">
                                    <h2><a href="/news/category/economic_indicators" title="ECONOMIC INDICATORS" rel="bookmark">ECONOMIC <span class="sitecolorgreen">INDICATORS</span></a></h2>
                                </div>
                                <div class="sitecontent-desc">
                                    <strong class="headnewsinfodate sitecolorgreen">{{ date('d F Y', strtotime($ecoind[0]->publish_date)) }}</strong>
                                    <h3><a href="/news/{{ $ecoind[0]->_id }}" title="" rel="bookmark">{{ $ecoind[0]->title }}</a></h3>
                                    @php
                                        $newsSpot = $ecoind[0]->news_detail[1];
                                        $newsSpot = str_replace('Investing.com - ', '', $newsSpot);
                                        $newsSpot = str_replace('Investing.com -- ', '', $newsSpot);
                                        $newsSpot = str_replace('TAIPEI (Reuters) - ', '', $newsSpot);
                                        $newsSpot = str_replace('SINGAPORE (Reuters) - ', '', $newsSpot);
                                        $newsSpot = str_replace('(Bloomberg) -- ', '', $newsSpot);
                                    @endphp
                                    <p>{{ $newsSpot }}</p>
                                </div>
                                <div class="headnewsreadbtn">
                                    <a href="/news/{{ $ecoind[0]->_id }}" class="btn btn-info" title="CONTINUE READING: {{ $ecoind[0]->title }}" rel="bookmark">CONTINUE READING</a>
                                </div>
                            </div>
                            <div class="research-newscat-head-imgarea">
                                <div class="bignewstopimg">
                                    <a href="/news/{{ $ecoind[0]->_id }}" class="newsimgbg"  @if($ecoind[0]->image_url != '') style="background-image: url({{ $ecoind[0]->image_url }});" @endif title="{{ $ecoind[0]->title }}" rel="bookmark"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Head Big News -->
                    <!-- List Owl News -->
                    <div class="research-newscat-owlbox">
                        <div class="research-newscat-owlbox-row">
                            <div class="research-newscat-owlbox-infoarea">
                                <div class="sitetitle sitetitle-sm sitetitle-soft sitetitle-left sitetitle-line">
                                    <h5><a href="/news/category/economic_indicators" title="MORE FOREX NEWS" rel="bookmark">MORE <span class="sitecolorwhite">ECONOMIC</span> INDICATORS</a></h5>
                                    <p>The featured articles are selected by experienced editors. It is also based on the reader's rating. These posts have a lot of interest.</p>
                                    <a class="btn btn-sm btn-outline-light" href="/news/category/economic_indicators" title="MORE NEWS" rel="bookmark">MORE NEWS</a>
                                </div>
                            </div>
                            <div class="research-newscat-owlbox-listarea">
                                <ul class="researchnewscatlistowl owl-carousel owl-theme">
                                    @php
                                        $skip = true;
                                        $count = 0;
                                    @endphp
                                    @foreach($ecoind as $news)
                                        @if(!$skip)
                                            <li>
                                                <div class="listnewstopimg">

                                                    <a href="/news/{{ $news->_id }}" class="newsimgbg"  @if($news->image_url != '') style="background-image: url({{ $news->image_url }});" @endif title="{{ $news->title }}" rel="bookmark"></a>

                                                </div>
                                                <div class="sitecontent-desc">
                                                    <strong class="listnewsinfodate sitecolorgreen">{{ date('d F Y', strtotime($news->publish_date)) }}</strong>
                                                    <h5><a href="/news/{{ $news->_id }}" title="" rel="bookmark">{{ $news->title }}</a></h5>
                                                </div>
                                                <div class="listnewsreadbtn">
                                                    <a href="/news/{{ $news->_id }}" class="btn btn-sm btn-outline-info" title="CONTINUE READING" rel="bookmark">CONTINUE READING</a>
                                                </div>
                                            </li>
                                        @endif
                                        @php
                                            $skip = false;
                                            $count ++;
                                        @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- List Owl News -->

                </div>
                <!-- ECONOMIC INDICATORS Category List -->

            </div>
        </div>
    </section>
    <!-- Research End -->


@endsection


