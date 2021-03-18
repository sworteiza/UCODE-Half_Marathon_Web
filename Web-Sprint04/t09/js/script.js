let butt1 = document.getElementById("add");
let butt2 = document.getElementById("clear");
let text = document.getElementById("first");
let history = document.getElementById("third");

function formatDate(date) {

    var dd = date.getDate();
    if (dd < 10) dd = '0' + dd;

    var mm = date.getMonth() + 1;
    if (mm < 10) mm = '0' + mm;

    var yy = date.getFullYear() % 100;
    if (yy < 10) yy = '0' + yy;

    var hour = date.getHours();
    if (hour < 10) hour = '0' + hour;

    var minute = date.getMinutes();
    if (minute < 10) minute = '0' + minute;

    var sec = date.getSeconds();
    if (sec < 10) sec = '0' + sec;

    return dd + '.' + mm + '.' + yy + ", " + hour + ":" + minute + ":" + sec;
}

function work() {
    let str = "";
    let count = parseInt(localStorage.getItem("count"));
    if (isNaN(count)) {
        str = "";
        history.innerHTML = str;
    } else {
        for (let i = 1; i <= count; i++) {
            str = "--> " + localStorage.getItem("key" + i) + "\n\n";
            history.innerHTML = str;
        }
    }
}

work();

function addHistory() {
    let t = text.value;
    let count = parseInt(localStorage.getItem("count"));
    let day = new Date();
    let date = "[" + formatDate(day) + "]";
    if (isNaN(count)) {
        count = 1;
    } else {
        count++;
    }

    localStorage.setItem("count", "" + count);
    localStorage.setItem("key" + count, t + date);
}

butt1.onclick = function() { addHistory() };
butt2.onclick = function() {
    localStorage.clear();
}