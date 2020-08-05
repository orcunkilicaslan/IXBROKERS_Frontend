@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='ECONOMIC CALENDAR'
        secondaryTitle='VIVAMUS <span class="sitecolorgreen">SED VELID</span> FAUCIBUS'
        spot='Curabitur consectetur turpis sollicitudin, lacinia metus consequat, congue est.'></x-header-title>

    <!-- Research Start -->
    <section class="research-section section-content">
        <div class="container">
            <p>Current Time: 07:21 GMT+0</p>
            <ul class="summarytable-tabnav nav nav-tabs nav-space-between" role="tablist" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <li class="nav-item"><a class="nav-link" id="tab-Forex" data-toggle="tab" href="#Forex" role="tab" aria-controls="Forex" aria-selected="false"><span>TODAY</span></a></li>
                <li class="nav-item"><a class="nav-link" id="tab-Commodities" data-toggle="tab" href="#Commodities" role="tab" aria-controls="Commodities" aria-selected="false"><span>TOMORROW</span></a></li>
                <li class="nav-item"><a class="nav-link" id="tab-Indices" data-toggle="tab" href="#Indices" role="tab" aria-controls="Indices" aria-selected="false"><span>THIS WEEK</span></a></li>
                <li class="nav-item"><a class="nav-link" id="tab-EquityCFD" data-toggle="tab" href="#EquityCFD" role="tab" aria-controls="EquityCFD" aria-selected="false"><span>NEXT WEEK</span></a></li>
            </ul>
            <table class="summarytable-table sitetable linetable fixedtable hovergreentable table">
                <thead>
                <tr>
                    <th><span>TIME</span></th>
                    <th><span>CURRENCY</span></th>
                    <th><span>IMPORTANCE</span></th>
                    <th><span>EVENT</span></th>
                    <th><span>ACTUAL</span></th>
                    <th><span>FORECAST</span></th>
                    <th><span>PREVIOUS</span></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span>00:30</span></td>
                        <td><span>AUD</span></td>
                        <td><span>3</span></td>
                        <td><span>RBA Interest Rate Decision (Aug)</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                    </tr>
                    <tr>
                        <td><span>00:30</span></td>
                        <td><span>AUD</span></td>
                        <td><span>1</span></td>
                        <td><span>RBA Interest Rate Decision (Aug)</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                    </tr>
                    <tr>
                        <td><span>00:30</span></td>
                        <td><span>AUD</span></td>
                        <td><span>2</span></td>
                        <td><span>RBA Interest Rate Decision (Aug)</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                    </tr>
                    <tr>
                        <td><span>00:30</span></td>
                        <td><span>AUD</span></td>
                        <td><span>3</span></td>
                        <td><span>RBA Interest Rate Decision (Aug)</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                    </tr>
                    <tr>
                        <td><span>00:30</span></td>
                        <td><span>AUD</span></td>
                        <td><span>3</span></td>
                        <td><span>RBA Interest Rate Decision (Aug)</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                    </tr>
                    <tr>
                        <td><span>00:30</span></td>
                        <td><span>AUD</span></td>
                        <td><span>3</span></td>
                        <td><span>RBA Interest Rate Decision (Aug)</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                    </tr>
                    <tr>
                        <td><span>00:30</span></td>
                        <td><span>AUD</span></td>
                        <td><span>3</span></td>
                        <td><span>RBA Interest Rate Decision (Aug)</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                        <td><span>0.25%</span></td>
                    </tr>

                </tbody>
            </table>


        </div>
    </section>
    <!-- Research End -->

    <x-about-us></x-about-us>

@endsection
