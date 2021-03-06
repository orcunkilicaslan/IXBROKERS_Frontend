<!doctype html>
<html lang="en">
<head>
    <title>IXBROKERS</title>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=820">
    <link rel="shortcut icon" href="/assets/img/icons/favicon.ico" type="image/x-icon" sizes="32x32" />
    <link id="css-bootstrap" rel="stylesheet" href="/assets/dist/css/bootstrap.css?v=2">
    <link id="css-plugin-app" rel="stylesheet" href="/assets/dist/css/plugin-app.css?v=2">
    <link id="css-custom-app" rel="stylesheet" href="/assets/dist/css/custom-app.css?v=2">
    <link id="be-custom-app" rel="stylesheet" href="/css/site.css?v=2">
    <script id="script-mainpage-app" src="/js/moment-with-locales.js"></script>
    <script id="script-jquery" src="/assets/cdn/jquery/jquery.3.4.1.min.js"></script>
    <script id="script-popper" src="/assets/cdn/popper/popper.1.16.1.min.js"></script>
    <script id="script-bootstrap" src="/assets/cdn/bootstrap/bootstrap.4.4.1.min.js"></script>
    <script id="script-recaptcha" src="https://www.google.com/recaptcha/api.js" async=""></script>
</head>
<body class="dfn-megamenu">

