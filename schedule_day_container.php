<?php
    if($view == "month")
    {
        $show_times = "hide-schedule";
        $display_month = "sd-month";
    } else {
        $view = intval($view);
        $show_times = "";
        $display_month = "sd-$view";
    }
?>

<div class="schedule-window__container">

    <div class="schedule-window__time-bar <?= $show_times ?>">
        <div class="schedule-window__title"></div>
        <div class="schedule-window__time-frames-container">
            <div class="schedule-window__time-frames">00.00</div>
            <div class="schedule-window__time-frames">01.00</div>
            <div class="schedule-window__time-frames">02.00</div>
            <div class="schedule-window__time-frames">03.00</div>
            <div class="schedule-window__time-frames">04.00</div>
            <div class="schedule-window__time-frames">05.00</div>
            <div class="schedule-window__time-frames">06.00</div>
            <div class="schedule-window__time-frames">07.00</div>
            <div class="schedule-window__time-frames">08.00</div>
            <div class="schedule-window__time-frames">09.00</div>
            <div class="schedule-window__time-frames">10.00</div>
            <div class="schedule-window__time-frames">11.00</div>
            <div class="schedule-window__time-frames">12.00</div>
            <div class="schedule-window__time-frames">13.00</div>
            <div class="schedule-window__time-frames">14.00</div>
            <div class="schedule-window__time-frames">15.00</div>
            <div class="schedule-window__time-frames">16.00</div>
            <div class="schedule-window__time-frames">17.00</div>
            <div class="schedule-window__time-frames">18.00</div>
            <div class="schedule-window__time-frames">19.00</div>
            <div class="schedule-window__time-frames">20.00</div>
            <div class="schedule-window__time-frames">21.00</div>
            <div class="schedule-window__time-frames">22.00</div>
            <div class="schedule-window__time-frames">23.00</div>
        </div>
    </div>

    <div class="schedule-window__display <?= $display_month ?>">

        <?php


        if($view == "month")
        {
            $days_in_month = 42;
            for($i = 0; $i < $days_in_month; $i++)
            {
                include 'schedule_day_display.php';
            }
        } else {
            for($i = 0; $i < $view; $i++)
            {
                include 'schedule_day_display.php';
            }
        }

        ?>

    </div>

</div>
