function addWords(obj, wrds) {
    wrds = wrds.replace(/ +/g, ' ').trim();
    let arr1 = wrds.split(' ');
    obj.words = obj.words.replace(/ +/g, ' ').trim();
    let arr = obj.words.split(' ');
    for (i = 0; i < arr1.length; i++) {
        arr.push(arr1[i]);
    }
    var result = [];
    for (var i = 0; i < arr.length; i++) {
        if (result.indexOf(arr[i]) === -1) {
            result.push(arr[i]);
        }
    }
    obj.words = result.join(" ");
}

function removeWords(obj, wrds) {
    wrds = wrds.replace(/ +/g, ' ').trim();
    let arr1 = wrds.split(' ');
    obj.words = obj.words.replace(/ +/g, ' ').trim();
    for (i = 0; i < arr1.length; i++) {
        obj.words = obj.words.replace(arr1[i], '');
    }

    obj.words = obj.words.replace(/ +/g, ' ').trim();
}

function changeWords(obj, oldWrds, newWrds) {
    removeWords(obj, oldWrds);
    addWords(obj, newWrds);
    obj.words = obj.words.replace(/ +/g, ' ').trim();
}