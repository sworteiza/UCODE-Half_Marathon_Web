console.log(checkBrackets('))..?()))')) // 4
console.log(checkBrackets('((()(')) // 3
console.log(checkBrackets(')()')) // 1
console.log(checkBrackets(')))))(((((')) // 10
console.log(checkBrackets('((2)(3)')) // 1


console.log(checkBrackets(null)) // -1
console.log(checkBrackets(NaN)) // -1
console.log(checkBrackets(false)) // -1
