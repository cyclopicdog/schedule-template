<style type="text/css">

    .box-body {
        max-height:70vh;
        padding-top:0px;
        overflow-y: scroll;
    }

    .view-control__container {
        padding: 0 1%;
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
        margin: .5em;
        display: flex;
        flex-flow: row nowrap;
        justify-content: right;
    }

    .schedule-window__container {
        width: 100%;
        height: 100%;
        display: grid;
        grid-template-columns: 0.33fr 0.33fr 0.33fr;
        gap: 0.5em;
    }

    .schedule-window__time-view {
        height: 100%;
        border: 1px black solid;
        border-radius: 15px;
        padding: 0.5em;
    }

    .schedule-window__title {
        padding-bottom: 0.5em;
        border-bottom: 1px solid black;
        text-align: center;

    }
    .schedule-window__schedule {
        display: grid;
        grid-template-columns: 1fr 3fr;
    }

    .schedule-window__slots-container {
        position: relative;
    }

    .schedule-window__time-frames {
        height: 40px;
        margin: 0;
        text-align: center;
        border-bottom: 1px dotted gray;
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
        height: 40px;
        margin: 0;
        border-bottom: 1px dotted gray;
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
