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
                                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">OPEN <span class="sitecolorgreen">LIVE ACCOUNT</span></h2>
                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">Open your real investment account now and with the help of our experienced trading advisors, experience IX Brokers' unique trading environment immediately</p>
                            </div>
                        </div>
                    </div>
                    <!-- Title -->

                    <!-- Forms -->
                    <div class="col-xl-5 col-lg-6">
                        <div class="openaccount-formbox siteformui" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">
                            <div class="openaccount-formbox-head">
                                <h2 class="openaccount-formbox-head-title">OPEN <span class="sitecolorgreen">LIVE ACCOUNT</span></h2>
                                <p class="openaccount-formbox-head-desc">Open Account in seconds and begin trading now!</p>
                            </div>
                            <form class="openaccount-formbox-form ajaxAutoValidate" autocomplete="off" novalidate id="openDemoAccountForm" method="POST" action="/account/open-live-account">
                                @csrf
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
                                            <div class="g-recaptcha" data-theme="dark" data-sitekey="{{ env('GCAPTCHASITEKEY') }}"></div>
                                        </div>
                                        <label>I'm Not Robot</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-success minwidthper100">OPEN LIVE ACCOUNT</button>
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
