<?php
include 'css/schedule_style_day_demo.php';

// TODO css logic for positioning and display:
// - box height (1 hour = 40px)
// - position to time (1 hour = 40px from top)
// - overlapping shifts (can set width and position from left by percentage)
// - adjust font size for shifts an hour or less (0.9em)
?>

<div class="schedule-window__container">
                    <div class="schedule-window__time-view schedule-window__time-view--prev">
                        <h4 class="schedule-window__title">prev</h4>
                        <div class="schedule-window__schedule">
                            <div class="schedule-window__timeframes-container">
                                <div class="schedule-window__time-frames">00.00</div>
                                <div class="schedule-window__time-frames">01.00</div>
                                <div class="schedule-window__time-frames">02.00</div>
                                <div class="schedule-window__time-frames">03.00</div>
                                <div class="schedule-window__time-frames">04.00</div>
                                <div class="schedule-window__time-frames">05.00</div>
                                <div class="schedule-window__time-frames">06.00</div>
                                <div class="schedule-window__time-frames">07.00</div>
                                <div class="schedule-window__time-frames">08.00</div>
                                <div class="schedule-window__time-frames">09.00</div>
                                <div class="schedule-window__time-frames">10.00</div>
                                <div class="schedule-window__time-frames">11.00</div>
                                <div class="schedule-window__time-frames">12.00</div>
                                <div class="schedule-window__time-frames">13.00</div>
                                <div class="schedule-window__time-frames">14.00</div>
                                <div class="schedule-window__time-frames">15.00</div>
                                <div class="schedule-window__time-frames">16.00</div>
                                <div class="schedule-window__time-frames">17.00</div>
                                <div class="schedule-window__time-frames">18.00</div>
                                <div class="schedule-window__time-frames">19.00</div>
                                <div class="schedule-window__time-frames">20.00</div>
                                <div class="schedule-window__time-frames">21.00</div>
                                <div class="schedule-window__time-frames">22.00</div>
                                <div class="schedule-window__time-frames">23.00</div>
                                <div class="schedule-window__time-frames schedule-window__time-frames--last">00.00</div>
                            </div>

                            <div class="schedule-window__slots-container">
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots schedule-window__schedule-slots--last"></div>

                                <div class="shift__container shift__container--1a">
                                    <div class="shift__info shift__info--needed">22</div>
                                    <div class="shift__info shift__info--scheduled">&check; 18</div>

                                    <div class="shift__info shift__info--scheduled">&tritime; 4</div>
                                    <div class="shift__to-next">&udhar;</div>

                                </div>

                                <div class="shift__container shift__container--2">
                                    <div class="shift__info shift__info--needed">5</div>
                                    <div class="shift__info shift__info--scheduled">&check;5</div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="schedule-window__time-view schedule-window__time-view--current">
                        <h4 class="schedule-window__title">selected</h4>
                        <div class="schedule-window__schedule">
                            <div class="schedule-window__timeframes-container">
                                <div class="schedule-window__time-frames">00.00</div>
                                <div class="schedule-window__time-frames">01.00</div>
                                <div class="schedule-window__time-frames">02.00</div>
                                <div class="schedule-window__time-frames">03.00</div>
                                <div class="schedule-window__time-frames">04.00</div>
                                <div class="schedule-window__time-frames">05.00</div>
                                <div class="schedule-window__time-frames">06.00</div>
                                <div class="schedule-window__time-frames">07.00</div>
                                <div class="schedule-window__time-frames">08.00</div>
                                <div class="schedule-window__time-frames">09.00</div>
                                <div class="schedule-window__time-frames">10.00</div>
                                <div class="schedule-window__time-frames">11.00</div>
                                <div class="schedule-window__time-frames">12.00</div>
                                <div class="schedule-window__time-frames">13.00</div>
                                <div class="schedule-window__time-frames">14.00</div>
                                <div class="schedule-window__time-frames">15.00</div>
                                <div class="schedule-window__time-frames">16.00</div>
                                <div class="schedule-window__time-frames">17.00</div>
                                <div class="schedule-window__time-frames">18.00</div>
                                <div class="schedule-window__time-frames">19.00</div>
                                <div class="schedule-window__time-frames">20.00</div>
                                <div class="schedule-window__time-frames">21.00</div>
                                <div class="schedule-window__time-frames">22.00</div>
                                <div class="schedule-window__time-frames">23.00</div>
                                <div class="schedule-window__time-frames schedule-window__time-frames--last">00.00</div>
                            </div>

                            <div class="schedule-window__slots-container">
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots schedule-window__schedule-slots--last"></div>


                                <div class="shift__container shift__container--1b">
                                    <div class="shift__from-last">&udhar;</div>
                                    <div class="shift__info shift__info--needed">&excl;22</div>
                                    <div class="shift__info shift__info--scheduled">&check; 18</div>
                                    <div class="shift__info shift__info--scheduled">&tritime; 4</div>


                                </div>

                                <div class="shift__container shift__container--3">
                                    <div class="shift__info shift__info--needed">10</div>
                                    <div class="shift__info shift__info--scheduled">&check; 5</div>
                                    <div class="shift__info shift__info--scheduled">&tritime; 5</div>
                                </div>

                                <div class="shift__container shift__container--4">
                                    <div class="shift__info shift__info--needed">10</div>
                                    <div class="shift__info shift__info--scheduled">&check; 5</div>
                                    <div class="shift__info shift__info--scheduled">&tritime; 5</div>
                                    <div class="shift__to-next">&udhar;</div>
                                </div>

                                <div class="shift__container shift__container--5">
                                    <div class="shift__info shift__info--needed">10</div>
                                    <div class="shift__info shift__info--scheduled">&check; 5</div>
                                    <div class="shift__info shift__info--scheduled">&tritime; 5</div>
                                    <div class="shift__to-next">&udhar;</div>
                                </div>

                                <div class="shift__container shift__container--6">
                                    <div class="shift__info shift__info--needed">10</div>
                                    <div class="shift__info shift__info--scheduled">&check; 5</div>
                                    <div class="shift__info shift__info--scheduled">&tritime; 5</div>
                                </div>

                            </div>
                        </div>



                    </div>

                    <div class="schedule-window__time-view schedule-window__time-view--next">
                        <h4 class="schedule-window__title">next</h4>
                        <div class="schedule-window__schedule">
                            <div class="schedule-window__timeframes-container">
                                <div class="schedule-window__time-frames">00.00</div>
                                <div class="schedule-window__time-frames">01.00</div>
                                <div class="schedule-window__time-frames">02.00</div>
                                <div class="schedule-window__time-frames">03.00</div>
                                <div class="schedule-window__time-frames">04.00</div>
                                <div class="schedule-window__time-frames">05.00</div>
                                <div class="schedule-window__time-frames">06.00</div>
                                <div class="schedule-window__time-frames">07.00</div>
                                <div class="schedule-window__time-frames">08.00</div>
                                <div class="schedule-window__time-frames">09.00</div>
                                <div class="schedule-window__time-frames">10.00</div>
                                <div class="schedule-window__time-frames">11.00</div>
                                <div class="schedule-window__time-frames">12.00</div>
                                <div class="schedule-window__time-frames">13.00</div>
                                <div class="schedule-window__time-frames">14.00</div>
                                <div class="schedule-window__time-frames">15.00</div>
                                <div class="schedule-window__time-frames">16.00</div>
                                <div class="schedule-window__time-frames">17.00</div>
                                <div class="schedule-window__time-frames">18.00</div>
                                <div class="schedule-window__time-frames">19.00</div>
                                <div class="schedule-window__time-frames">20.00</div>
                                <div class="schedule-window__time-frames">21.00</div>
                                <div class="schedule-window__time-frames">22.00</div>
                                <div class="schedule-window__time-frames">23.00</div>
                                <div class="schedule-window__time-frames schedule-window__time-frames--last">00.00</div>
                            </div>

                            <div class="schedule-window__slots-container">
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots"></div>
                                <div class="schedule-window__schedule-slots schedule-window__schedule-slots--last"></div>

                                <div class="shift__container shift__container--4b">
                                    <div class="shift__to-next">&udhar;</div>
                                    <div class="shift__info shift__info--needed">10</div>
                                    <div class="shift__info shift__info--scheduled">&check; 5</div>
                                    <div class="shift__info shift__info--scheduled">&tritime; 5</div>
                                </div>

                                <div class="shift__container shift__container--5b">
                                    <div class="shift__from-last">&udhar;</div>
                                    <div class="shift__info shift__info--needed">10</div>
                                    <div class="shift__info shift__info--scheduled">&check; 5</div>
                                    <div class="shift__info shift__info--scheduled">&tritime; 5</div>
                                </div>

                                <div class="shift__container shift__container--7">
                                    <div class="shift__info shift__info--needed">10</div>
                                    <div class="shift__info shift__info--scheduled">&check; 10</div>
                                </div>

                                <div class="shift__container shift__container--8">
                                    <div class="shift__from-last">&udhar;</div>
                                    <div class="shift__info shift__info--needed">10</div>
                                    <div class="shift__info shift__info--scheduled">&check; 5</div>
                                    <div class="shift__info shift__info--scheduled">&tritime; 5</div>
                                </div>

                                <div class="shift__container shift__container--8 shift__container--8-hover">
                                    <div class="shift__info">Team: Barry's allstars</div>
                                    <div class="shift__info">Scheduler: Barry the god</div>
                                    <div class="shift__info">Shift start: 12.30</div>
                                    <div class="shift__info">Shift end: 13.30</div>
                                    <div class="shift__info shift__info--needed">Total needed: 10</div>
                                    <div class="shift__info shift__info--scheduled">Helpers confirmed: 5</div>
                                    <div class="shift__info shift__info--scheduled">Helpers needed: 5</div>
                                </div>

                                <?php include 'shift.php'; ?>

                            </div>
                        </div>
                    </div>
                </div>
