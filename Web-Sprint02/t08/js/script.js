function checkBrackets(str) {
    let l = 0;
    let r = 0;
    let res = 0;
    if (!str) {
        return -1;
    }

    for (let i = 0; i < str.length; i++) {

        if (str[i] == '(') {
            l++;
        }
        else if (str[i] == ')') {
            if (l == 0) {
                r++;
            }
            else {
                l--;
            }
        }
    }
    res = l + r;
    return res;
}

