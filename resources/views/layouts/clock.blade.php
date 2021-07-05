<div id="time"></div>

<script type="text/javascript">
    function showTime() {
        var date = new Date(),
            utc = new Date(Date.UTC(
                date.getFullYear(),
                date.getMonth(),
                date.getDate(),
                date.getHours()-2,
                date.getMinutes(),
                date.getSeconds()
            ));

        document.getElementById('time').innerHTML = utc.toLocaleTimeString();
    }

    setInterval(showTime, 1000);
</script>
</div>
