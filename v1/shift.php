<?php

$existing_time_slots = [];



foreach ($shift_data as $shift)
{

    $schedule_id = $shift['schedule_id'];
    $team_id = $shift['team_id'];
    $team_name = $shift['team_name'];
    $scheduler = $shift['scheduler'];
    $shift_start = $shift['shift_start'];
    $shift_end = $shift['shift_end'];
    $total_needed = $shift['total_needed'];
    $people_signed = $shift['people_signed'];
    $people_needed = $total_needed - $people_signed;
    $full = false;

    if ($people_needed <= 0)
    {
        $full = true;
    }



    ?>

    <style type="text/css">

        .shift__container--<?= $team_id ?> {
            width: 25%;
            height: calc(1*40px);
            position: absolute;
            top: calc(12.5*40px);
            left: 25%;
            background-color: orangered;
            color: white;
            font-size: 0.8em;
        }

        .shift__container--<?= $team_id ?>-hover {
            opacity: 0;
        }

        .shift__container--<?= $team_id ?>-hover:hover {
            width: 100%;
            height: auto;
            padding: 1em;
            left: 0%;
            z-index: 1;
            opacity: 1;
            color: white;
            font-size: 1.2em;
        }
    </style>

    <div class="shift__container shift__container--<?= $team_id ?>">
        <div class="shift__from-last">&udhar;</div>
        <div class="shift__info shift__info--needed"><?= $total_needed ?></div>
        <div class="shift__info shift__info--scheduled">&check; <?= $people_signed ?></div>
        <div class="shift__info shift__info--scheduled">&tritime; <?= $people_needed ?></div>
    </div>

    <div class="shift__container shift__container--<?= $team_id ?> shift__container--<?= $team_id ?>-hover">
        <div class="shift__info">Team: <?= $team_name ?></div>
        <div class="shift__info">Scheduler: <?= $scheduler ?></div>
        <div class="shift__info">Shift start:<?= $shift_start ?></div>
        <div class="shift__info">Shift end: <?= $shift_end ?></div>
        <div class="shift__info shift__info--needed">Total needed: <?= $total_needed ?></div>
        <div class="shift__info shift__info--scheduled">Helpers confirmed: <?= $people_signed ?></div>
        <div class="shift__info shift__info--scheduled">Helpers needed: <?= $people_needed ?></div>
    </div>

<?php }