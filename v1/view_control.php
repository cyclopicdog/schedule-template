<?php
$today = date("Y-m-d");
?>

<div class="view-control__container">
    <button type="button" class="view-control__add-schedule">opret vagt</button>
    <div class="view-control__scroll-container">
        <div class="view-control__scroll-button view-control__scroll-button--left"><</div>
        <div class="view-control__current">
            <input type="date" value="<?= $today ?>">
        </div>
        <div class="view-control__scroll-button view-control__scroll-button--right">></div>
    </div>
    <div class="view-control__timeframe-toggle">
        <select name="timeframe" id="timeframe-dropdown">
            <option value="day">day</option>
            <option value="week">week</option>
            <option value="week">month</option>
        </select>
    </div>
</div>


