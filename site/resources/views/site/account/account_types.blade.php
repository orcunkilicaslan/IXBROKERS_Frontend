@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='ACCOUNT TYPES'
        secondaryTitle='COMPARE <span class="sitecolorgreen">ACCOUNTS</span>'
        spot='Compare the account types below and find the best for you.<br/>IX Brokers offers real STP / ECN environment for its clients.'></x-header-title>

    <!-- Account Start -->
    <section class="account-section section-content">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">ACCOUNT <span class="sitecolorgreen">TYPES</span></h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">IX Brokers delivers the best trading environment for any type of trader. Either you are a newbie or a pro trader, IX Brokers' trading infrastructure gives you the best one. Just pick one them and let our advisors guide you for your best.</p>
            </div>
            <!-- Title -->

            <!-- Account Types -->
            <div class="account-types">
                <div class="component-siteaccounttypes table-responsive"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <table class="accounttypestable table table-striped table-borderless">
                        <thead>
                        <tr>
                            <th class="firsttitle">
                                <h4 class="accounttypes-title">ACCOUNT <span class="sitecolorgreen">TYPES</span></h4>
                            </th>
                            <th>
                                <div class="accounttypes-icons">
                                    <i class="accounttypes-icons-text sitecolorgreen">SV</i>
                                    <div class="accounttypes-icons-pulse pulsegreen"></div>
                                </div>
                                <h4 class="accounttypes-title">Standard <strong>Variable</strong></h4>
                            </th>
                            <th>
                                <div class="accounttypes-icons">
                                    <i class="accounttypes-icons-text sitecolorblue">FIX</i>
                                    <div class="accounttypes-icons-pulse pulseblue"></div>
                                </div>
                                <h4 class="accounttypes-title">Standard <strong>Fixed</strong></h4>
                            </th>
                            <th>
                                <div class="accounttypes-icons">
                                    <i class="accounttypes-icons-text sitecolororange">VIP</i>
                                    <div class="accounttypes-icons-pulse pulseorange"></div>
                                </div>
                                <h4 class="accounttypes-title">VIP <strong>Variable</strong></h4>
                            </th>
                            <th>
                                <div class="accounttypes-icons">
                                    <i class="accounttypes-icons-text sitecolorred">ZR</i>
                                    <div class="accounttypes-icons-pulse pulsered"></div>
                                </div>
                                <h4 class="accounttypes-title">Ecn Zero <strong>Account</strong></h4>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>İşlem Platformu</td>
                            <td>MT5, Mobile, Web</td>
                            <td>MT5, Mobile, Web</td>
                            <td>MT5, Mobile, Web</td>
                            <td>MT5, Mobile, Web</td>
                        </tr>
                        <tr>
                            <td>Emir tipi</td>
                            <td>STP</td>
                            <td>STP</td>
                            <td>DD</td>
                            <td>DD</td>
                        </tr>
                        <tr>
                            <td>Minimum Deposit</td>
                            <td>5000USD</td>
                            <td>250USD</td>
                            <td>0</td>
                            <td>1500USD</td>
                        </tr>
                        <tr>
                            <td>EURUSD Spreadi</td>
                            <td>Sıfırdan Başlayan</td>
                            <td>0.5'ten başlayan</td>
                            <td>0.90'dan başlayan</td>
                            <td>1.0'dan başlayan</td>
                        </tr>
                        <tr>
                            <td>Komisyon</td>
                            <td>Hayır</td>
                            <td>Hayır</td>
                            <td>Hayır</td>
                            <td>0.003% (sorunuz)</td>
                        </tr>
                        <tr>
                            <td>Kaldıraç</td>
                            <td>Max 1:200</td>
                            <td>400</td>
                            <td>400</td>
                            <td>1:200()</td>
                        </tr>
                        <tr>
                            <td>Stop-Out Seviyesi</td>
                            <td>20%</td>
                            <td>20%</td>
                            <td>20%</td>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <td>Bonus</td>
                            <td>50</td>
                            <td>40</td>
                            <td>40</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Hesap Para Birimi	</td>
                            <td>USD</td>
                            <td>USD</td>
                            <td>USD</td>
                            <td>USD</td>
                        </tr>
                        <tr>
                            <td>CFD'ler</td>
                            <td>Evet</td>
                            <td>Evet</td>
                            <td>Evet</td>
                            <td>Evet</td>
                        </tr>
                        <tr>
                            <td>Endeksler</td>
                            <td>Evet</td>
                            <td>Kısmen</td>
                            <td>Kısmen</td>
                            <td>Evet</td>
                        </tr>
                        <tr>
                            <td>Metaller</td>
                            <td>Evet</td>
                            <td>Evet</td>
                            <td>Evet</td>
                            <td>Evet</td>
                        </tr>
                        <tr>
                            <td>Hisse Senetleri</td>
                            <td>Evet</td>
                            <td>Hayır</td>
                            <td>Hayır</td>
                            <td>Hayır</td>
                        </tr>
                        <tr>
                            <td>Kripto Paralar</td>
                            <td>Evet</td>
                            <td>Hayır</td>
                            <td>Hayır</td>
                            <td>Hayır</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Account Types -->

        </div>
    </section>
    <!-- Account End -->

    <x-about-us></x-about-us>
@endsection