<!-- Header Start -->
<header class="header">

    <!-- Mobile Mask -->
    <div class="dfn-mobilemenu-mask"></div>
    <!-- Mobile Mask -->

    <!-- Web Header -->
    <div class="header-web">
        <div class="header-web-top">
            <div class="container">
                <div class="header-web-top-row row">

                    <!-- Logo -->
                    <div class="header-logo col-auto">
                        <a id="dfn-navtggle" class="dfn-mobilemenu-btn">
                            <div class="btnicon"><span></span></div>
                            <div class="btntext"><small>MENÜ</small></div>
                        </a>
                        <a class="header-logo-link" href="/" title="IXBROKERS" rel="bookmark">
                            <img src="/assets/img/header/header_logo_dark_bg.svg" alt="IXBROKERS">
                        </a>
                    </div>
                    <!-- Logo -->

                    <!-- TopHeadRight -->
                    <div class="header-web-top-headright col-auto">
                        <div class="header-web-top-headright-row row">

                            <!-- Ticker -->
                            <div class="header-ticker col-auto">
                                <ul id="headtickersowl" class="headticker-owl owl-carousel owl-theme">
                                    @foreach($marketPrices as $market)
                                        <li>
                                            <small class="headticker-symbol">{{ $market->market_name }}</small>
                                            <span class="headticker-price">{{ sprintf('%0.4f', $market->current_price) }}</span>
                                        </li>
                                    @endforeach
                                        @foreach($cryptoPrices as $market)
                                            <li>
                                                <small class="headticker-symbol">{{ $market->market_name }}</small>
                                                <span class="headticker-price">{{ sprintf('%0.4f', $market->price) }}</span>
                                            </li>
                                        @endforeach
                                </ul>
                            </div>
                            <!-- Ticker -->

                            <!-- UserArea -->
                            <div class="header-userarea col-auto">
                                <div class="header-userarea-icons">
                                    <a class="userareaicons userareaicons-live livechatstartbtn" href="#" data-toggle="tooltip" data-placement="bottom" title="Connect to Live Chat" rel="bookmark"><i class="headtopicons headtopicons-live"></i></a>
                                    <a class="userareaicons userareaicons-call d-none" href="#" data-toggle="tooltip" data-placement="bottom" title="CALL" rel="bookmark"><i class="headtopicons headtopicons-call"></i></a>
                                    <a class="userareaicons userareaicons-whatsapp" href="#" data-toggle="tooltip" data-placement="bottom" title="Write to us on Whatsapp" rel="bookmark"><i class="headtopicons headtopicons-wp"></i></a>
                                </div>
                            </div>
                            <!-- UserArea -->

                        </div>
                    </div>
                    <!-- TopHeadRight -->

                </div>
            </div>
        </div>
        <div class="header-web-btm">
            <div class="container">
                <div class="header-web-btm-row row">

                    <!-- Navigation -->
                    <div class="header-navigation col">
                        <div class="header-navigation-navbar dfn-nav dfn-headnav">
                            <nav class="dfn-menu">
                                <ul class="dfn-mobil-alt dfn-menu-list">
                                    <li class="dfn-menu-list-item">
                                        <a href="javascript:;" title="TRADING" rel="category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TRADING</a>
                                        <div class="dropdown-menu animated">
                                            <div class="container megamenu">
                                                <div class="megamenu-nav">
                                                    <div class="megamultimenu-row">
                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">ACCOUNTS</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/account/open-demo-account" title="OPEN DEMO ACCOUNT" rel="category">OPEN DEMO ACCOUNT</a></li>
                                                                    <li><a href="/account/open-live-account" title="OPEN LIVE ACCOUNT" rel="category">OPEN LIVE ACCOUNT</a></li>
                                                                    <li><a href="/account/account-types" title="ACCOUNT TYPES" rel="category">ACCOUNT TYPES</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">PRODUCTS</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/products/forex" title="FOREX" rel="category">FOREX</a></li>
                                                                    <li><a href="/products/commodities" title="COMMODITIES" rel="category">COMMODITIES</a></li>
                                                                    <li><a href="/products/indices" title="INDICES" rel="category">INDICES</a></li>
                                                                    <li><a href="/products/stocks-cfd" title="CFD" rel="category">STOCKS CFD</a></li>
                                                                    <li><a href="/products/crypto-currencies" title="CRYPTOCURRENCIES" rel="category">CRYPTOCURRENCIES</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dfn-menu-list-item">
                                        <a href="javascript:;" title="PLATFORMS" rel="category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PLATFORMS</a>
                                        <div class="dropdown-menu animated">
                                            <div class="container megamenu">
                                                <div class="megamenu-nav">
                                                    <div class="megamultimenu-row">
                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">METATRADER 4</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="METATRADER 4 DESKTOP" rel="category">METATRADER 4 DESKTOP</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/web" title="METATRADER 4 WEBTRADER" rel="category">METATRADER 4 WEBTRADER</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/mobile" title="METATRADER 4 MOBILE" rel="category">METATRADER 4 MOBILE</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">METATRADER 5</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/platforms/meta-trader-5/desktop" title="METATRADER 5 DESKTOP" rel="category">METATRADER 5 DESKTOP</a></li>
                                                                    <li><a href="/platforms/meta-trader-5/web" title="METATRADER 5 WEBTRADER" rel="category">METATRADER 5 WEBTRADER</a></li>
                                                                    <li><a href="/platforms/meta-trader-5/mobile" title="METATRADER 5 MOBILE" rel="category">METATRADER 5 MOBILE</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dfn-menu-list-item"><a href="/investments/pamm" title="PAMM" rel="category">PAMM</a></li>
                                    <li class="dfn-menu-list-item">
                                        <a href="javascript:;" title="ANALYSIS" rel="category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ANALYSIS</a>
                                        <div class="dropdown-menu animated">
                                            <div class="container megamenu">
                                                <div class="megamenu-nav">
                                                    <div class="megamultimenu-row">
                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">FOREX</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/analysis/EURUSD" title="EUR/USD" rel="category">EUR/USD</a></li>
                                                                    <li><a href="/analysis/GBPUSD" title="GBP/USD" rel="category">GBP/USD</a></li>
                                                                    <li><a href="/analysis/NZDUSD" title="NZD/USD" rel="category">NZD/USD</a></li>
                                                                    <li><a href="/analysis/USDCHF" title="USD/CHF" rel="category">USD/CHF</a></li>
                                                                    <li><a href="/analysis/USDJPY" title="USD/JPY" rel="category">USD/JPY</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        @php
                                                        /*

                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">COMMODITIES</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="BRENT OIL" rel="category">BRENT OIL</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="OIL" rel="category">OIL</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="SUGAR" rel="category">SUGAR</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="WHEAT" rel="category">WHEAT</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="XAGUSD" rel="category">XAGUSD</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="XAUUSD" rel="category">XAUUSD</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">INDICES</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="DE 30" rel="category">DE 30</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="FRA 40" rel="category">FRA 40</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="NASDAQ 100" rel="category">NASDAQ 100</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="S%P 500" rel="category">S%P 500</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="US 30" rel="category">US 30</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">EQUITY/CFD</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="AMAZON" rel="category">AMAZON</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="APPLE" rel="category">APPLE</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="BMW" rel="category">BMW</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="FACEBOOK" rel="category">FACEBOOK</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="GOOGLE" rel="category">GOOGLE</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="TESLA" rel="category">TESLA</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="megamultimenu-col">
                                                            <div class="megamultimenu-desc">
                                                                <span class="megamultimenu-desc-title">CRYPTO</span>
                                                            </div>
                                                            <div class="megamultimenu-nav menunav">
                                                                <ul>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="BTC/USD" rel="category">BTC/USD</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="ETH/USD" rel="category">ETH/USD</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="LTC/USD" rel="category">LTC/USD</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="XRP/USD" rel="category">XRP/USD</a></li>
                                                                    <li><a href="/platforms/meta-trader-4/desktop" title="XLM/USD" rel="category">XLM/USD</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        */
                                                        @endphp
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="dfn-menu-list-item"><a href="/education" title="EDUCATION" rel="category">EDUCATION</a></li>
                                    <li class="dfn-menu-list-item">
                                        <a href="javascript:;" title="PARTNERSHIP" rel="category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PARTNERSHIP</a>
                                        <div class="dropdown-menu animated">
                                            <div class="container megamenu">
                                                <div class="megamenu-nav menunav">
                                                    <ul>
                                                        <li><a href="/partnership/become-introducing-broker" title="BE A INTRODUCING BROKER" rel="category">BE A INTRODUCING BROKER</a></li>
                                                        <li><a href="/partnership/become-affiliate" title="BE AN AFFILIATE" rel="category">BE AN AFFILIATE</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dfn-menu-list-item">
                                        <a href="javascript:;" title="ECONOMIC CAL & NEWS" rel="category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ECONOMIC CAL & NEWS</a>
                                        <div class="dropdown-menu animated">
                                            <div class="container megamenu">
                                                <div class="megamenu-nav menunav">
                                                    <ul>
                                                        <li><a href="/economic-calendar" title="ECONOMIC CALENDAR" rel="category">ECONOMIC CALENDAR</a></li>
                                                        <li><a href="/news" title="NEWS" rel="category">NEWS</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dfn-menu-list-item"><a href="/company" title="COMPANY" rel="category">COMPANY</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Navigation -->

                    <!-- UserArea -->
                    <div class="header-userarea col-auto">
                        <div class="header-userarea-btns">
                            <a href="https://secure.ixbrokers.com/" class="btn btn-success">CLIENT PORTAL</a>
                        </div>
                    </div>
                    <!-- UserArea -->

                </div>
            </div>
        </div>
    </div>
    <!-- Web Header -->

