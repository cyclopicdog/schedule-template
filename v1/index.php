<?php
include_once (__FILE__ . '/core/controller.class.php');
var_dump($data);
echo "Hello handsome";

$shift_data = [
    [
        schedule_id => 1,
        team_id => 9,
        team_name => "Bob's",
        scheduler => "Bob",
        shift_start => "2022-01-07 12:30:00",
        shift_end => "2022-01-07 18:30:00",
        total_needed => 10,
        people_signed => 5,
    ],
    [
        schedule_id => 2,
        team_id => 10,
        team_name => "Harry's",
        scheduler => "Harry",
        shift_start => "2022-01-07 12:30:00",
        shift_end => "2022-01-07 18:30:00",
        total_needed => 10,
        people_signed => 5,
    ],
    [
        schedule_id => 3,
        team_id => 11,
        team_name => "Sally's",
        scheduler => "Sally",
        shift_start => "2022-01-07 12:30:00",
        shift_end => "2022-01-07 18:30:00",
        total_needed => 10,
        people_signed => 5,
    ],
    [
        schedule_id => 4,
        team_id => 12,
        team_name => "Larry's",
        scheduler => "Larry",
        shift_start => "2022-01-07 12:30:00",
        shift_end => "2022-01-07 18:30:00",
        total_needed => 10,
        people_signed => 5,
    ],
    [
        schedule_id => 5,
        team_id => 12,
        team_name => "Carrie's",
        scheduler => "Carrie",
        shift_start => "2022-01-07 12:30:00",
        shift_end => "2022-01-07 18:30:00",
        total_needed => 10,
        people_signed => 5,
    ],
];

?>

<div class="row margin-for-topmenu" id="main_content">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border  ">
                <h3 class="box-title">Vagtplan for <?=$data['info']['areaname'].' '.$data['info']['areadescript']?></h3>
                <div class="pull-right">
                    <?php
                    if ( $data['useradmin'] ) {
                        /*
                        ?>
                        <div class="pull-right">
                            <select name="year" class="form-control" id="yearswitch">
                                <?php foreach($data['years'] as $year) : ?>
                                    <option value="<?php echo $year['eventyear'] ?>" <?php echo (int)$year['eventyear'] === $data['eventyear'] ? 'selected' : '' ?>><?php echo $year['eventyear'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        */ ?>
                        <button class="btn btn-primary btn-flat" data-food-tickets="<?=$data['info']['rowid']?>">
                            <i class="fa fa-ticket"></i>
                            L??s og tildel madbilletter
                        </button>
                        <button class="btn btn-info btn-flat createschedule" id="<?=$data['info']['rowid']?>" title="Opret Vagt"><i class="fa fa-calendar-plus-o"></i>Opret Vagt</button>

                    <?php
                    }
                    ?>
                    <a class="btn btn-default btn-flat" href="/schedules/team_print/<?=$data['info']['rowid']?>">
                        <i class="fa fa-print"></i>
                        Print
                    </a>
                    <a class="btn btn-default btn-flat" href="/schedules/team_excel/<?=$data['info']['rowid']?>">
                        <i class="fa fa-file-excel-o"></i>
                        Sheet
                    </a>
                </div>
            </div>


<!-- schedule box starts here -->

            <?php include_once 'view_control.php'; ?>

            <div class="box-body" id="schedule-holder" >

                <?php
                include 'schedule_container.php';
                ?>

            </div>






<!--            --><?php //include 'schedule_js/js_script.php' ?>
        </div>
    </div>

</div>

