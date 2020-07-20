@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='FOREX'
        secondaryTitle='EXPLORE CURRENCY <span class="sitecolorgreen">TRADING WITH</span> IXBROKERS'
        spot='Trade major, minor and exotic currency pairs with a global, trusted broker.'></x-header-title>

    <!-- Products Start -->
    <section class="products-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width1100">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">MEET WITH TH WORLD'S <span class="sitecolorgreen">MOST PROFOTABLE</span> MARKET!</h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">The forex market is the market in which participants can buy, sell, exchange, and speculate on currencies. The forex market is made up of banks, commercial companies, central banks, investment management firms, hedge funds, and retail forex brokers and investors.</p>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">The currency market is considered to be the largest financial market with over $5 trillion in daily transactions, which is more than the futures and equity markets combined.</p>
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
                <h3>FOREX</h3>
                <p>Foreign exchange dates back to ancient times, when traders first began exchanging coins from different countries. However, the foreign exchange it self is the newest of the financial markets. In the last hundred years, the foreign exchange has undergone some dramatic transformations. The Bretton Woods Agreement, set up in 1944, remained intact until the early 1970s. Trading volume has increased rapidly over time, especially after exchange rates were allowed to float freely in 1971. In 1971, the Bretton Woods Agreement was first tested because of uncontrollable currency rate fluctuations, by 1973 the gold standard was abandoned by president Richard Nixon, currencies where finally allowed to float freely. Thereafter, the foreign exchange market quickly established itself as the financial market. Before the year 1998, the foreign exchange market was only available to larger entities trading currencies for commercial and investment purposes through banks, now online currency trading platforms and the internet allow smaller financial institutions and retail investors access a similar level of liquidity as the major foreign exchange banks, by offering a gateway to the primary (Interbank) market. The FOREX refers to the Foreign Currency Exchange Market in which over 5,000 International Banks and millions of small and large speculators participate worldwide. Each and every day this worldwide market exchanges more than $2.2 trillion in dozens of different currencies. With the current growth rate the market is projected to grow to more than $3 trillion per day by the year 2020. With such volume, one can assume that the forex market is extremely volatile, changing at a moment’s notice, depending on conditions within that country So, what is forex trading market, really? The answers are simple – and complex. Here, we will go over the basics so that you, the reader, can decide if you wish to learn more. The basic concept behind the foreign exchange (or forex) market is for trading currencies, one pair against another. It’s the world’s largest market, consisting of almost $2 trillion in daily volume and is growing rapidly. The value of one currency is determined by its comparison to another currency via the exchange rate. The major currencies traded most often in the foreign exchange market are the euro (EUR), United States dollar (USD), Japanese yen (JPY), British pound (GBP) and the Swiss franc (CHF). These combine to form the most commonly traded currency pairs:</p>
            </div>
            <!-- Desc -->

        </div>
    </section>
    <!-- Products End -->

    <x-platforms-tabs sectionclass="products-platforms"></x-platforms-tabs>
    <x-about-us></x-about-us>

@endsection