</header>
<!-- Header End -->




@yield('content')






<!-- Footer Start -->
<footer class="footer">

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="footer-top-logo col">
                    <img src="/assets/img/footer/footer_logo_dark_bg.svg" alt="IXBROKERS" width="182" height="64" />
                </div>
                <div class="footer-top-social col-auto">
                    <ul class="sociallist">
                        <li><a href="#" title="Facebook" rel="external nofollow"><i class="socialicon facebook"></i></a></li>
                        <li><a href="#" title="Twitter" rel="external nofollow"><i class="socialicon twitter"></i></a></li>
                        <li><a href="#" title="Linkedin" rel="external nofollow"><i class="socialicon linkedin"></i></a></li>
                        <li><a href="#" title="Instagram" rel="external nofollow"><i class="socialicon instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top -->

    <!-- Navigation -->
    <div class="footer-navigation">
        <div class="container">
            <div class="row">
                <div class="footer-navigation-col col-sm-6 col-xl-4">
                    <h4>TRADING</h4>
                    <div class="row">
                        <div class="col">
                            <h5>ACCOUNTS</h5>
                            <ul class="footer-navigation-list">
                                <li><a href="/account/open-demo-account" title="OPEN DEMO ACCOUNT" rel="category">OPEN DEMO ACCOUNT</a></li>
                                <li><a href="/account/open-live-account" title="OPEN LIVE ACCOUNT" rel="category">OPEN LIVE ACCOUNT</a></li>
                                <li><a href="/account/account-types" title="ACCOUNT TYPES" rel="category">ACCOUNT TYPES</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5>PRODUCTS</h5>
                            <ul class="footer-navigation-list">
                                <li><a href="/products/forex" title="FOREX" rel="category">FOREX</a></li>
                                <li><a href="/products/commodities" title="COMMODITIES" rel="category">COMMODITIES</a></li>
                                <li><a href="/products/indices" title="INDICES" rel="category">INDICES</a></li>
                                <li><a href="/products/stocks-cfd" title="CFD" rel="category">STOCKS CFD</a></li>
                                <li><a href="/products/crypto-currencies" title="CRYPTOCURRENCIES" rel="category">CRYPTOCURRENCIES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-navigation-col navmtmenu col-sm-6 col-xl-2">
                    <h4>PLATFORMS</h4>
                    <div class="row">
                        <div class="col">
                            <h5>METATRADER 4</h5>
                            <ul class="footer-navigation-list">
                                <li><a href="/platforms/meta-trader-4/desktop" title="METATRADER 4 DESKTOP" rel="category">MT4 DESKTOP</a></li>
                                <li><a href="/platforms/meta-trader-4/web" title="METATRADER 4 WEBTRADER" rel="category">MT4 WEBTRADER</a></li>
                                <li><a href="/platforms/meta-trader-4/mobile" title="METATRADER 4 MOBILE" rel="category">MT4 MOBILE</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5>METATRADER 5</h5>
                            <ul class="footer-navigation-list">
                                <li><a href="/platforms/meta-trader-5/desktop" title="METATRADER 5 DESKTOP" rel="category">MT5 DESKTOP</a></li>
                                <li><a href="/platforms/meta-trader-5/web" title="METATRADER 5 WEBTRADER" rel="category">MT5 WEBTRADER</a></li>
                                <li><a href="/platforms/meta-trader-5/mobile" title="METATRADER 5 MOBILE" rel="category">MT5 MOBILE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-navigation-col navmultimenu col-sm-9 col-md-6 col-xl-3">
                    <div class="row">
                        <div class="col-xm-6 col-xl-12">
                            <h4>PARTNERSHIP</h4>
                            <ul class="footer-navigation-list">
                                <li><a href="/partnership/become-introducing-broker" title="BE A INTRODUCING BROKER" rel="category">BE A INTRODUCING BROKER</a></li>
                                <li><a href="/partnership/become-affiliate" title="BE AN AFFILIATE" rel="category">BE AN AFFILIATE</a></li>
                            </ul>
                        </div>
                        <div class="col-xm-6 col-xl-12">
                            <h4>ECONOMIC CAL & NEWS</h4>
                            <ul class="footer-navigation-list">
                                <li><a href="/economic-calendar" title="ECONOMIC CALENDAR" rel="category">ECONOMIC CALENDAR</a></li>
                                <li><a href="/news" title="NEWS" rel="category">NEWS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-navigation-col col-sm-3 col-xl-2">
                    <h4><a href="/investments/pamm" title="PAMM" rel="category">PAMM</a></h4>
                    <h4><a href="/education" title="EDUCATION" rel="category">EDUCATION</a></h4>
                    <h4><a href="/company" title="COMPANY" rel="category">COMPANY</a></h4>
                </div>
                <div class="footer-navigation-col navanalysismenu col-sm-12 col-xl-12">
                    <h4>ANALYSIS</h4>
                    <div class="row">
                        <div class="col-xm-4 col-sm-6 col-lg-4">
                            <h5>FOREX</h5>
                            <ul class="footer-navigation-list ulanalysisforexmenu">
                                <li><a href="/analysis/EURUSD" title="EUR/USD" rel="category">EUR/USD</a></li>
                                <li><a href="/analysis/GBPUSD" title="GBP/USD" rel="category">GBP/USD</a></li>
                                <li><a href="/analysis/NZDUSD" title="NZD/USD" rel="category">NZD/USD</a></li>
                                <li><a href="/analysis/USDCHF" title="USD/CHF" rel="category">USD/CHF</a></li>
                                <li><a href="/analysis/USDJPY" title="USD/JPY" rel="category">USD/JPY</a></li>
                            </ul>
                        </div>
                        <div class="col-xm-4 col-sm-3 col-lg-2">
                            <h5>COMMODITIES</h5>
                            <ul class="footer-navigation-list">
                                <li><a href="#" title="BRENT OIL" rel="category">BRENT OIL</a></li>
                                <li><a href="#" title="OIL" rel="category">OIL</a></li>
                                <li><a href="#" title="SUGAR" rel="category">SUGAR</a></li>
                                <li><a href="#" title="WHEAT" rel="category">WHEAT</a></li>
                                <li><a href="#" title="XAGUSD" rel="category">XAGUSD</a></li>
                                <li><a href="#" title="XAUUSD" rel="category">XAUUSD</a></li>
                            </ul>
                        </div>
                        <div class="col-xm-4 col-sm-3 col-lg-2">
                            <h5>INDICES</h5>
                            <ul class="footer-navigation-list">
                                <li><a href="#" title="DE 30" rel="category">DE 30</a></li>
                                <li><a href="#" title="FRA 40" rel="category">FRA 40</a></li>
                                <li><a href="#" title="NASDAQ 100" rel="category">NASDAQ 100</a></li>
                                <li><a href="#" title="S%P 500" rel="category">S%P 500</a></li>
                                <li><a href="#" title="US 30" rel="category">US 30</a></li>
                            </ul>
                        </div>
                        <div class="col-xm-4 col-sm-3 col-lg-2">
                            <h5>EQUITY/CFD</h5>
                            <ul class="footer-navigation-list">
                                <li><a href="#" title="AMAZON" rel="category">AMAZON</a></li>
                                <li><a href="#" title="APPLE" rel="category">APPLE</a></li>
                                <li><a href="#" title="BMW" rel="category">BMW</a></li>
                                <li><a href="#" title="FACEBOOK" rel="category">FACEBOOK</a></li>
                                <li><a href="#" title="GOOGLE" rel="category">GOOGLE</a></li>
                                <li><a href="#" title="TESLA" rel="category">TESLA</a></li>
                            </ul>
                        </div>
                        <div class="col-xm-4 col-sm-3 col-lg-2">
                            <h5>CRYPTO</h5>
                            <ul class="footer-navigation-list">
                                <li><a href="#" title="BTC/USD" rel="category">BTC/USD</a></li>
                                <li><a href="#" title="ETH/USD" rel="category">ETH/USD</a></li>
                                <li><a href="#" title="LTC/USD" rel="category">LTC/USD</a></li>
                                <li><a href="#" title="XRP/USD" rel="category">XRP/USD</a></li>
                                <li><a href="#" title="XLM/USD" rel="category">XLM/USD</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation -->

    <!-- Risk Warning -->
    <div class="footer-risk">
        <div class="container">
            <div class="footer-risk-box">
                <h6>RISK WARNING</h6>
                <p>All financial products traded on margin carry a high degree of risk to your capital. They are not suited to all investors and you can lose more than your initial deposit. Please ensure that you fully understand the risks involved and seek independent advice if necessary. For further information, please see our full Risk Warning, <a href="/legal/terms-and-conditions" title="Terms and Conditions" rel="bookmark">Terms and Conditions</a> and <a href="/legal/privacy-policy" title="Privacy Policy" rel="bookmark">Privacy Policy</a>.</p>
                <p>We use cookies to support features like login and allow trusted media partners to analyse aggregated site usage. Keep cookies enabled to enjoy the full site experience. By browsing our site with cookies enabled, you are agreeing to their use. Review our cookies information for <a href="/legal/cookie-policy" title="Cookie Policy" rel="bookmark">more details</a></p>
            </div>
        </div>
    </div>
    <!-- Risk Warning -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-row row">
                <div class="footer-bottom-copyright col-auto">
                    <p><strong class="sitecolorgreen">©</strong> 2020 <i class="copylogo"><svg xmlns="http://www.w3.org/2000/svg" width="225" height="29.998" viewBox="0 0 225 29.998"> <g id="IXBROKERSLogoDark" transform="translate(-102.524 -62.61)"> <path id="Path_86" data-name="Path 86" d="M102.524,91.531V64.3c0-.573.273-.86.822-.86h5.874a.761.761,0,0,1,.861.86v27.23a.76.76,0,0,1-.861.858h-5.874c-.549,0-.822-.286-.822-.858" transform="translate(0 -0.208)" fill="#fff"/> <path id="Path_87" data-name="Path 87" d="M144.156,64.3l-8.925,13.3,9.355,13.928a.615.615,0,0,1,.1.625.607.607,0,0,1-.567.232h-6.7a1.444,1.444,0,0,1-1.214-.858L131,83.807,125.8,91.532a2.6,2.6,0,0,1-.588.7,1.212,1.212,0,0,1-.666.155h-6.618a.622.622,0,0,1-.567-.215c-.093-.143-.06-.357.1-.643L126.81,77.6l-8.846-13.3a.726.726,0,0,1-.159-.6c.052-.168.223-.252.511-.252h6.773a1.013,1.013,0,0,1,.666.195,3.172,3.172,0,0,1,.549.663l4.735,7.021,4.7-7.021a2.546,2.546,0,0,1,.549-.643,1.1,1.1,0,0,1,.7-.215h6.7c.285,0,.468.09.548.273a.6.6,0,0,1-.078.584" transform="translate(-3.695 -0.209)" fill="#fff"/> <path id="Path_88" data-name="Path 88" d="M158.8,91.57V64.34c0-.6.285-.9.859-.9H172.07a8.286,8.286,0,0,1,3.251.644,8.14,8.14,0,0,1,2.661,1.8,8.741,8.741,0,0,1,1.8,2.671,8.079,8.079,0,0,1,.666,3.277,7.45,7.45,0,0,1-1.763,5,10.058,10.058,0,0,1,2.212,3.06,8.691,8.691,0,0,1,.843,3.767,8.451,8.451,0,0,1-.686,3.355A8.958,8.958,0,0,1,179.2,89.8a9.07,9.07,0,0,1-2.721,1.89,7.807,7.807,0,0,1-3.27.7H159.659c-.576,0-.861-.273-.861-.82M172.93,72.025a2.765,2.765,0,0,0-.822-2.009,2.828,2.828,0,0,0-2.112-.84h-3.6v5.658h3.523a3.049,3.049,0,0,0,2.19-.78,2.664,2.664,0,0,0,.823-2.03m1.059,11.313a3.1,3.1,0,0,0-.235-1.17,3.65,3.65,0,0,0-.627-1.034,3.293,3.293,0,0,0-.939-.741,2.567,2.567,0,0,0-1.213-.291h-4.58v6.514h4.58a2.7,2.7,0,0,0,2.152-1.014,3.418,3.418,0,0,0,.862-2.265" transform="translate(-14.068 -0.208)" fill="#fff"/> <path id="Path_89" data-name="Path 89" d="M195.7,91.531V64.3a.994.994,0,0,1,.195-.588.725.725,0,0,1,.627-.273h13a8.418,8.418,0,0,1,3.777.84,9.688,9.688,0,0,1,2.937,2.205,10.008,10.008,0,0,1,2.565,6.671,8.466,8.466,0,0,1-1.311,4.485,10.749,10.749,0,0,1-3.465,3.512l5.6,10.379a.611.611,0,0,1,.078.585c-.078.183-.261.273-.549.273h-7.048a1.022,1.022,0,0,1-.626-.154,1.914,1.914,0,0,1-.43-.663l-4.66-8.819h-3.132v8.778a.76.76,0,0,1-.861.858h-5.871c-.549,0-.822-.286-.822-.858m11.9-22.08h-4.347v7.061h4.347a3.3,3.3,0,0,0,1.41-.292,3.686,3.686,0,0,0,1.1-.78,3.467,3.467,0,0,0,.724-1.133A3.525,3.525,0,0,0,211.09,73a3.446,3.446,0,0,0-.254-1.269,3.714,3.714,0,0,0-.724-1.15,3.831,3.831,0,0,0-1.1-.818,3.121,3.121,0,0,0-1.41-.312" transform="translate(-23.295 -0.207)" fill="#fff"/> <path id="Path_90" data-name="Path 90" d="M230.574,77.813a14.506,14.506,0,0,1,1.174-5.835,15.259,15.259,0,0,1,3.191-4.738,14.852,14.852,0,0,1,4.756-3.2,15.075,15.075,0,0,1,11.646,0,15.039,15.039,0,0,1,7.97,7.939,14.974,14.974,0,0,1,0,11.627,14.9,14.9,0,0,1-3.21,4.72,15.342,15.342,0,0,1-4.76,3.18,15.093,15.093,0,0,1-11.646,0,14.841,14.841,0,0,1-7.947-7.9,14.391,14.391,0,0,1-1.174-5.792m7.554-.04a8.311,8.311,0,0,0,.548,3.042,7.5,7.5,0,0,0,1.528,2.439,7.168,7.168,0,0,0,2.349,1.638,7.6,7.6,0,0,0,5.949,0,7.168,7.168,0,0,0,2.349-1.638,7.47,7.47,0,0,0,1.527-2.439,8.28,8.28,0,0,0,.549-3.042,8.178,8.178,0,0,0-.549-3,7.671,7.671,0,0,0-1.527-2.457,7.044,7.044,0,0,0-2.349-1.657,7.6,7.6,0,0,0-5.949,0A7.044,7.044,0,0,0,240.2,72.31a7.728,7.728,0,0,0-1.529,2.457,8.209,8.209,0,0,0-.547,3" transform="translate(-32.012 -0.065)" fill="#fff"/> <path id="Path_91" data-name="Path 91" d="M337.9,91.531V64.3a.979.979,0,0,1,.2-.585.713.713,0,0,1,.626-.275h13a8.432,8.432,0,0,1,3.777.84,9.686,9.686,0,0,1,2.937,2.205A10.008,10.008,0,0,1,361,73.158a8.479,8.479,0,0,1-1.311,4.485,10.812,10.812,0,0,1-3.465,3.513l5.6,10.376a.611.611,0,0,1,.077.585c-.077.18-.261.273-.548.273H354.3a1,1,0,0,1-.626-.156,1.934,1.934,0,0,1-.432-.663l-4.659-8.814h-3.132v8.777a.76.76,0,0,1-.861.858h-5.874c-.546,0-.819-.286-.819-.859M349.8,69.45h-4.347V76.51H349.8a3.28,3.28,0,0,0,1.41-.292,3.66,3.66,0,0,0,1.1-.78,3.413,3.413,0,0,0,.722-1.132A3.5,3.5,0,0,0,353.284,73a3.393,3.393,0,0,0-.255-1.266,3.7,3.7,0,0,0-.722-1.152,3.831,3.831,0,0,0-1.1-.818,3.122,3.122,0,0,0-1.41-.313" transform="translate(-58.844 -0.208)" fill="#fff"/> <path id="Path_92" data-name="Path 92" d="M377.624,82.857c.235.183.521.423.861.721a13.567,13.567,0,0,0,1.174.917,9.414,9.414,0,0,0,1.977,1.036,5.89,5.89,0,0,0,2.055.37,3.614,3.614,0,0,0,2.76-.822,2.787,2.787,0,0,0,.726-1.909,1.5,1.5,0,0,0-.471-1.092,5.3,5.3,0,0,0-1.116-.84,8.406,8.406,0,0,0-1.37-.624q-.725-.252-1.273-.449a19.381,19.381,0,0,1-7.066-3.862,7.484,7.484,0,0,1-2.329-5.657,7.184,7.184,0,0,1,2.838-5.852,9.752,9.752,0,0,1,3.268-1.62A15.885,15.885,0,0,1,387.351,63a12.115,12.115,0,0,1,3.231,1.288,17.079,17.079,0,0,1,2.308,1.6q.981.821.979,1.365a1.676,1.676,0,0,1-.509.938l-3.015,3.2a.94.94,0,0,1-.666.312.805.805,0,0,1-.489-.159c-.146-.1-.308-.232-.489-.388l-.2-.156a13,13,0,0,0-1.9-1.307,4.665,4.665,0,0,0-2.367-.643,5.324,5.324,0,0,0-2.232.429,1.567,1.567,0,0,0-.939,1.562,1.824,1.824,0,0,0,1.1,1.676A21.33,21.33,0,0,0,385.416,74q2.072.7,3.836,1.443a12.4,12.4,0,0,1,3.035,1.774,7.353,7.353,0,0,1,1.975,2.458,7.706,7.706,0,0,1,.706,3.453,8.455,8.455,0,0,1-.88,3.881,9,9,0,0,1-2.407,2.965,11.412,11.412,0,0,1-3.6,1.912,14.265,14.265,0,0,1-4.464.681,11.8,11.8,0,0,1-3.015-.392,16.232,16.232,0,0,1-2.877-1.051,15.923,15.923,0,0,1-2.6-1.562,13.969,13.969,0,0,1-2.152-1.95l-.078-.04a.215.215,0,0,0-.078-.1.246.246,0,0,1-.078-.06,1.3,1.3,0,0,1-.431-.777,1.158,1.158,0,0,1,.431-.741l3.4-3.241a1.264,1.264,0,0,1,.666-.27,1.425,1.425,0,0,1,.822.468" transform="translate(-67.444 0)" fill="#fff"/> <path id="Path_93" data-name="Path 93" d="M304.19,91.534V64.3a.76.76,0,0,1,.861-.86h19.461a.761.761,0,0,1,.861.86v4.992a.761.761,0,0,1-.861.859H311.747v4.8h9.709q.941,0,.942.9v4.018q0,.857-.942.858h-9.709v5H324.9a.76.76,0,0,1,.861.858v4.955a.761.761,0,0,1-.861.859H305.051a.76.76,0,0,1-.861-.859" transform="translate(-50.416 -0.208)" fill="#fff"/> <path id="Path_94" data-name="Path 94" d="M293.134,91.492l-10-13.581,8.979-13.574a1,1,0,0,0,.234-.6c0-.2-.154-.292-.468-.292h-7.046a3.388,3.388,0,0,0-.785.076,1.37,1.37,0,0,0-.666.548l-8.562,13.157a1.3,1.3,0,0,0-.277.693,1.167,1.167,0,0,0,.141.568l9.563,13.047a2.025,2.025,0,0,0,.507.642,1.108,1.108,0,0,0,.706.215h7.4c.6,0,.69-.3.271-.9" transform="translate(-43.005 -0.208)" fill="#0eaf34"/> </g> </svg></i></p>
                </div>
                <div class="footer-bottom-contact col-auto d-none"></div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->

