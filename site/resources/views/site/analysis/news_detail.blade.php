@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='NEWS'
        secondaryTitle='VIVAMUS <span class="sitecolorgreen">SED VELID</span> FAUCIBUS'
        spot='Curabitur consectetur turpis sollicitudin, lacinia metus consequat, congue est.'></x-header-title>

    <!-- Research Start -->
    <section class="research-section section-content">
        <div class="container">
            <h3>{{$news->title}}</h3>
            @switch($news->type)
                @case("forex_news")
                <p>FOREX NEWS</p>
                @break

                @case("economic_indicators")
                <p>ECONOMIC INDICATORS</p>
                @break

                @case("economy_news")
                <p>ECONOMY NEWS</p>
                @break
            @endswitch

            <img src="{{$news->image_url}}" alt="{{$news->title}}">

            @foreach($news->news_detail as $item)
                <p>{!! $item !!}</p>
            @endforeach

        </div>
    </section>
    <!-- Research End -->

    <x-about-us></x-about-us>

@endsection
