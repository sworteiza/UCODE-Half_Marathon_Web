function transformation() {
    let x = document.getElementById("lab");
    let y = document.getElementById("hero");
    if (y.innerHTML === "Bruce Banner") {
        x.style.backgroundColor = "#70964b";
        y.innerHTML = "Hulk";
        y.style.fontSize = "130px";
        y.style.letterSpacing = "6px";
    }
    else if (y.innerHTML === "Hulk") {
        x.style.backgroundColor = "#ffb300";
        y.innerHTML = "Bruce Banner";
        y.style.fontSize = "60px";
        y.style.letterSpacing = "2px";
    }


}