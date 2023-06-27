<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8' />
</head>
<body>
<div id='calendar' style="height: 250px"></div>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events : @json($events)
        });
        calendar.render();
    });

</script>
</body>
</html>
