let num = 42;
let Bigint = 1234567890123456789012345678901234567890n;
let String = "Hello";
let Boolean = true;
let Null = null;
let Undef;
let Objecti = { a: 5 };
let Symboli = Symbol(42);
function Functioni() { };

const message = `Num is ${typeof num}\nBigint is ${typeof Bigint}\nString is ${typeof String}\nBoolean is ${typeof Boolean}\nNUll is ${typeof Null}\nUndefined is ${typeof Undef}\nObject is ${typeof Objecti}\nSymbol is ${typeof Symboli}\nFunction is ${typeof Functioni}\n`;
alert(message);