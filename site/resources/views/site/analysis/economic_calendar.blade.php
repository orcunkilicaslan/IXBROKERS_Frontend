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

            <ul class="summarytable-tabnav nav nav-pills nav-space-between" role="tablist" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <li class="nav-item"><a data-range="today" class="nav-link active" href="#" id="tab-Forex"><span>TODAY</span></a></li>
                <li class="nav-item"><a data-range="tomorrow" class="nav-link" href="#" id="tab-Commodities"><span>TOMORROW</span></a></li>
                <li class="nav-item"><a data-range="thisweek" class="nav-link" href="#" id="tab-Indices" ><span>THIS WEEK</span></a></li>
                <li class="nav-item"><a data-range="nextweek" class="nav-link" href="#" id="tab-EquityCFD" ><span>NEXT WEEK</span></a></li>
            </ul>

            <table class="summarytable-table sitetable linetable fixedtable hovergreentable table" id="calendarTable">
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
                <tbody></tbody>
            </table>


        </div>
    </section>
    <!-- Research End -->

    <x-about-us></x-about-us>

    <script>
        let startDate = moment().format('YYYY-MM-DD 00:00:01');
        let endDate = moment().format('YYYY-MM-DD 23:59:59');

        let calendarEvents = JSON.parse('{!! json_encode($calendarEvents) !!}');

        $(function(){
            updateTable(startDate, endDate);

            $(document).on('click', "ul.summarytable-tabnav .nav-link", function(event){
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
                $("ul.summarytable-tabnav .nav-link").removeClass('active');
                $(this).addClass('active');
                updateTable(start, end);
            });
        })

        function updateTable(startDate, endDate){
            clearTable();
            let start = moment(startDate, 'YYYY-MM-DD HH:mm:ss');
            let end = moment(endDate, 'YYYY-MM-DD HH:mm:ss');
            calendarEvents.forEach(calendarEvent => {
                let eventDate = moment(calendarEvent.date, 'YYYY-MM-DD HH:mm:ss');
                console.log(start.format('YYYY-MM-DD HH:mm'), end.format('YYYY-MM-DD HH:mm'), eventDate.format('YYYY-MM-DD HH:mm'));
                console.log(eventDate.isSameOrAfter(start));
                console.log(eventDate.isSameOrBefore(end));

                if(eventDate.isSameOrAfter(start) && eventDate.isSameOrBefore(end) ){
                    let html = getTableRow(calendarEvent);
                    $("table#calendarTable tbody").append(html);
                }
            })
        }

        function clearTable(){
            $("table#calendarTable tbody").empty();
        }

        function getTableRow(calendarEvent){
            let html = '<tr>';
            html += `<td><span>${moment(calendarEvent.date, 'YYYY-MM-DD HH:mm:ss').format('HH:mm')}</span></td>`;
            html += `<td><span>${calendarEvent.currency}</span></td>`;
            html += `<td><span>${calendarEvent.impact}</span></td>`;
            html += `<td><span><a href="#">${calendarEvent.title}</a></span></td>`;
            html += `<td><span>${calendarEvent.actual}</span></td>`;
            html += `<td><span>${calendarEvent.forecast}</span></td>`;
            html += `<td><span>${calendarEvent.previous}</span></td>`;
            html += '</tr>';
            return html;
        }

    </script>

@endsection

