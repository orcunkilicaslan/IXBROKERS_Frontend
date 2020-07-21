@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='BE AN AFFILIATE'
        secondaryTitle='PARTNER WITH A <span class="sitecolorgreen">TRUSTED</span> ONLINE TRADING PROVIDER'
        spot='Build a rewarding and long-term business relationship with an industry pioneer.'></x-header-title>


    <!-- Partners Start -->
    <section class="partners-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">EXCLUSUIVELY FOR <span class="sitecolorgreen">YOU</span> AND <span class="sitecolorgreen">YOUR CLIENTS</span></h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">Be an Introducing Broker for yourself and for your clients. IX Brokers offers the tailor-made trading conditions for your Client network. All you have to do is telling us your needs and leave the rest to our professional trading and risk team. </p>
            </div>
            <!-- Title -->

            <!-- Features -->
            <div class="partners-feature">
                <ul id="partnersfeaturesiconsowlx" class="sectionfeaturebox owl-carouselx owl-themex">
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="600">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">47K+</div>
                            <div class="sectionfeaturebox-title">MEMBERS</div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="700">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">$14M+</div>
                            <div class="sectionfeaturebox-title">PAID OUT</div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="800">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">150+</div>
                            <div class="sectionfeaturebox-title">COUNTRIES</div>
                        </div>
                    </li>
                    <li class="sectionfeaturebox-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="900">
                        <div class="sectionfeaturebox-wpr">
                            <div class="sectionfeaturebox-icons">1M+</div>
                            <div class="sectionfeaturebox-title">CLIENTS</div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Features -->

            <x-partnershipform></x-partnershipform>

        </div>
    </section>
    <!-- Partners End -->

    <!-- Why Partner With Us Start -->
    <section class="partners-section partners-whypartner">
        <div class="container">

            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">WHY PARTNER <span class="sitecolorgreen">WITH US</span></h3>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">Depending on what you do, you can apply as our Affiliate or Introducing Broker, or both. More new clients from you means higher potential commissions.</p>
            </div>

            <ul class="partners-whypartner-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-percent"></i>
                        <h4>GENEROUS COMMISSIONS</h4>
                    </div>
                </li>
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-conversions"></i>
                        <h4>HIGH CONVERSIONS</h4>
                    </div>
                </li>
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-payment"></i>
                        <h4>ON-TIME PAYMENTS</h4>
                    </div>
                </li>
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-nohiddenfees"></i>
                        <h4>NO HIDDEN FEES</h4>
                    </div>
                </li>
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-partnership"></i>
                        <h4>CUSTOMER-CENTRIC PARTNERSHIP</h4>
                    </div>
                </li>
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-multipleincome"></i>
                        <h4>MULTIPLE INCOME OPPORTUNITIES</h4>
                    </div>
                </li>
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-referraltools"></i>
                        <h4>ADVANCED REFERRAL TOOLS</h4>
                    </div>
                </li>
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-support"></i>
                        <h4>INTERNATIONAL SUPPORT</h4>
                    </div>
                </li>
                <li class="partners-whypartner-box">
                    <div class="partners-whypartner-wpr">
                        <i class="icons-sprite sprite-90-partners-whypartner icons-globe"></i>
                        <h4>MULTILINGUAL PLATFORMS</h4>
                    </div>
                </li>
            </ul>

        </div>
    </section>
    <!-- Why Partner With Us End -->

@endsection
