@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='FOREX ANALYSIS'
        secondaryTitle='{{ substr($symbol, 0, 3) }}/{{ substr($symbol, 3) }} <span class="sitecolorgreen">FORECAST AND NEWS</span>'
        spot='Curabitur consectetur turpis sollicitudin, lacinia metus consequat, congue est.'></x-header-title>

    <!-- Research Start -->
    <section class="research-section section-content">
        <div class="container">
            <h1>{!! $analysisData->title !!}</h1>
            <p>{!! $analysisData->spot !!}</p>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div id="tradingview_19de1"  style="height: 500px;"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/FX-USDTRY/" rel="noopener" target="_blank"><span class="blue-text">USDTRY Chart</span></a> by TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
                        {
                            "autosize": true,
                            "symbol": "FX:{{ $symbol }}",
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

            @if(count($analysisData->technical_overviews) > 0)
                <h3>Technical Overview</h3>
                @foreach($analysisData->technical_overviews as $item)
                    <p>{!! $item !!}</p>
                @endforeach
            @endif

            @if(count($analysisData->fundamental_overviews) > 0)
                <h3>Fundamental Overview</h3>
                @foreach($analysisData->fundamental_overviews as $item)
                    <p>{!! $item !!}</p>
                @endforeach
            @endif
        </div>
    </section>
    <!-- Research End -->

    <x-about-us></x-about-us>

@endsection
