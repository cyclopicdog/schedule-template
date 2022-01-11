<?php

//$shift_data = [
//    [
//        schedule_id => 1,
//        team_id => 9,
//        team_name => "Bob's",
//        scheduler => "Bob",
//        shift_start => "2022-01-07 12:30:00",
//        shift_end => "2022-01-07 18:30:00",
//        total_needed => 10,
//        people_signed => 5,
//    ],
//    [
//        schedule_id => 2,
//        team_id => 10,
//        team_name => "Harry's",
//        scheduler => "Harry",
//        shift_start => "2022-01-07 12:30:00",
//        shift_end => "2022-01-07 18:30:00",
//        total_needed => 10,
//        people_signed => 5,
//    ],
//    [
//        schedule_id => 3,
//        team_id => 11,
//        team_name => "Sally's",
//        scheduler => "Sally",
//        shift_start => "2022-01-07 12:30:00",
//        shift_end => "2022-01-07 18:30:00",
//        total_needed => 10,
//        people_signed => 5,
//    ],
//    [
//        schedule_id => 4,
//        team_id => 12,
//        team_name => "Larry's",
//        scheduler => "Larry",
//        shift_start => "2022-01-07 12:30:00",
//        shift_end => "2022-01-07 18:30:00",
//        total_needed => 10,
//        people_signed => 5,
//    ],
//    [
//        schedule_id => 5,
//        team_id => 12,
//        team_name => "Carrie's",
//        scheduler => "Carrie",
//        shift_start => "2022-01-07 12:30:00",
//        shift_end => "2022-01-07 18:30:00",
//        total_needed => 10,
//        people_signed => 5,
//    ],
//];

?>

<!-- schedule box starts here -->

<main class="test-body">

            <?php
            include 'temp-css/schedule_holder_style.php';
            include 'temp-css/shift_style.php';
            include_once 'view_control.php';
            ?>


        <div class="box-body box-body-schedule-mod" id="schedule-holder">

            <?php

            // TODO write logic to select day/week/month

            $calendar_date_selected = '2022-01-07';

            $view = "month";

            include 'schedule_day_container.php';

            ?>

        </div>
    </main>



