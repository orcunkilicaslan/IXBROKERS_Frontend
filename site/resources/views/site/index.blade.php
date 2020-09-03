@extends('layouts.sitelayout')

@section('content')
    <!-- Slider Start -->
    <div class="headslidervideo">

        <div class="headslidervideo-wrp">
        <!-- Slider Top Start -->
        <div class="headslidervideo-top container">
            <div class="row">

                <!-- Owl Slider Start -->
                <div class="headslidervideo-slider col">
                    <ul id="headslidervideoowlx" class="headslidervideo-slider-owl owl-carouselx owl-themex">
                        <li class="headslidervideo-slider-item">
                            <div class="headslidervideo-slider-item-content">
                                <div class="headslidervideo-slider-item-title">
                                    <h2 class="slidertitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"><span class="sitecolorgreen"><span class="sitefontfamilydefault">50</span>% WELCOME BONUS</span> FROM IXBROKERS!</h2>
                                    <p class="sliderdesc" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">Enjoy IXBrokers' unique, multi-asset trading platform with "50% Welcome Bonus". Trade confidently with a secure and regulated broker. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Owl Slider End -->

                <!-- Start Account Start -->
                <div class="headslidervideo-account col-auto">
                    <div class="openaccountbox">
                        <h2 class="openaccountbox-title">OPEN ACCOUNT</h2>
                        <p class="openaccountbox-desc">Open Account in seconds and begin trading now!</p>
                        <div class="openaccountbtns">
                            <div>
                                <a href="/account/open-live-account" class="btn btn-success" title="@lang('common.account_cta.live_btn_titles')" rel="bookmark">
                                    <span>@lang('common.account_cta.live_btn_title')</span>
                                    <small>@lang('common.account_cta.live_btn_titles')</small>
                                    <i class="rightarrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.845" height="28.946" viewBox="0 0 18.845 28.946">
                                            <path id="Path_94" data-name="Path 94" d="M293.134,91.492l-10-13.581,8.979-13.574a1,1,0,0,0,.234-.6c0-.2-.154-.292-.468-.292h-7.046a3.388,3.388,0,0,0-.785.076,1.37,1.37,0,0,0-.666.548l-8.562,13.157a1.3,1.3,0,0,0-.277.693,1.167,1.167,0,0,0,.141.568l9.563,13.047a2.025,2.025,0,0,0,.507.642,1.108,1.108,0,0,0,.706.215h7.4c.6,0,.69-.3.271-.9" transform="translate(293.391 92.388) rotate(180)" />
                                        </svg>
                                    </i>
                                </a>
                                <a href="/account/open-demo-account" class="btn btn-info" title="@lang('common.account_cta.demo_btn_titles')" rel="bookmark">
                                    <span>@lang('common.account_cta.demo_btn_title')</span>
                                    <small>@lang('common.account_cta.demo_btn_titles')</small>
                                    <i class="rightarrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.845" height="28.946" viewBox="0 0 18.845 28.946">
                                            <path id="Path_94" data-name="Path 94" d="M293.134,91.492l-10-13.581,8.979-13.574a1,1,0,0,0,.234-.6c0-.2-.154-.292-.468-.292h-7.046a3.388,3.388,0,0,0-.785.076,1.37,1.37,0,0,0-.666.548l-8.562,13.157a1.3,1.3,0,0,0-.277.693,1.167,1.167,0,0,0,.141.568l9.563,13.047a2.025,2.025,0,0,0,.507.642,1.108,1.108,0,0,0,.706.215h7.4c.6,0,.69-.3.271-.9" transform="translate(293.391 92.388) rotate(180)" />
                                        </svg>
                                    </i>
                                </a>
                            </div>
                            <a class="infolink" href="/account/account-types" title="Simply because it is pain?">Simply because it is <span class="sitecolorwhite">pain?</span></a>
                        </div>
                    </div>
                </div>
                <!-- Start Account End -->

            </div>
        </div>
        <!-- Slider Top End -->

        <!-- Slider Bottom Start -->
        <div class="headslidervideo-bottom">
            <div class="container">
                <ul id="headfeaturesiconsowl" class="headslidervideo-feature owl-carousel owl-theme">
                    <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="300">
                        <div class="headslidervideo-feature-box">
                            <i class="icons-sprite sprite-100-site-features-green icons-traders"></i>
                            <h4 class="boxcontent-title">Real STP <span>Solution</span></h4>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="400">
                        <div class="headslidervideo-feature-box">
                            <i class="icons-sprite sprite-100-site-features-green icons-executions"></i>
                            <h4 class="boxcontent-title">Spreads from <span>0 pips</span></h4>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="500">
                        <div class="headslidervideo-feature-box">
                            <i class="icons-sprite sprite-100-site-features-green icons-locations"></i>
                            <h4 class="boxcontent-title">6 Offices, <span>3 countries</span></h4>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="600">
                        <div class="headslidervideo-feature-box">
                            <i class="icons-sprite sprite-100-site-features-green icons-regulations"></i>
                            <h4 class="boxcontent-title">Regulated by <span>SVGFSA</span></h4>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="700">
                        <div class="headslidervideo-feature-box">
                            <i class="icons-sprite sprite-100-site-features-green icons-instruments"></i>
                            <h4 class="boxcontent-title">400+ <span>Instruments</span></h4>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="800">
                        <div class="headslidervideo-feature-box">
                            <i class="icons-sprite sprite-100-site-features-green icons-executionsunder"></i>
                            <h4 class="boxcontent-title">Executions under <span>50ms</span></h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Slider Bottom End -->

        <!-- Slider Video Start -->
        <div class="headslidervideo-video">
            <video class="headslidervideo-video-movie" style="" preload="auto" autoplay="autoplay" muted="muted" loop>
                <source src="assets/video/homepage_slider_bg_video_01.mp4" type="video/mp4">
                <Video>Tarayıcınız Video Desteklememektedir</Video>
            </video>
            <div class="headslidervideo-video-mask"></div>
        </div>
        <!-- Slider Video End -->
        </div>
    </div>
    <!-- Slider End -->

    <!-- Account Types Component Start -->
    <section class="home-accounttypes">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">ACCOUNT <span class="sitecolorgreen">TYPES</span></h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">IX Brokers delivers the best trading environment for any type of trader. Either you are a newbie or a pro trader, IX Brokers' trading infrastructure gives you the best one. Just pick one them and let our advisors guide you for your best.</p>
            </div>
            <!-- Title -->

            <!-- Account Types -->
            <div class="component-siteaccounttypes">
                <ul id="accounttypesboxowl" class="accounttypesbox owl-carousel owl-theme">
                    <li>
                        <div class="accounttypesbox-content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="500">
                            <div class="accounttypesbox-head">
                                <div class="accounttypes-icons">
                                    <i class="accounttypes-icons-text sitecolorgreen">SV</i>
                                    <div class="accounttypes-icons-pulse pulsegreen"></div>
                                </div>
                                <h4 class="accounttypes-title">Standard <strong>Variable</strong></h4>
                            </div>
                            <ul class="accounttypesbox-list">
                                <li>FREE Demo Account</li>
                                <li>Minimum contract size 1,000</li>
                                <li>Leverage is up to 1:500</li>
                                <li>Negative balance protection</li>
                                <li>Spreads for majors are as low as 1 pips.</li>
                                <li>No commission</li>
                            </ul>
                            <a class="accounttypesbox-btn btn btn-outline-success" href="Account_Types.html" title="Read More" rel="bookmark">Read More</a>
                        </div>
                    </li>
                    <li>
                        <div class="accounttypesbox-content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="750">
                            <div class="accounttypesbox-head">
                                <div class="accounttypes-icons">
                                    <i class="accounttypes-icons-text sitecolorblue">FIX</i>
                                    <div class="accounttypes-icons-pulse pulseblue"></div>
                                </div>
                                <h4 class="accounttypes-title">Standard <strong>Fixed</strong></h4>
                            </div>
                            <ul class="accounttypesbox-list">
                                <li>FREE Demo Account</li>
                                <li>Minimum contract size 100,000</li>
                                <li>Leverage is up to 1:500</li>
                                <li>Negative balance protection</li>
                                <li>Spreads for majors are as low as 1 pips.</li>
                                <li>No commission</li>
                                <li>Crypto currencies</li>
                            </ul>
                            <a class="accounttypesbox-btn btn btn-outline-info" href="Account_Types.html" title="Read More" rel="bookmark">
                                <span>Read More</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="accounttypesbox-content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="1000">
                            <div class="accounttypesbox-head">
                                <div class="accounttypes-icons">
                                    <i class="accounttypes-icons-text sitecolororange">VIP</i>
                                    <div class="accounttypes-icons-pulse pulseorange"></div>
                                </div>
                                <h4 class="accounttypes-title">VIP <strong>Variable</strong></h4>
                            </div>
                            <ul class="accounttypesbox-list">
                                <li>FREE Demo Account</li>
                                <li>Minimum contract size 100,000</li>
                                <li>Leverage is up to 1:200</li>
                                <li>Negative balance protection</li>
                                <li>Spreads for majors are as low as 1 pips.</li>
                                <li>No commission</li>
                                <li>Crypto currencies</li>
                                <li>US and Europe stocks</li>
                            </ul>
                            <a class="accounttypesbox-btn btn btn-outline-warning" href="Account_Types.html" title="Read More" rel="bookmark">
                                <span>Read More</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="accounttypesbox-content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="1250">
                            <div class="accounttypesbox-head">
                                <div class="accounttypes-icons">
                                    <i class="accounttypes-icons-text sitecolorred">ZR</i>
                                    <div class="accounttypes-icons-pulse pulsered"></div>
                                </div>
                                <h4 class="accounttypes-title">Ecn Zero <strong>Account</strong></h4>
                            </div>
                            <ul class="accounttypesbox-list">
                                <li>Real STP account, proved by LPs</li>
                                <li>Minimum contract size 100,000</li>
                                <li>Leverage is up to 1:100</li>
                                <li>Spreads for majors are as low as 0 pips.</li>
                                <li>3 USD per side commission</li>
                                <li>Crypto currencies</li>
                            </ul>
                            <a class="accounttypesbox-btn btn btn-outline-danger" href="Account_Types.html" title="Read More" rel="bookmark">
                                <span>Read More</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Account Types -->

        </div>
    </section>
    <!-- Account Types Component End -->

    <!-- Summary Table Component Start -->
    <section class="home-summarytable">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"><span class="sitecolorgreen">TRADE WITH</span> IX BROKERS ONLINE!</h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">Trade hundreds of financial assets in one and single trading platform with almost zero spreads and zero commissions.</p>
            </div>
            <!-- Title -->

            <!-- Summary Table -->
            <div class="component-summarytable sitetabs">

                <!-- TabNav -->
                <ul class="summarytable-tabnav nav nav-tabs nav-space-between" role="tablist" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <li class="nav-item"><a class="nav-link" id="tab-Forex" data-toggle="tab" href="#Forex" role="tab" aria-controls="Forex" aria-selected="false"><span>FOREX</span></a></li>
                    <li class="nav-item"><a class="nav-link" id="tab-Commodities" data-toggle="tab" href="#Commodities" role="tab" aria-controls="Commodities" aria-selected="false"><span>COMMODITIES</span></a></li>
                    <li class="nav-item"><a class="nav-link" id="tab-Indices" data-toggle="tab" href="#Indices" role="tab" aria-controls="Indices" aria-selected="false"><span>INDICES</span></a></li>
                    <li class="nav-item"><a class="nav-link" id="tab-EquityCFD" data-toggle="tab" href="#EquityCFD" role="tab" aria-controls="EquityCFD" aria-selected="false"><span>EQUITY CFD</span></a></li>
                    <li class="nav-item"><a class="nav-link" id="tab-Cryptocurrencies" data-toggle="tab" href="#Cryptocurrencies" role="tab" aria-controls="Cryptocurrencies" aria-selected="false"><span>CRYPTO</span></a></li>
                </ul>
                <!-- TabNav -->
                <!-- TabContent -->
                <div class="summarytable-tabcontent tab-content" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
                    <div class="tab-pane fade active show" id="Forex" role="tabpanel" aria-labelledby="tab-Forex">
                        <div class="summarytable-tablearea">
                            <table class="summarytable-table sitetable linetable fixedtable hovergreentable table">
                                <thead>
                                <tr>
                                    <th><span>SYMBOL</span></th>
                                    <th><span>PREV. CLOSE</span></th>
                                    <th><span>BID</span></th>
                                    <th><span>ASK</span></th>
                                    <th><span>SPREAD</span></th>
                                    <th class="centercell btncell"><span>FREE BONUS</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($marketPrices->where('type', 4) as $market)
                                        <tr>
                                            <td><span>{{ $market->market_name }}</span></td>
                                            <td><span>{{sprintf('%0.4f', $market->previous_close) }}</span></td>
                                            <td><span>{{ sprintf('%0.4f', $market->bid) }}</span></td>
                                            <td><span>{{ sprintf('%0.4f', $market->ask) }}</span></td>
                                            <td><span>{{ sprintf('%0.4f', ($market->ask - $market->bid)) }}</span></td>
                                            <td class="centercell btncell"><a href="#" class="btn btn-light btn-sm" title="START" rel="bookmark">START</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Commodities" role="tabpanel" aria-labelledby="tab-Commodities">
                        <div class="summarytable-tablearea">
                            <table class="summarytable-table sitetable linetable fixedtable hovergreentable table">
                                <thead>
                                <tr>
                                    <th><span>SYMBOL</span></th>
                                    <th><span>PREV. CLOSE</span></th>
                                    <th><span>OPEN</span></th>
                                    <th><span>PRICE</span></th>
                                    <th><span>CHANGE</span></th>
                                    <th class="centercell btncell"><span>FREE BONUS</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($marketPrices->where('type', 2) as $market)
                                    @php
                                    $changePercentage = ($market->current_price - $market->open) / $market->open * 100;
                                    $rowClass = $changePercentage < 0 ? 'sitecolorred' : 'sitecolorgreen';
                                    @endphp
                                    <tr>
                                        <td><span>{{ $market->market_name }}</span></td>
                                        <td><span>{{sprintf('%0.4f', $market->previous_close) }}</span></td>
                                        <td><span>{{ sprintf('%0.4f', $market->open) }}</span></td>
                                        <td><span>{{ sprintf('%0.4f', $market->current_price) }}</span></td>
                                        <td><span class="{{$rowClass}}">%{{ sprintf('%0.2f', ($changePercentage)) }}</span></td>
                                        <td class="centercell btncell"><a href="#" class="btn btn-light btn-sm" title="START" rel="bookmark">START</a></td>
                                    </tr>


                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Indices" role="tabpanel" aria-labelledby="tab-Indices">
                        <div class="summarytable-tablearea">
                            <table class="summarytable-table sitetable linetable fixedtable hovergreentable table">
                                <thead>
                                <tr>
                                    <th><span>SYMBOL</span></th>
                                    <th><span>PREV. CLOSE</span></th>
                                    <th><span>OPEN</span></th>
                                    <th><span>PRICE</span></th>
                                    <th><span>CHANGE</span></th>
                                    <th class="centercell btncell"><span>FREE BONUS</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($marketPrices->where('type', 1) as $market)
                                    @php
                                        $changePercentage = ($market->current_price - $market->open) / $market->open * 100;
                                        $rowClass = $changePercentage < 0 ? 'sitecolorred' : 'sitecolorgreen';
                                    @endphp
                                    <tr>
                                        <td><span>{{ $market->market_name }}</span></td>
                                        <td><span>{{sprintf('%0.4f', $market->previous_close) }}</span></td>
                                        <td><span>{{ sprintf('%0.4f', $market->open) }}</span></td>
                                        <td><span>{{ sprintf('%0.4f', $market->current_price) }}</span></td>
                                        <td><span class="{{$rowClass}}">%{{ sprintf('%0.2f', ($changePercentage)) }}</span></td>
                                        <td class="centercell btncell"><a href="#" class="btn btn-light btn-sm" title="START" rel="bookmark">START</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="EquityCFD" role="tabpanel" aria-labelledby="tab-EquityCFD">
                        <div class="summarytable-tablearea">
                            <table class="summarytable-table sitetable linetable fixedtable hovergreentable table">
                                <thead>
                                <tr>
                                    <th><span>SYMBOL</span></th>
                                    <th><span>VOLUME</span></th>
                                    <th><span>BID</span></th>
                                    <th><span>ASK</span></th>
                                    <th><span>SPREAD</span></th>
                                    <th class="centercell btncell"><span>FREE BONUS</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($marketPrices->where('type', 3) as $market)
                                    <tr>
                                        <td><span>{{ $market->market_name }}</span></td>
                                        <td><span>{{ $market->volume  }}</span></td>
                                        <td><span>{{ sprintf('%0.4f', $market->bid) }}</span></td>
                                        <td><span>{{ sprintf('%0.4f', $market->ask) }}</span></td>
                                        <td><span>{{ sprintf('%0.4f', ($market->ask - $market->bid)) }}</span></td>
                                        <td class="centercell btncell"><a href="#" class="btn btn-light btn-sm" title="START" rel="bookmark">START</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Cryptocurrencies" role="tabpanel" aria-labelledby="tab-Cryptocurrencies">
                        <div class="summarytable-tablearea">
                            <table class="summarytable-table sitetable linetable fixedtable hovergreentable table">
                                <thead>
                                <tr>
                                    <th><span>SYMBOL</span></th>
                                    <th><span>BID</span></th>
                                    <th><span>ASK</span></th>
                                    <th><span>PRICE</span></th>
                                    <th class="centercell btncell"><span>FREE BONUS</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cryptoPrices as $market)
                                    <tr>
                                        <td><span>{{ $market->market_name }}</span></td>
                                        <td><span>{{ sprintf('%0.8f', $market->bid) }}</span></td>
                                        <td><span>{{ sprintf('%0.8f', $market->ask) }}</span></td>
                                        <td><span>{{ sprintf('%0.8f', $market->price) }}</span></td>
                                        <td class="centercell btncell"><a href="#" class="btn btn-light btn-sm" title="START" rel="bookmark">START</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- TabContent -->

            </div>
            <!-- Summary Table -->

        </div>
    </section>
    <!-- Summary Table Component End -->

    <x-platforms-tabs sectionclass="home-platforms"></x-platforms-tabs>

    <!-- News Component Start -->
    <section class="home-news">
        <div class="container">

            <!-- News List -->
            <div class="component-newsbox">
                <div class="component-newsbox-row row">

                    <!-- Title -->
                    <div class="col-12">
                        <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center">
                            <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">LATEST <span class="sitecolorgreen">NEWS</span></h2>
                            @php
                                //<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. tempor incididunt ut labore et dolore</p>
                            @endphp
                        </div>
                    </div>
                    <!-- Title -->

                    @php
                        /*
 (
                    [news_detail] => Array
                    (
                    [0] => LONDON (Reuters) - British finance minister Rishi Sunak said there were some "promising signs" that the country's economy was recovering from its record economic crash during the coronavirus lockdown which was announced earlier on Wednesday.
                    [1] => Sunak said growth of 8.7% in gross domestic product in June was encouraging, even as official data showed the economy contracted by 20.4% in the second quarter as a whole.
                    [2] => Sunak told broadcasters there was too much uncertainty to know if Britain would have a swift, V-shaped economic recovery.
                    [3] => "What we do know is that there are promising signs," he said. "There's still work to do and even as we recover many people are going to lose their jobs, already have lost their jobs, and we need to make sure that we are constantly focused on providing new opportunities for those people."
                    [4] => Sunak reiterated his opposition to extending the government's huge job retention scheme which is due to expire at the end of October. Economists expect a sharp rise in unemployment as the state-funded jobs subsidies end.
                    [5] => Sunak also said he expected to see more people returning to their workplace in the coming weeks after the government recently changed its guidance.
                    [6] => On Brexit, he said good progress had been made in several areas of the negotiations for a trade deal with the European Union but there were gaps on "a couple of big issues."
                    [7] => He said asking Brussels for an extension of Britain's no-change transition period - which is due to expire on Dec. 31 - was not the right thing to do and the government had to prepare for all eventualities
                    [8] =>
                    [9] =>
                    )

                    [_id] => 5f33a9802c956331001383bc
                    [type] => economy_news
                    [title] => UK finance minister Sunak sees promising signs after record GDP hit
                    [image_url] => https://i-invdn-com.akamaized.net/trkd-images/LYNXNPEG7B0GB_L.jpg
                    [publish_date] => 2020-08-12 07:55:24
                    )
 */
                    @endphp

                    <!-- Video and Image Box -->
                    <div class="bignewsbox col" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                        <div class="bignewsbox-image">
                            <a href="/news/{{ $news[0]->_id }}" class="newsimgbg" style="background-image: url({{ $news[0]->image_url }});" title="{{ $news[0]->title }}" rel="bookmark"></a>
                        </div>
                        <div class="bignewsbox-content">
                            <div class="newstopinfo">
                                <strong class="listnewsinfodate">{{ $news[0]->publish_date }}</strong>
                                @switch($news[0]->type)
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
                            <div class="sitecontent-desc">
                                <h3><a href="Research_News_Detail.html" title="{{ $news[0]->title }}" rel="bookmark">{{ $news[0]->title }}</a></h3>
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
                            <div class="listreadbtn">
                                <a href="/news/{{ $news[0]->_id }}" class="btn btn-outline-info" title="CONTINUE READING" rel="bookmark">CONTINUE READING</a>
                            </div>
                        </div>
                    </div>
                    <!-- Video and Image Box -->

                    <!-- List Box -->
                    <div class="smallnewsbox col" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0">
                        <ul class="listnews listnews-ul">
                            @php $isFirst = true @endphp
                            @foreach($news as $n)
                                @if(!$isFirst)
                                    <li>
                                        <div class="listnews-cont">
                                            <div class="listnewstopimg">
                                                <a href="/news/{{ $n->_id }}" class="newsimgbg" style="background-image: url({{ $n->image_url }});" title="{{ $n->title }}" rel="bookmark"></a>
                                            </div>
                                            <div class="newstopinfo">
                                                <strong class="listnewsinfodate">{{ $news[0]->publish_date }}</strong>
                                                @switch($n->type)
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
                                            <div class="sitecontent-desc">
                                                <h5><a href="/news/{{ $n->_id }}" title="" rel="bookmark">{{ $n->title }}</a></h5>
                                            </div>
                                            <div class="listnewsreadbtn">
                                                <a href="/news/{{ $n->_id }}" class="btn btn-sm btn-outline-info" title="CONTINUE READING" rel="bookmark">CONTINUE READING</a>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                                @php $isFirst = false; @endphp
                            @endforeach

                        </ul>
                    </div>
                    <!-- List Box -->

                    <!-- Bottom Button -->
                    <div class="bottombtnnews col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                        <a href="/news" class="btn btn-lg btn-success rounded-pill" title="ALL NEWS IN CATEGORIES" rel="bookmark">ALL NEWS IN CATEGORIES</a>
                    </div>
                    <!-- Bottom Button -->

                </div>
            </div>
            <!-- News List -->

        </div>
    </section>
    <!-- News Component End -->

    <x-about-us></x-about-us>
@endsection
