function sortEvenOdd(arr) {

    arr.sort((a, b) => a % 2 - b % 2 || a - b);
}

