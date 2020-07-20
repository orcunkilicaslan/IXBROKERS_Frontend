@extends('layouts.sitelayout')

@section('content')

<!-- Open Account Start -->
<section class="openaccount">

    <!-- Account Sign Start -->
    <div class="openaccount-sign">
        <div class="container">
            <div class="row">

                <!-- Title -->
                <div class="col-xl-7 col-lg-6">
                    <div class="openaccount-titlearea">
                        <div class="sitetitle sitetitle-xl sitetitle-soft sitetitle-left">
                            <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">OPEN <span class="sitecolorgreen">DEMO ACCOUNT</span></h2>
                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">Open your demo account now and trade with virtual 100.000USD. See the market's opportunities for yourself.</p>
                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">You can trade the real market conditions with virtual money in IX Brokers. With this, you can experience the unlimited benefits of forex markets in real world conditions with virtual money. Do not lose time anymore, open your account now and begin trading in multi-asset platform of IX Brokers.</p>
                        </div>
                    </div>
                </div>
                <!-- Title -->

                <!-- Forms -->
                <div class="col-xl-5 col-lg-6">
                    <div class="openaccount-formbox siteformui" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">
                        <div class="openaccount-formbox-head">
                            <h2 class="openaccount-formbox-head-title">OPEN <span class="sitecolorgreen">DEMO ACCOUNT</span></h2>
                            <p class="openaccount-formbox-head-desc">Open Account in seconds and begin trading now!</p>
                        </div>
                        <div class="alert alert-sweet alert-warning alert-dismissible fade show d-none" role="alert" id="openDemoAccountFormErrors">
                            <div class="alert-flex">
                                <div class="alert-icon">
                                    <div class="animation-alert-icons">
                                        <div class="alert-icons alert-icons-warning">
                                            <div class="alert-icons-warning-body"></div>
                                            <div class="alert-icons-warning-dot"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert-desc">
                                    <h6 class="alert-heading">FORM HAS MISSING/INVALID FIELDS</h6>
                                    <p>Please check your information and try again</p>
                                </div>
                            </div>
                        </div>
                        <form class="openaccount-formbox-form" autocomplete="off" novalidate id="openDemoAccountForm" errcontainer="openDemoAccountFormErrors" onsubmit="return submitForm('openDemoAccountForm')">
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>FIRST NAME</label>
                                    <input type="text" name="first_name" class="form-control fvalidate" frule="minl:2,maxl:30" placeholder="">
                                </div>
                                <div class="form-group col">
                                    <label>LAST NAME</label>
                                    <input type="text" name="last_name" class="form-control fvalidate" frule="minl:2,maxl:30" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>EMAIL</label>
                                    <input type="email" name="email" class="form-control fvalidate" frule="email" placeholder="">
                                </div>
                                <div class="form-group col">
                                    <label>PHONE</label>
                                    <input type="text" name="phone" class="form-control inputphonemasktr fvalidate" frule="phone" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>PASSWORD</label>
                                    <input type="password" name="pass" class="form-control fvalidate" frule="minl:8,maxl:32" placeholder="">
                                </div>
                                <div class="form-group col">
                                    <label>RE-PASSWORD</label>
                                    <input type="password" name="conf_pass" class="form-control fvalidate" frule="minl:8,maxl:32,same:pass" placeholder="">
                                </div>
                            </div>
                            <div class="form-group custom-control-group-vertical">
                                <div class="custom-control custom-checkbox d-none">
                                    <input id="RegisterCompanyTerms" class="custom-control-input" type="checkbox" />
                                    <label class="custom-control-label" for="RegisterCompanyTerms">Kullanıcı Sözleşmesini okudum, onaylıyorum.</label>
                                </div>
                                <div class="custom-control custom-checkbox d-none">
                                    <input id="RegisterCompanyGDPA" class="custom-control-input" type="checkbox" />
                                    <label class="custom-control-label" for="RegisterCompanyGDPA">KVKK kapsamında bilgilerimi sizinle paylaşıyorum.</label>
                                </div>
                                <div class="recaptcha-area">
                                    <div class="recaptcha-check">
                                        <div class="g-recaptcha" data-theme="dark" data-sitekey="6LewOKAUAAAAAMDO2yohWeyDcjFAHfcuEqK2mIp4"></div>
                                    </div>
                                    <label>I'm Not Robot</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-success minwidthper100">OPEN DEMO ACCOUNT</button>
{{--                                <button type="submit" class="btn btn-lg btn-success minwidthper100" onclick="submitForm('openDemoAccountForm')">OPEN DEMO ACCOUNT</button>--}}
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Forms -->

            </div>
        </div>
    </div>
    <!-- Account Sign End -->

    <!-- Video Start -->
    <div class="openaccount-video">
        <video class="openaccount-video-movie" style="" preload="auto" autoplay="autoplay" muted="muted" loop>
            <source src="assets/video/homepage_slider_bg_video_01.mp4" type="video/mp4">
            <Video>Tarayıcınız Video Desteklememektedir</Video>
        </video>
        <div class="openaccount-video-mask"></div>
    </div>
    <!-- Video End -->

</section>
<!-- Open Account End -->
@endsection
