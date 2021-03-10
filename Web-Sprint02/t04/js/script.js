let str1 = Number(prompt('Write the first number', "1"));
let str2 = Number(prompt('Write the second number', "100"));

function checkDivision(beginRange, endRange) {
    let res = 0;
    for (let i = beginRange; i <= endRange; i++) {
        res = i;
        if (i % 2 != 0 && i % 3 != 0 && i % 10 != 0) {
            res = res + '-\n';
        }
        else if (i % 2 == 0 && i % 3 != 0 && i % 10 != 0) {
            res = res + ' is even\n';
        }
        else if (i % 2 == 0 && i % 3 == 0 && i % 10 != 0) {
            res = res + ' is even, is multiple of 3\n';
        }
        else if (i % 2 == 0 && i % 3 != 0 && i % 10 == 0) {
            res = res + ' is even, is multiple of 10\n';
        }
        else if (i % 2 == 0 && i % 3 == 0 && i % 10 == 0) {
            res = res + ' is even, is multiple of 3, is multiple of 10\n';
        }
        else if (i % 2 != 0 && i % 3 == 0 && i % 10 != 0) {
            res = res + ' is multiple of 3\n';
        }
        else if (i % 2 != 0 && i % 3 != 0 && i % 10 == 0) {
            res = res + ' is even, is multiple of 10\n';
        }
        else if (i % 2 != 0 && i % 3 == 0 && i % 10 == 0) {
            res = res + ' is even, is multiple of 3, is multiple of 10\n';
        }
        console.log(String(res));
    }

}

checkDivision(str1, str2);