</footer>
<!-- Footer End -->

<!-- Cookies Notification Messages -->
{{--TODO: Cookie yoksa göster varsa siktiret--}}
<div class="cookies-notification alert alert-warning alert-dismissible fade show" role="alert">
    <div class="notification-body">
        <div class="notification-head">
            <i class="cookiesnotificon"></i>
            <h6>COOKIES <br />NOTIFICATION</h6>
        </div>
        <p>We use cookies on our site, limited to the purposes set out in our cookie policy and in accordance with the legislation. By visiting the site, you are deemed to have allowed cookies. For details <a class="urllink" href="Legal_Cookie_Policy.html" rel="noopener noreferrer nofollow" target="_blank">Cookie Policy </a> you can review.</p>
    </div>
    <a class="notification-close" href="#" title="Dismiss Notification" data-dismiss="alert" aria-label="Close">Close</a>
</div>
<!-- Cookies Notification Messages -->

<!-- Live Chat Script Start -->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f0ff4315b59f94722bad30c/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
    $('.livechatstartbtn').on('click', function(){
        Tawk_API.showWidget();
        Tawk_API.maximize();
    });
</script>
<!-- Live Chat Script End -->

<!-- JavaScript Start -->
<script id="script-owl-carousel" src="/assets/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
<script id="script-inputmask" src="/assets/vendor/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script id="script-aos" src="/assets/vendor/aos/dist/aos.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script id="script-plugin-app" src="/assets/dist/js/plugin-app.js?v=2"></script>
<script id="script-mainpage-app" src="/assets/dist/js/custom-app.js?v=2"></script>
<script id="script-mainpage-app" src="/js/forms.js?v=2"></script>

<!-- JavaScript End -->

</body>
</html>
