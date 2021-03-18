var ball1 = document.getElementById('bl1');
var ball2 = document.getElementById('bl2');
var ball3 = document.getElementById('bl3');
// ball1.onclick = function () {
//     if (ball1.style.border == "none") {
//         ball1.style.border = "medium dashed";
//     }
//     else {
//         ball1.style.border = "none";
//     }

// }

ball1.onmousedown = function (e) {

    ball1.style.position = 'absolute';
    moveAt(e);

    document.body.appendChild(ball1);

    ball1.style.zIndex = 1000;

    function moveAt(e) {

        ball1.style.left = e.pageX - ball1.offsetWidth / 2 + 'px';
        ball1.style.top = e.pageY - ball1.offsetHeight / 2 + 'px';


    }

    document.onmousemove = function (e) {
        moveAt(e);
    }

    ball1.onmouseup = function () {
        document.onmousemove = null;
        ball1.onmouseup = null;
    }

    ball1.ondragstart = function () {
        return false;
    };
}


ball2.onmousedown = function (e) {

    ball2.style.position = 'absolute';
    moveAt(e);

    document.body.appendChild(ball2);

    ball1.style.zIndex = 1000;

    function moveAt(e) {

        ball2.style.left = e.pageX - ball2.offsetWidth / 2 + 'px';
        ball2.style.top = e.pageY - ball2.offsetHeight / 2 + 'px';


    }

    document.onmousemove = function (e) {
        moveAt(e);
    }

    ball2.onmouseup = function () {
        document.onmousemove = null;
        ball2.onmouseup = null;
    }

    ball2.ondragstart = function () {
        return false;
    };
}

ball3.onmousedown = function (e) {

    ball3.style.position = 'absolute';
    moveAt(e);

    document.body.appendChild(ball3);

    ball1.style.zIndex = 1000;

    function moveAt(e) {

        ball3.style.left = e.pageX - ball3.offsetWidth / 2 + 'px';
        ball3.style.top = e.pageY - ball3.offsetHeight / 2 + 'px';


    }

    document.onmousemove = function (e) {
        moveAt(e);
    }

    ball3.onmouseup = function () {
        document.onmousemove = null;
        ball3.onmouseup = null;
    }

    ball3.ondragstart = function () {
        return false;
    };
}

