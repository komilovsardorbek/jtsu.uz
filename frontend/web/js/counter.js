var countDate = new Date ('Oct 24, 2021 08:00:00').getTime()

function newYear() {
    var now = new Date().getTime();
    remTime = countDate - now;

    var second = 1000;
    var minute = second * 60;
    var hour = minute * 60;
    var days = hour * 24;


    var d = Math.floor(remTime / days);
    var h = Math.floor((remTime % (days)) / (hour));
    var m = Math.floor((remTime % (hour)) / (minute));
    var s = Math.floor((remTime % (minute)) / (second));

    var formattedDays = ('0' + Number.parseInt(d)).slice(-2);
    var formattedHours = ('0' + Number.parseInt(h)).slice(-2);
    var formattedMinutes = ('0' + Number.parseInt(m)).slice(-2);
    var formattedSeconds = ('0' + Number.parseInt(s)).slice(-2);

    document.getElementById("days").innerText = formattedDays + ':';
    document.getElementById("hours").innerText = formattedHours + ':';
    document.getElementById("minutes").innerText = formattedMinutes + ':';
    document.getElementById("secondes").innerText = formattedSeconds;

    setTimeout(countdown, 1000);

}
setInterval(function (){
    newYear();
},1000)
console.log("fndjbssadghfbfhib");
