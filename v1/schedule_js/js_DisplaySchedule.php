<script type="text/javascript">

    class DisplaySchedule {
        constructor(timeframe, now = today) {
        this.timeframe = timeframe;
        this.now = now;
        }
        render() {
            this.element = this.createHTMLElement (
                `<div class="schedule-window__container">
                    <div class="schedule-window__time-view schedule-window__time-view--prev">
                        <h4 class="schedule-window__title">prev</h4>
                        <div class="schedule-window__schedule">
                            <div class="schedule-window__time-frames">00.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">01.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">02.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">03.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">04.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">05.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">06.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">07.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">08.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">09.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">10.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">11.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">00.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">01.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">02.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">03.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">04.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">05.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">06.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">07.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">08.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">09.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">10.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">11.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                        </div>
                    </div>
                    <div class="schedule-window__time-view schedule-window__time-view--current">
                        <h4 class="schedule-window__title">current</h4>
                        <div class="schedule-window__schedule">
                            <div class="schedule-window__time-frames">00.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">01.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">02.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">03.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">04.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">05.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">06.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">07.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">08.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">09.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">10.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">11.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                        </div>

                    </div>
                    <div class="schedule-window__time-view schedule-window__time-view--next">
                        <h4 class="schedule-window__title">next</h4>
                        <div class="schedule-window__schedule">
                            <div class="schedule-window__time-frames">00.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">01.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">02.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">03.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">04.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">05.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">06.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">07.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">08.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">09.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">10.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                            <div class="schedule-window__time-frames">11.00</div>
                            <div class="schedule-window__schedule-slots"></div>
                        </div>
                    </div>
                </div>`
            );
        }

        mount () {
            this.render();
            this.update();
            return this.element;
        }

        update () {
            this.todays_date = this.now.substr(10);
        }

        // utility function for render
        createHTMLElement (html, container='div') {
            const div = document.createElement(container);
            div.innerHTML = html;
            return div.firstChild;
        }

    }

</script>