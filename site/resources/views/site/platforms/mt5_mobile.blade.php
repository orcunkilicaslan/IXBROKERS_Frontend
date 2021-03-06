@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='METATRADER 5 MOBILE TRADER'
        secondaryTitle='WELCOME TO THE MT<span class="sitecolororange">5</span> <span class="sitecolorgreen">MOBILE</span> AGAIN'
        spot='Anywhere. Anytime. Metatrader 5 is with you.'></x-header-title>

    <!-- Metatrader Platforms Start -->
    <section class="platforms-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"><span class="sitecolorgreen">ABOUT</span> METATRADER <span class="sitecolororange">5</span> MOBILE</h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">We provide our traders with the very latest technology and versatile software. Following the great success of MT4, MetaQuotes designed its ultimate successor, MetaTrader 5. Whether you’re new to trading or more experienced, if your driving desire is to succeed in the markets this Metatrader platform is for you..</p>
            </div>
            <!-- Title -->

            <!-- Platform Area -->
            <div class="platforms-area">
                <div class="platforms-area-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="row">

                        <!-- Desc -->
                        <div class="sitecontent-desc col">
                            <h3>METATRADER <span class="sitecolororange">5</span> FOR ANDROID</h3>
                            <p>Download MT5 on any popular Android device to enjoy infinite market access wherever you are and whatever you’re doing. Available on both mobile and tablet, MT5 for Android makes it more convenient than ever to trade.</p>
                            <p>A few of its features include:</p>
                            <ul class="ullist ullist-dotted">
                                <li>Powerful trading system including Market Depth</li>
                                <li>Unlimited number of charts and 21 timeframes</li>
                                <li>Built-in technical analysis tools</li>
                                <li>Chat with registered MQL5.community members</li>
                                <li>Financial news, alerts and push notifications</li>
                                <li>Extended version for tablets</li>
                            </ul>
                            <div class="platappdownbtns">
                                <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=IXBrokersFinancial-MT5Demo,IXBrokersFinancial-MT5Live" class="btn btn-platdown" title="DOWNLOAD GOOGLE PLAY" rel="bookmark">
                                    <i class="platdownicon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                            <g id="Icon_GooglePlay" transform="translate(0 -12)">
                                                <rect id="Rectangle_1" data-name="Rectangle 1" width="34" height="34" transform="translate(0 12)" fill="#eee" opacity="0"/>
                                                <g id="GooglePlay" transform="translate(-13.5 14.5)">
                                                    <path id="Path_10578" data-name="Path 10578" d="M16.5,3.6V26.4A2.984,2.984,0,0,0,18,29a3.25,3.25,0,0,0,3.3,0L42,17.7a3.016,3.016,0,0,0,1.3-4.1A3.25,3.25,0,0,0,42,12.3h0L21.4.9A3.167,3.167,0,0,0,19.8.5a3.371,3.371,0,0,0-1.7.5A2.883,2.883,0,0,0,16.5,3.6ZM21,1.7,41.6,13.1a2.365,2.365,0,0,1,1.1,1.3,2.5,2.5,0,0,1-.1,1.7,2.4,2.4,0,0,1-1,1h0L21,28.3a2.663,2.663,0,0,1-1.2.3,3.079,3.079,0,0,1-1.3-.3,2.144,2.144,0,0,1-1.1-1.9V3.6a2.144,2.144,0,0,1,1.1-1.9A2.754,2.754,0,0,1,21,1.7Z"/>
                                                    <path id="Path_10579" data-name="Path 10579" d="M17.6,2,37,19.9c0,.1.1.1.3.1.1,0,.2-.1.3-.1a.367.367,0,0,0,.1-.3c0-.1-.1-.2-.1-.3h-.1L18.2,1.4a.367.367,0,0,0-.3-.1c-.1,0-.2.1-.3.2A.283.283,0,0,0,17.6,2Z"/>
                                                    <path id="Path_10580" data-name="Path 10580" d="M36.4,9.6h0a.5.5,0,0,0-.6,0L17.5,27.9a.424.424,0,1,0,.6.6L36.4,10.2C36.6,10.1,36.6,9.8,36.4,9.6Z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                    <p>
                                        <small>ANDROID APP ON</small>
                                        <strong>GOOGLE PLAY</strong>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Desc -->

                        <!-- Imaage -->
                        <div class="col-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">
                            <img src="/assets/img/section/platforms_detail_mt_cont_img_android.jpg" alt="MT5 ANDROID" width="600" height="500" />
                        </div>
                        <!-- Image -->

                    </div>
                </div>
                <div class="platforms-area-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="row">

                        <!-- Desc -->
                        <div class="sitecontent-desc col">
                            <h3>METATRADER <span class="sitecolororange">5</span> FOR IOS</h3>
                            <p>Prefer to trade from your iPhone or iPad? Download MT5 for iOS straight from the Apple Store and let your trading journey commence! Access the financial markets at a time and place to suit you and manage your trading with ease.</p>
                            <p>MT5’s advanced features include:</p>
                            <ul class="ullist ullist-dotted">
                                <li>Over 20 different types of timeframes</li>
                                <li>38 technical indicators and 44 analytical objects</li>
                                <li>Netting and hedging position accounting systems</li>
                                <li>Full set of trade orders, including 6 pending orders</li>
                                <li>Built-in chat, financial news, alerts and push notifications</li>
                                <li>Extended version for iPad</li>
                            </ul>
                            <div class="platappdownbtns">
                                <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=IXBrokersFinancial-MT5Demo,IXBrokersFinancial-MT5Live" class="btn btn-platdown" title="DOWNLOAD APP STORE" rel="bookmark">
                                    <i class="platdownicon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                            <g id="Icon_AppStore" transform="translate(0 -12)">
                                                <rect id="Rectangle_1" data-name="Rectangle 1" width="34" height="34" transform="translate(0 12)" fill="#eee" opacity="0"/>
                                                <g id="AppStore" transform="translate(-41.744 12)">
                                                    <g id="Group_8329" data-name="Group 8329" transform="translate(46.744 7.171)">
                                                        <g id="Group_8328" data-name="Group 8328" transform="translate(0)">
                                                            <path id="Path_10560" data-name="Path 10560" d="M70.786,136.465a5.975,5.975,0,0,1-3.238-4.269.439.439,0,0,0-.866.152,6.849,6.849,0,0,0,3.7,4.9,15.8,15.8,0,0,1-1.843,3.663c-1.077,1.574-2.3,3.358-4.108,3.393s-2.476-1.159-4.805-1.159-3.07,1.126-4.794,1.195c-1.623.062-2.925-1.621-4.226-3.5-2.4-3.477-4.31-9.918-1.829-14.224a6.752,6.752,0,0,1,4.713-3.349.439.439,0,1,0-.145-.867,7.628,7.628,0,0,0-5.329,3.778c-2.652,4.6-.741,11.391,1.867,15.163,1.073,1.551,2.685,3.882,4.866,3.881,1.966,0,2.7-1.2,4.877-1.2,2.119,0,2.742,1.2,4.822,1.159,2.265-.043,3.68-2.112,4.817-3.775a16.7,16.7,0,0,0,1.95-3.879A.875.875,0,0,0,70.786,136.465Z" transform="translate(-46.744 -122.392)"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_8331" data-name="Group 8331" transform="translate(58.539 0)">
                                                        <g id="Group_8330" data-name="Group 8330" transform="translate(0 0)">
                                                            <path id="Path_10561" data-name="Path 10561" d="M254.835.85a.873.873,0,0,0-1.006-.84,6.985,6.985,0,0,0-5.777,6.722.87.87,0,0,0,.865.835h.025C252.138,7.476,254.9,4.155,254.835.85ZM248.93,6.688a5.874,5.874,0,0,1,1.476-3.795A6.3,6.3,0,0,1,253.956.879C254.009,3.675,251.661,6.6,248.93,6.688Z" transform="translate(-248.048 0)"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_8333" data-name="Group 8333" transform="translate(55.031 6.99)">
                                                        <g id="Group_8332" data-name="Group 8332" transform="translate(0)">
                                                            <path id="Path_10562" data-name="Path 10562" d="M203.393,122.008a7.244,7.244,0,0,0-5.381-2.689c-2.5-.185-4.624,1.34-5.607,1.34-.8,0-2.19-.851-3.688-1.155a.439.439,0,1,0-.175.861c1.466.3,2.8,1.173,3.863,1.173,1.282,0,3.244-1.512,5.542-1.342a6.377,6.377,0,0,1,4.748,2.347,7.089,7.089,0,0,0-2.907,4.714.44.44,0,0,0,.379.493.448.448,0,0,0,.058,0,.44.44,0,0,0,.435-.382,6.205,6.205,0,0,1,2.552-4.118A.872.872,0,0,0,203.393,122.008Z" transform="translate(-188.19 -119.303)"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                    <p>
                                        <small>DOWNLOAD ON THE</small>
                                        <strong>APP STORE</strong>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Desc -->

                        <!-- Imaage -->
                        <div class="col-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">
                            <img src="/assets/img/section/platforms_detail_mt_cont_img_ios.jpg" alt="MT5 IOS" width="600" height="500" />
                        </div>
                        <!-- Image -->

                    </div>
                </div>
            </div>
            <!-- Platform Area -->

        </div>
    </section>
    <!-- Metatrader Platforms End -->

    <x-platformcta></x-platformcta>
@endsection
