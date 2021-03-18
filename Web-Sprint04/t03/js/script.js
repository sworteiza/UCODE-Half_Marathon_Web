let a = document.getElementsByTagName("img");
let i = 0;
a[1].style.display = "none";
a[2].style.display = "none";
a[3].style.display = "none";

setInterval(() => {
    a[i].style.display = "none";
    i += 1;
    if (i === 4) {
        i = 0;
    }
    a[i].style.display = "block";

}, 3000);

document.getElementById("right").onclick = function () {
    a[i].style.display = "none";
    i += 1;
    if (i === 4) {
        i = 0;
    }
    a[i].style.display = "block";

}

document.getElementById("left").onclick = function () {
    a[i].style.display = "none";
    i -= 1;
    if (i === -1) {
        i = 3;
    }
    a[i].style.display = "block";
}
