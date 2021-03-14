function removeDuplicates() {
    let str1 = this.replace(/ +/g, ' ').trim();
    let str = str1.split(" ");
    var result = [];
    for (var i = 0; i < str.length; i++) {
        if (result.indexOf(str[i]) === -1) {
            result.push(str[i]);
        }
    }

    return result.join(" ");
}

String.prototype.removeDuplicates = removeDuplicates;
