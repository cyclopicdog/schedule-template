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

    .shift__container {
        min-height: 20px;
        border: 1px solid black;
        border-radius: 5px;
        display: flex;
        flex-flow: column wrap;
        justify-content: center;
        align-content: center;
        overflow: hidden;
    }

    .shift__to-next {
        font-size: .8em;
        font-weight: bold;
        text-align: center;
    }

    .shift__from-last {
        font-size: .8em;
        font-weight: bold;
        text-align: center;
    }

    .shift__info {
        text-align: center;
    }

    .shift__info--needed {
        font-size: 1.2em;
        font-weight: bold;
        text-decoration: underline;
    }

    .shift__container--1a {
    width: 25%;
    height: calc(2*40px + 40px);
    position: absolute;
    top: calc(22*40px);
    background-color: orangered;
    color: white;
    }

    .shift__container--1b {
    width: 25%;
    height: calc(2*40px + 20px);
    position: absolute;
    top: calc(0*40px - 20px);
    background-color: orangered;
    color: white;

    }

    .shift__container--2 {
    width: 25%;
    height: calc(4*40px);
    position: absolute;
    top: calc(20*40px);
    left: 50%;
    background-color: greenyellow;
    }

    .shift__container--3 {
    width: 25%;
    height: calc(6*40px);
    position: absolute;
    top: calc(16.25*40px);
    left: 0%;
    background-color: orangered;
    color: white;
    }

    .shift__container--4 {
    width: 25%;
    height: calc(5*40px);
    position: absolute;
    top: calc(20*40px);
    left: 25%;
    background-color: orangered;
    color: white;
    }
    .shift__container--4b {
    width: 25%;
    height: calc(2*40px + 20px);
    position: absolute;
    top: calc(0*40px - 20px);
    left: 25%;
    background-color: orangered;
    color: white;
    }

    .shift__container--5 {
    width: 25%;
    height: calc(6.5*40px);
    position: absolute;
    top: calc(18.5*40px);
    left: 50%;
    background-color: orangered;
    color: white;
    }

    .shift__container--5b {
    width: 25%;
    height: calc(1*40px + 20px);
    position: absolute;
    top: calc(0*40px - 20px);
    left: 50%;
    background-color: orangered;
    color: white;
    }

    .shift__container--6 {
    width: 25%;
    height: calc(6*40px);
    position: absolute;
    top: calc(16.25*40px);
    left: 75%;
    background-color: orangered;
    color: white;
    }

    .shift__container--7 {
    width: 50%;
    height: calc(4*40px);
    position: absolute;
    top: calc(19.5*40px);
    left: 0%;
    background-color: greenyellow;
    }

    .shift__container--8 {
    width: 25%;
    height: calc(1*40px);
    position: absolute;
    top: calc(12.5*40px);
    left: 0%;
    background-color: orangered;
    color: white;
    font-size: 0.8em;
    }

    .shift__container--8-hover {
    overflow: hidden;
    opacity: 0;
    }

    .shift__container--8-hover:hover {
    width: 100%;
    height: auto;
    padding: 1em;
    z-index: 1;
    opacity: 1;
    color: white;
    font-size: 1.2em;
    }


</style>