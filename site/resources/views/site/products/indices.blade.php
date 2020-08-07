@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='INDICES'
        secondaryTitle='TRADE <span class="sitecolorgreen">DAX, SP500, ITA40, SHANGAI COMP.</span> TRADE ALL'
        spot='Trade the indices and the world's leading indices with IX Brokers'></x-header-title>

    <!-- Products Start -->
    <section class="products-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width1100">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">TIGHEST SPREADS <span class="sitecolorgreen">FASTEST EXECUTION</span></h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">IX Brokers delivers you the industry-leading selection of indices including major European, American and Asian regions'.  IX Brokers offers CFD trading for spot indices on the major and most liquid indices. So that you can buy and sell the related countries macro economies. Hedge yourself, trade direction or catch-and-go. Find your trading strategy and make it real in IX Brokers.</p>
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
                <h3>WHAT IS INDEX TRADING?</h3>
                <p>Index Trading is unlike commodity trading where a trader invests in a commodity or Forex trading where one invests in a currency. An index is basically a figure that reflects the health of a market or an economy so when you invest in an index you are essentially investing in a fund that mirrors the movement of the index. What index trading enables you to do is to invest in a very large segment of a market, or even an entire market itself. For example, in stock index trading, you have the option of investing in the FTSE 100, NASDAQ, the Dow Jones, or the S&P 500, among other indices, all of which reflect different broad market properties. By investing for instance in the Dow, you would be investing in a significant portion of the industrial market.</p>
                <h3>WHY TRADE INDICES INSTEAD OF SHARES?</h3>
                <p>Now the next question - What are Commodity Markets? So the answer is any place where all raw or primary products are exchanged is called commodity market. Commodity markets can include direct physical trading and derivatives trading in the form of spot prices, forwards, futures and options. Commodity Futures are contracts to buy/sell specific quantity of a particular commodity at a future date on an exchange platform. It is similar to the Index futures and Stock futures but the underlying happens to be commodities instead of Stocks and indices.</p>
                <h3>WHERE ARE THEY BEING TRADED?</h3>
                <p>Here are a few of the advantages of trading indices instead of individual shares:</p>
                <ul class="ullist ullist-dotted">
                    <li>More available leverage than trading shares - The leverage possible with Index future contracts creates a profitable environment for even trades of a few percent index gain.</li>
                    <li>Less technical analysis - investors are able to spend more time on analyzing one chart, then trying to screen through thousands of stocks for the right company</li>
                    <li>High liquidity - The highly liquid market also creates tighter spreads which translates into less money spent per transaction.</li>
                    <li>No need to screen stocks for fundamental data - A lot of time is saved from not having to analyze financial reports. The trader will spend most of his time looking at the big picture and overall market sentiment.</li>
                </ul>
                <h3>HOW CAN I TRADE INDICES?</h3>
                <p>You can trade indices via a CFD (contract for difference), ETF, index future or option. They all have their strengths and weaknesses. A CFD is not a standardized instrument listed on exchanges. It is essentially a betting instrument provided by a firm for you speculate in the particular market you are interested in. There are stock CFDs, commodity CFDs and other types of CFDs. The advantage of CFDs is the ability to trade in mini lot size.</p>
            </div>
            <!-- Desc -->

        </div>
    </section>
    <!-- Products End -->

    <x-platforms-tabs sectionclass="products-platforms"></x-platforms-tabs>
    <x-about-us></x-about-us>
@endsection
