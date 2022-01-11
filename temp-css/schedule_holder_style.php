<style type="text/css">

    .test-body {
        box-sizing: border-box;
        width: 90vw;
        height: 90vh;
        margin: 0;
        padding: 0;
        display: flex;
        flex-flow: column nowrap;
        justify-items: center;
        align-items: center;
        background-color: cadetblue;
        border: 5px solid cadetblue;
    }

    .box-body-schedule-mod {
        width: 100%;
        height: 85vh;
        padding-top:0px;
        display: flex;
        flex-flow: column nowrap;
    }


    .view-control__container {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .view-control__add-schedule {
        width: fit-content;
        margin: .5em 0;
    }

    .view-control__scroll-container {
        display: flex;
        flex-flow: row nowrap;
        justify-content: center;
    }

    .view-control__scroll-button {
        width: 1.2em;
        height: 1.2em;
        margin: .5em;
        text-align: center;
    }

    .view-control__scroll-button:hover {
        cursor: pointer;
    }

    .view-control__current {
        margin: .5em;
    }

    .view-control__timeframe-toggle {
        margin: .5em 0;
        display: flex;
        flex-flow: row nowrap;
        justify-content: right;
    }

    /* -- */

    .schedule-window__container {
        box-sizing: border-box;
        width: 100%;
        height: 100%;
        display: flex;
        flex-flow: row nowrap;
        gap: 0.5em;
        background-color: white;
    }

    .schedule-window__time-bar {
        box-sizing: border-box;
        height: 100%;
        border: 1px solid white;
        background-color: white;
    }
    .schedule-window__time-frames-container {
        box-sizing: border-box;
        height: 97%;
        background-color: white;
    }

    .schedule-window__time-frames {
        box-sizing: border-box;
        height: calc(100/24 * 1%);
        margin: 0;
        text-align: center;
        border-bottom: 1px dotted gray;
    }

    .schedule-window__display {
        width: 100%;
        height: 100%;
        display: grid;
    }

    /* sd = schedule display - controls the number of columns */

    .sd-1 {
        grid-template-columns: 1fr;
    }

    .sd-3 {
        grid-template-columns: repeat(3, 1fr);
    }

    .sd-5 {
        grid-template-columns: repeat(5, 1fr);
    }

    .sd-7 {
        grid-template-columns: repeat(7, 1fr);
    }

    .sd-month {
        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: repeat(6, 1fr);
    }

    .hide-schedule {
        display: none;
    }

    .schedule-window__schedule {
        width: 100%;
        height: 100%;
    }

    .schedule-window__title {
        height: 2.5%;
        border-bottom: 1px solid black;
        text-align: center;
        font-weight: bold;
    }

    .st-month {
        height: 14.5%;
        font-size: 0.8em;
        font-weight: bold;
        border-left: 1px solid gray;
        border-bottom: none;
    }

    .schedule-window__slots-container {
        box-sizing: border-box;
        width: 100%;
        height: 97%;
        position: relative;
        border-left: 1px solid gray;
        border-bottom: 1px solid black;
        background-color: white;
    }

    .sc-month {
        height: 85%;
    }

    .schedule-window__time-frames--day {
        font-size: 1.2em;
        font-weight: bold;
    }

    .schedule-window__time-frames--last {
        background-color: lightgray;
        border-bottom: none;
    }
    .schedule-window__schedule-slots {
        box-sizing: border-box;
        height: calc(100/24 * 1%);
        margin: 0;
        border-bottom: 1px dotted gray;
    }

    .slots-month {
        border-bottom: none;
    }

    .schedule-window__time-frames--day-end, .schedule-window__schedule-slots--day-end {
        border-bottom: 1px solid black;
    }

    .schedule-window__schedule-slots--last {
        background-color: lightgray;
        border-bottom: none;
    }

    @media only screen and (max-width:900px) {
        .schedule-window__container {
            grid-template-columns: 1fr;
        }

        .schedule-window__time-view--prev, .schedule-window__time-view--next {
            display: none;
        }

    }


</style>
