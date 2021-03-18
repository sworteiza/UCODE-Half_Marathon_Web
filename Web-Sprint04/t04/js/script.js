let a = document.getElementById("i1");
let b = document.getElementById("i2");
let c = document.getElementById("i3");
let li = document.getElementsByTagName("li");
//a.style.display = "none";
b.style.display = "none";
c.style.display = "none";

document.getElementById("li1").onclick = function () {
    b.style.display = "none";
    c.style.display = "none";
    a.style.display = "flex";
}

document.getElementById("li2").onclick = function () {
    a.style.display = "none";
    b.style.display = "flex";
    c.style.display = "none";
}

document.getElementById("li3").onclick = function () {
    a.style.display = "none";
    b.style.display = "none";
    c.style.display = "flex";
}

