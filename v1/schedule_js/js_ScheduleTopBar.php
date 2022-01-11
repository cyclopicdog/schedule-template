<script type="text/javascript">

    class ScheduleTopBar {
        constructor(now) {
            this.now = now;
        }
    render() {
        this.element = this.createHTMLElement (
            `<div class="view-control__container">
                <button type="button" class="view-control__add-schedule">opret vagt</button>
                <div class="view-control__scroll-container">
                    <div class="view-control__scroll-button view-control__scroll-button--left"><</div>
                    <div class="view-control__current">today</div>
                    <div class="view-control__scroll-button view-control__scroll-button--right">></div>
                </div>
                <div class="view-control__timeframe-toggle">
                    <select name="timeframe" id="">
                        <option value="day">day</option>
                        <option value="week">week</option>
                        <option value="week">month</option>
                    </select>
                </div>
            </div>`
        )
        // console.log(this.now.today);
    }

    mount () {
        this.render();
        this.update();
        return this.element;
    }

    update () {
        // this.day = this.now.substr(0, 10);
    }

    // utility function for render
    createHTMLElement (html, container='div') {
        const div = document.createElement(container);
        div.innerHTML = html;
        return div.firstChild;
    }
}

</script>