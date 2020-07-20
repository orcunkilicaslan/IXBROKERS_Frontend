@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='STOCKS'
        secondaryTitle='BUY AND SELL US STOCKS <span class="sitecolorgreen">COMMISSION FREE'
        spot='With our new stock trading service.'></x-header-title>

    <!-- Products Start -->
    <section class="products-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width1100">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">MEET WITH TH WORLD'S <span class="sitecolorgreen">MOST PROFOTABLE</span> MARKET!</h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">With IX Brokers stock trading you’ll also get free access to real time price data, and real time trade execution to help you make the most of your investments.</p>
            </div>
            <!-- Title -->

            <!-- Features -->
            <div class="products-feature">
                <ul id="productsfeaturesiconsowlx" class="sectionfeaturebox owl-carouselx owl-themex">
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="600">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-leverage"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>ZERO COMMISSION</h3>
                                <p>Buy and sell hundreds of major company stocks, with no trading commission or account management fees.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="700">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-24hour"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>24 HOUR CLIENT SUPPORT</h3>
                                <p>Get assistance with your stock trading account around the clock, Monday to Friday.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="800">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-tradelittle"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>MINIMUM DEPOSIT REQUIRED</h3>
                                <p>With a minimum deposit of just $500, choose to trade as little as one share or build an entire stocks portfolio</p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="900">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-fast"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>FAST ACCOUNT OPENING</h3>
                                <p>Once verified, open your stocks account in few minutes and start trading straight away.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Features -->

            <!-- Desc -->
            <div class="sitecontent-desc" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <h3>STOCKS</h3>
                <p>Trading stock CFDs offers quite a few benefits, especially for those who do not have access to trading the stick directly or have limited capital. Stock CFDs or CFDs in general are leverage products. This is one of the main reasons why traders often prefer to trade stock CFDs for lack of other alternatives.</p>
                <p>For example, if the share price for a stock is trading at $100, and you buy 10 shares, you would need to put up $10,000 in capital to purchase the stock. Whereas, if you were to buy the same stock as a contract for difference you would have to put up just $200 at 1:50 leverage.</p>
                <p>This makes is very easy for the average speculator to pick up the stock CFDs rather than the stock itself. There is not much difference in the pricing between the stock CFD and the actual stock price itself. However, you can expect a mark up on the prices. A CFD is usually marked up higher by a few ticks or cents and the spread (the difference between the bid and ask price) which is also comparatively higher than the actual stock.</p>
                <h3>WHATS IS THE DIFFERENCE WITH BUYING STOCKS AND STOCK CDFs?</h3>
                <p>When you trade stock CFDs you do not own the actual shares of the stocks that you are trading. This is one big difference between the stock CFD and the actual stock itself. However, if the stock pays dividends, you do get paid these dividends as well.</p>
                <p>Another factor that makes stock CFDs different from stocks is the fact that you can be long or short on the CFD. This is not easily possible when you trade stocks. Short selling stocks requires a bit of nack and is also considered unethical in some aspects. You can of course sell your shares you if actually own them, but short selling in the stocks is difficult compared to going short on the stock CFD’s.</p>
                <p>Stock CFDs are widely used as a hedging tool,</p>
            </div>
            <!-- Desc -->

        </div>
    </section>
    <!-- Products End -->

    <x-platforms-tabs sectionclass="products-platforms"></x-platforms-tabs>
    <x-about-us></x-about-us>
@endsection
