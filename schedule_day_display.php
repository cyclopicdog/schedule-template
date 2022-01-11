<?php
if($view == "month")
{
    $month_title = "st-month";
    $month_container = "sc-month";
    $slot_border = "slots-month";

} else {
    $month_title = "";
    $month_container = "";
    $slot_border = "";
}


//    function display_schedule($hidden) {
//        if($hidden)
//            {
//                echo "hide-schedule";
//            } else {
//                echo "";
//            }
//    }
//
//    $show_me = display_schedule($show_date);

//  include  <?= $show_me  in schedule-window__schedule class

?>

<div class="schedule-window__schedule">

    <div class="schedule-window__title  <?= $month_title ?>"> Day - date</div>
    <div class="schedule-window__slots-container <?= $month_container ?>">
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <div class="schedule-window__schedule-slots <?= $slot_border ?>"></div>
        <?php
            include 'shift.php';
        ?>
    </div>
</div>
