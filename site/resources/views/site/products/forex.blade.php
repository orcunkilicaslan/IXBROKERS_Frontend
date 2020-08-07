@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='FOREX'
        secondaryTitle=' MEET <span class="sitecolorgreen">THE BEST CONDITIONS</span> FOR FX MARKET'
        spot='Trade hunderds of spot FX products with a global, trusted, regulated broker.'></x-header-title>

    <!-- Products Start -->
    <section class="products-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width1100">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"> IX BROKERS DELIVERS YOU THE BEST OF THE BEST.<br/><span class="sitecolorgreen">ENJOY IT!</span></h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">The forex market is the largest and the biggest market in the world. All banks, financial institutions, hedge funds, brokers even central banks are contributor of this market.</p>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Experience the most profitable market in the world with a regulated broker.</p>
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
                                <h3>REGULATED & LICENSED</h3>
                                <p>IX Brokers is a registered and regulated forex broker under SVGFSA with the license number of 38923.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="700">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-support"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>WORLDWIDE SERVICE</h3>
                                <p>We are dedicated to bring you the best service in all around the world. 3 continents 6 countries. </p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="800">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-transparent"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>BEST CONDITIONS</h3>
                                <p>Hundreds of products including cryptos and stocks. Tightest spreads. Market swap ratios. No commission.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="900">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-products-features icons-secure"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>FAST OF THE FASTEST</h3>
                                <p>IX Brokers is fast. Real fast. In execution. In deposit and withdrawals. Just try and see for yourself. </p>
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
