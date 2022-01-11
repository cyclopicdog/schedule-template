<?php
include_once 'js_TimeDate.php';
include_once 'js_ScheduleTopBar.php';
include_once 'js_DisplaySchedule.php';

?>

<script type="text/javascript">

    const todays_date = new Date();

    const time_date = new TimeDate();

    console.log(time_date.today);

    const container = document.querySelector('#schedule-holder');
    const top_bar_display = new ScheduleTopBar();
    const schedule_display = new DisplaySchedule();

    container.appendChild(top_bar_display.mount());
    container.appendChild(schedule_display.mount());

    console.log(schedule_display.now);


</script>