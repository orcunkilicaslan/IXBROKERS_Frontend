<!-- Form -->
<div class="partners-formbox siteformui" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
    <div class="partners-formbox-wrp">
        <div class="partners-formbox-head">
            <h3 class="partners-formbox-head-title">IB <span class="sitecolorgreen">REGISTRATION FORM</span></h3>
            <p class="partners-formbox-head-desc">We’re glad you’re here. Complete this form to sign up for our partner programme.</p>
        </div>
        <form class="partners-formbox-form ajaxAutoValidate" action="" autocomplete="off" novalidate id="partnerShipForm" method="POST" action="l/partnership/become-introducing-broker">
            @csrf
            <div class="form-row">
                <div class="form-group col">
                    <label>FIRST NAME</label>
                    <input type="text" name="first_name" class="form-control fvalidate" frule="minl:2,maxl:30" placeholder="" value="">
                </div>
                <div class="form-group col">
                    <label>LAST NAME</label>
                    <input type="text" name="last_name" class="form-control fvalidate" frule="minl:2,maxl:30" placeholder="" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label>EMAIL</label>
                    <input type="email" name="email" class="form-control fvalidate" frule="email" placeholder="" value="">
                </div>
                <div class="form-group col">
                    <label>PHONE</label>
                    <input type="text" name="phone" class="form-control inputphonemasktr fvalidate" frule="phone" placeholder="" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label>PROJECTED VOLUME (LOT)</label>
                    <input type="text" name="lotvolume" class="form-control fvalidate"  frule="minv:1, maxv:1000" placeholder="" value="">
                </div>
                <div class="form-group col">
                    <label>INTERESTED PRODUCTS</label>
                    <select class="form-control custom-select fvalidate" frule="not:-1" name="interest">
                        <option selected value="-1">CHOOSE</option>
                        <option value="Forex" selected>FOREX</option>
                        <option value="Commodities">COMMODITIES</option>
                        <option value="Indices">INDICES</option>
                        <option value="Stocks/CFD">STOCKS CFD</option>
                        <option value="Crypto Currencies">CRYPTO CURRENCIES</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>EXPECTATIONS</label>
                <textarea class="form-control fvalidate" rows="3" frule="minl:5, maxl: 1000" name="expectations"></textarea>
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
                <button type="submit" class="btn btn-lg btn-success minwidthper100">SEND IB REGISTRATION FORM</button>
            </div>
        </form>
    </div>
</div>
<!-- Form -->
