@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='CRYPTOCURRENCIES'
        secondaryTitle='<span class="sitecolorgreen">TRADE MAJOR CRYPTOS</span> IN IX BROKERS'
        spot='Experience the most innovative financial assets with a leading broker.'></x-header-title>

    <!-- Products Start -->
    <section class="products-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width1100">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">BITCOIN. <span class="sitecolorgreen">FINANCIAL REVOLUTION.</span> TRADE IT! </h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">Crypto currencies are the Z generations of the financial industry. Social. Digital. Realistic. Unlimited. Ethical. Unique. And rebel somehow. With IX Brokers' cutting-edge trading platform you can buy or sell major crypto currencies in one basket. Hedge your self and benefit from the huge price movements and maximise it with leverage.</p>
            </div>
            <!-- Title -->

            <!-- Features -->
            <div class="products-feature">
                <ul id="productsfeaturesiconsowlx" class="sectionfeaturebox owl-carouselx owl-themex">
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="600">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-licensed"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>GLOBALLY REGULATED & LICENSED</h3>
                                <p>Our brand is regulated and licensed under the FSC of the Republic of Mauritius and UK’s FCA, among others.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="700">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-support"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>DEDICATED SUPPORT IN 18 LANGUAGES</h3>
                                <p>We speak your language so that you can feel at home while trading with us.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="800">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-transparent"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>ULTIMATE TRANSPARENT</h3>
                                <p>IX Brokers's Performance statistics, including Requote, Slippage and Order Execution, are checked by PwC.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="900">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-secure"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>SECURE & SAFE</h3>
                                <p>Your funds are kept in segregated accounts, and your trades are secured by negative balance protection.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Features -->

            <!-- Desc -->
            <div class="sitecontent-desc" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <p>The single most important part of Satoshi‘s invention was that he found a way to build a decentralized digital cash system. In the nineties, there have been many attempts to create digital money, but they all failed.</p>
                <h3>WHY IX BROKERS FOR CRYPTO-TRADING?</h3>
                <p>In crypto-currency environment, many brokerage houses, even the exchanges uses old-fashion, Java-based trading platforms with the execution times hovers at around 1 second. Considering the crypto-market's high volatility, IX Brokers offers whole coins, including the minor altcoins as well via MT5. This means you can use the power of Metatrader and the leverage effect of IX Brokers in your crypto-currency trading.</p>
                <ul class="ullist ullist-dotted">
                    <li>No minimum deposit requirement</li>
                    <li>BTC, ETH, LTC, XRP, BAT, WAVES, HOT, LINK and may other cryptos.</li>
                    <li>Leverage up to 1:500</li>
                    <li>5/24 Live Support</li>
                    <li>New Gen MT5 Platform.</li>
                    <li>Classical MT4 Trading Platform.</li>
                </ul>

            </div>
            <!-- Desc -->

        </div>
    </section>
    <!-- Products End -->

    <x-platforms-tabs sectionclass="products-platforms"></x-platforms-tabs>
    <x-about-us></x-about-us>

@endsection
