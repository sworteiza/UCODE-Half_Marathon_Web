for (let i = 0; i < document.getElementsByTagName("li").length; i++) {
    if (document.getElementsByTagName("li")[i].hasAttribute("class") === false) {
        document.getElementsByTagName("li")[i].setAttribute("class", "unknown");
    }
    if (document.getElementsByTagName("li")[i].hasAttribute("data-element") === false) {
        document.getElementsByTagName("li")[i].setAttribute("data-element", "none");
    }
}

let li = document.getElementsByTagName("li");
for (let i = 0; i < li.length; i++) {
    let data = li[i].getAttribute("data-element");
    if (data == "none") {
        let all = document.createElement("div");
        let div = document.createElement("div");
        div.className = "elem ";
        let div3 = document.createElement("div");
        div3.className = "line";
        div.appendChild(div3);
        all.appendChild(div);
        li[i].appendChild(all);
    }
    else {
        let all1 = document.createElement("div");
        let arr = data.split(' ');
        for (let j = 0; j < arr.length; j++) {
            let div1 = document.createElement("div");
            div1.className = "elem " + arr[j];
            all1.appendChild(div1);
            li[i].appendChild(all1);
        }

    }
}
