let butt1 = document.getElementById("phone");
let butt2 = document.getElementById("count");
let butt3 = document.getElementById("replace");
let word = document.getElementById("first");
let text = document.getElementById("second");
let out = document.getElementsByTagName("p");

let a1 = 0;
let a2 = 0;
let a3 = 0;

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function phoneNum() {
    let w = word.value;
    let str = "";
    if (w.length == 10 && /[0-9]/.test(w)) {
        for (let i = 0; i < w.length; i++) {
            if (i == 3 || i == 6) {
                str += '-';
            }
            str += w[i];

        }
    }
    else {
        str = "Invalid phone number";
    }
    out[0].innerHTML = str;
}

function countWrd() {
    let w = word.value;
    let t = text.value;
    let t1 = t.split(" ");
    let count = 0;
    for (let i = 0; i < t1.length; i++) {
        if (w === t1[i]) {
            count++;
        }
    }
    out[0].innerHTML = count;
}

function replaceWord() {
    let w = word.value;
    let t = text.value;
    let t1 = t.split(" ");
    for (let i = 0; i < t1.length; i++) {
        t = t.replace(t1[i], w);
    }
    out[0].innerHTML = t;

}


butt1.onclick = function () {
    a1++;
    document.cookie = ("b1=" + a1 + ";" + " max-age=60");
    phoneNum();
};
butt2.onclick = function () {
    a2++;
    document.cookie = ("b2=" + a2 + ";" + " max-age=60");
    countWrd();
};
butt3.onclick = function () {
    a3++;
    document.cookie = ("b3=" + a3 + ";" + " max-age=60");
    replaceWord();
};


var u1 = getCookie("b1");
var u2 = getCookie("b2");
var u3 = getCookie("b3");

if (u1 == undefined) {
    butt1.innerHTML = `To phone number`;
}
else {
    butt1.innerHTML = `To phone number [${u1}]`;
}

if (u2 == undefined) {
    butt2.innerHTML = `Word count`;
}
else {
    butt2.innerHTML = `Word count [${u2}]`;
}

if (u3 == undefined) {
    butt3.innerHTML = `Word replace`;
}
else {
    butt3.innerHTML = `Word replace [${u3}]`;
}
