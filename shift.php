<?php
//
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
//
//$existing_time_slots = [];
//
//
//
//foreach ($shift_data as $shift)
//{
//
//    $schedule_id = $shift['schedule_id'];
//    $team_id = $shift['team_id'];
//    $team_name = $shift['team_name'];
//    $scheduler = $shift['scheduler'];
//    $shift_start = $shift['shift_start'];
//    $shift_end = $shift['shift_end'];
//    $total_needed = $shift['total_needed'];
//    $people_signed = $shift['people_signed'];
//    $people_needed = $total_needed - $people_signed;
//    $full = false;
//
//    if ($people_needed <= 0)
//    {
//        $full = true;
//    }
//

    $total_needed = 10;
    $people_signed = 5;
    $people_needed = 5;

$full = false;

$height = 120;
$from_top = 600;
$width_value = 5;
$slot_from_left = 2;
$full_display = $full ? "sf" : "snf";

$css_classes = "sh-$height st-$from_top sw-$width_value sl-$width_value-$slot_from_left $full_display";
?>

    <div class="<?= $css_classes ?> shift__container">
        <div class="shift__from-last">&udhar;</div>
        <div class="shift__info shift__info--needed"><?= $total_needed ?></div>
        <div class="shift__info shift__info--scheduled">&check; <?= $people_signed ?></div>
        <div class="shift__info shift__info--scheduled">&tritime; <?= $people_needed ?></div>
    </div>

<!--    <div class="--><?//= $css_classes ?><!-- shift__container shift__container--hover">-->
<!--        <div class="shift__info">Team: --><?//= $team_name ?><!--</div>-->
<!--        <div class="shift__info">Scheduler: --><?//= $scheduler ?><!--</div>-->
<!--        <div class="shift__info">Shift start:--><?//= $shift_start ?><!--</div>-->
<!--        <div class="shift__info">Shift end: --><?//= $shift_end ?><!--</div>-->
<!--        <div class="shift__info shift__info--needed">Total needed: --><?//= $total_needed ?><!--</div>-->
<!--        <div class="shift__info shift__info--scheduled">Helpers confirmed: --><?//= $people_signed ?><!--</div>-->
<!--        <div class="shift__info shift__info--scheduled">Helpers needed: --><?//= $people_needed ?><!--</div>-->
<!--    </div>-->

<?php //}
