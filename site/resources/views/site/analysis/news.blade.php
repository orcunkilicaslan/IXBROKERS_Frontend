@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='NEWS'
        secondaryTitle='VIVAMUS <span class="sitecolorgreen">SED VELID</span> FAUCIBUS'
        spot='Curabitur consectetur turpis sollicitudin, lacinia metus consequat, congue est.'></x-header-title>

    <!-- Research Start -->
    <section class="research-section section-content">
        <div class="container">
            <ul>
                @foreach($news as $newsItem)
                    <li style="margin-bottom: 50px;">
                        <h3>{{$newsItem->title}}</h3>
                        @switch($newsItem->type)
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

                        <img src="{{$newsItem->image_url}}" alt="{{$newsItem->title}}">
                        <p>{!! implode(array_slice($newsItem->news_detail,0,3)) !!}</p>
                        <a href="/news/{{$newsItem->_id}}" class="btn btn-secondary">CONTINUE READING</a>
                    </li>
                @endforeach
            </ul>

            <a href="https://secure.ixbrokers.com/" class="btn btn-success">PREVIOUS</a>
            <a href="https://secure.ixbrokers.com/" class="btn btn-success">NEXT</a>
        </div>
    </section>
    <!-- Research End -->

    <x-about-us></x-about-us>

@endsection
