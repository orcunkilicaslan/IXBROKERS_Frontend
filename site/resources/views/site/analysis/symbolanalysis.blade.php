@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='ANALIZ / FOREX'
        secondaryTitle='USD/TRY <span class="sitecolorgreen">FORECAST AND NEWS</span>'
        spot='Curabitur consectetur turpis sollicitudin, lacinia metus consequat, congue est.'></x-header-title>

    <!-- Research Start -->
    <section class="research-section section-content">
        <div class="container">
            @php
            /*
 <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div id="tradingview_19de1"  style="height: 500px;"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/FX-USDTRY/" rel="noopener" target="_blank"><span class="blue-text">USDTRY Chart</span></a> by TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
                        {
                            "autosize": true,
                            "symbol": "FX:USDTRY",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "allow_symbol_change": true,
                            "container_id": "tradingview_19de1"
                        }
                    );
                </script>
            </div>
            <!-- TradingView Widget END -->
 */
            @endphp
        </div>
    </section>
    <!-- Research End -->

    <x-about-us></x-about-us>

@endsection
