@extends('layouts.sitelayout')

@section('content')

    <x-header-title
        primaryTitle='ECONOMIC CALENDAR'
        secondaryTitle='<span class="sitecolorgreen">ECONOMIC</span> CALENDAR 2020'
        spot='Use our economic calendar to explore key global events on the horizon that could subtly shift or substantially shake up the financial markets.'></x-header-title>

    <!-- Research Start -->
    <section class="research-section section-content">
        <div class="container">
            <!-- Economic Calendar -->
            <div class="research-calendar sitetabs">
                <ul class="research-calendar-tabnav nav nav-tabs nav-space-between" role="tablist">
                    <li class="nav-item"><a data-range="today" class="nav-link active" href="#" id="tab-Forex"><span>TODAY</span></a></li>
                    <li class="nav-item"><a data-range="tomorrow" class="nav-link" href="#" id="tab-Commodities"><span>TOMORROW</span></a></li>
                    <li class="nav-item"><a data-range="thisweek" class="nav-link" href="#" id="tab-Indices"><span>THIS WEEK</span></a></li>
                    <li class="nav-item"><a data-range="nextweek" class="nav-link" href="#" id="tab-EquityCFD"><span>NEXT WEEK</span></a></li>
                </ul>
                <div class="research-calendar-currenttime">
                    <p>Current Time: <span class="sitecolorgreen">{{ $current_time }} GMT</span></p>
                </div>
                <div class="research-calendar-tablearea">
                    <div class="table-responsive">
                        <table class="research-calendar-table sitetable hovergreentable table" id="calendarTable">
                            <thead>
                            <tr>
                                <th class="calendartable-time"><span>TIME</span></th>
                                <th class="calendartable-event"><span>EVENT</span></th>
                                <th class="calendartable-impact"><span>IMPACT</span></th>
                                <th class="calendartable-actual"><span>ACTUAL</span></th>
                                <th class="calendartable-forecast"><span>FORECAST</span></th>
                                <th class="calendartable-previous"><span>PREVIOUS</span></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Economic Calendar -->

        </div>
    </section>
    <!-- Research End -->

    <x-about-us></x-about-us>

    <script>
        let startDate = moment().format('YYYY-MM-DD 00:00:01');
        let endDate = moment().format('YYYY-MM-DD 23:59:59');

        {{--let calendarEvents = JSON.parse('{!! json_encode($calendarEvents) !!}');--}}
        let calendarEvents = JSON.parse(`{!! json_encode($calendarEvents) !!}`);


        $(function(){
            updateTable(startDate, endDate);

            $(document).on('click', "ul.research-calendar-tabnav .nav-link", function(event){
                event.preventDefault();
                let start, end;

                switch ($(this).data('range')) {
                    case "today":
                        start = moment().format('YYYY-MM-DD 00:00:01');
                        end = moment().format('YYYY-MM-DD 23:59:59');
                        break;
                    case "tomorrow":
                        start = moment().add(1, 'days').format('YYYY-MM-DD 00:00:01');
                        end = moment().add(1, 'days').format('YYYY-MM-DD 23:59:59');
                        break;
                    case "thisweek":
                        start = moment().subtract(moment().weekday() - 1, 'days').format('YYYY-MM-DD 00:00:01');
                        end = moment().subtract(moment().weekday() - 1, 'days').add(7, 'days').format('YYYY-MM-DD 23:59:59');
                        break;
                    case "nextweek":
                        start = moment().subtract(moment().weekday() - 1, 'days').add(7, 'days').format('YYYY-MM-DD 00:00:01');
                        end = moment().subtract(moment().weekday() - 1, 'days').add(14, 'days').format('YYYY-MM-DD 23:59:59');
                        break;
                }
                $("ul.research-calendar-tabnav .nav-link").removeClass('active');
                $(this).addClass('active');
                updateTable(start, end);
            });
        })

        function updateTable(startDate, endDate){
            clearTable();
            let start = moment(startDate, 'YYYY-MM-DD HH:mm:ss');
            let end = moment(endDate, 'YYYY-MM-DD HH:mm:ss');
            let lastYMD = '';

            calendarEvents.forEach(calendarEvent => {
                let eventDate = moment(calendarEvent.date, 'YYYY-MM-DD HH:mm:ss');

                if(eventDate.isSameOrAfter(start) && eventDate.isSameOrBefore(end) ){
                    let ymd = moment(calendarEvent.date, 'YYYY-MM-DD HH:mm:ss').format('YYYY-MM-DD');
                    if(lastYMD == '' || ymd !== lastYMD){
                        lastYMD = ymd;
                        let html = getDateTableRow(lastYMD);
                        $("table#calendarTable tbody").append(html)
                    }

                    let html = getEventTableRow(calendarEvent);
                    $("table#calendarTable tbody").append(html);

                }
            })
        }

        function clearTable(){
            $("table#calendarTable tbody").empty();
        }

        function getEventTableRow(calendarEvent){

            let html = '<tr>';
            html += `<td><span>${moment(calendarEvent.date, 'YYYY-MM-DD HH:mm:ss').format('HH:mm')}</span></td>`;
            html += `<td>`;
            html += `<span class="calendartd-curreny USD">(${calendarEvent.currency})</span>`;
            html += `<span><a href="#">${calendarEvent.title}</a></span>`;
            html += `</td>`;
            html += `<td><div class="calendarimpact calendarimpact-0${calendarEvent.impact} progress"><div class="progress-bar" role="progressbar"></div></div></td>`;
            html += `<td><span>${calendarEvent.actual}</span></td>`;
            html += `<td><span>${calendarEvent.forecast}</span></td>`;
            html += `<td><span>${calendarEvent.previous}</span></td>`;
            html += '</tr>';
            return html;
        }

        function getDateTableRow(dateString){
            let html = `<tr class="tdcolspan tablecolinfo">`;
            html += `<td colspan="7"><span>${dateString}</span></td>`;
            html += `</tr>`;
            return  html;
        }

    </script>

@endsection

