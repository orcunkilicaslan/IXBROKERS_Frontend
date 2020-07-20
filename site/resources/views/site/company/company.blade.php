@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='COMPANY'
        secondaryTitle='<span class="sitecolorgreen">WHY</span> IXBROKERS?'
        spot='Over 2 million people worldwide have chosen a global leader in online financial trading & investment.'></x-header-title>


    <!-- Company Start -->
    <section class="company-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">DISCOVER BETTER <span class="sitecolorgreen">TRADING</span></h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">IXBROKERS is an award-winning broker for a reason. Wherever your financial interests lie, you can rely on us to provide trading solutions to suit you. This means offering you the widest selection of instruments, platforms, account types and resources to make your trading experience as efficient and convenient as possible.</p>
            </div>
            <!-- Title -->

            <!-- Support -->
            <div class="company-support">
                <ul id="companysupporticonsowlx" class="sectionfeaturebox owl-carouselx owl-themex">
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="600">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-company-support icons-support"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>DEDICATED SUPPORT IN 18 LANGUAGES</h3>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="700">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-company-support icons-accountmanagers"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>MULTILINGUAL & FRIENDLY PERSONAL ACCOUNT MANAGERS</h3>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="800">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-company-support icons-depositwithdrawal"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>WIDE VARIENTY OF DEPOSIT & WITHDRAWAL METHODS</h3>
                            </div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="900">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">
                                <i class="icons-sprite sprite-80-company-support icons-bonuses"></i>
                            </div>
                            <div class="sectionfeaturebox-title">
                                <h3>LUCRATIVE BONUSES & PROMOTIONS</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Support -->

            <!-- Desc -->
            <div class="sitecontent-desc" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <h3>WHO IS IXBROKERS?</h3>
                <p>IX Brokers was founded by financial professionals and traders from UK and Switzerland, based in St. Vincent and Grenadines. IX Brokers' all top management and treasury staff are dedicated to deliver the cutting-edge, ultra fast trading environment for its clients. Hundreds of products, fastest transactions under 40ms. real STP solution for the huge swing traders and hedge funds. </p>
                <h3>WHY IXBROKERS?</h3>
                <ul class="ullist ullist-dotted">
                    <li>Hundreds of products</li>
                    <li>Different Deposit & Withdraw options</li>
                    <li>Real STP solution</li>
                    <li>Metatrader5 platforms</li>
                    <li>Metatrader4 platforms</li>
                    <li>IB Promotes</li>
                    <li>Financial widgets</li>
                    <li>Professional support</li>
                    <li>15+ experience inn FX markets</li>
                </ul>
            </div>
            <!-- Desc -->

        </div>
    </section>
    <!-- Company End -->

    <x-about-us></x-about-us>

@endsection
