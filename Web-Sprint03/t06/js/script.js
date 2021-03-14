function* generator(nu, gen) {
    while (true) {
        yield nu += gen;
    }
}

let num = 1;
fl = true;
let gen = Number(prompt(`Previous result: ${num}. Enter a new number:`), "");
if (isNaN(gen)) {
    err = 'Invalid number!'
    console.error(err);
}
var g = generator(num, gen);
let n = g.next().value;
while (fl) {
    gen = Number(prompt(`Previous result: ${n}. Enter a new number:`), "");
    g = generator(n, gen);
    n = g.next().value;
    console.log(n);
    if (n > 10000) {
        n = 1;
    }
}

