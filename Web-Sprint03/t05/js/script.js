let guestList = new Map();
guestList.set('John', 'In list');
guestList.set('Suzy', 'In list');
guestList.set('Jane', 'In list');
guestList.set('Rendi', 'In list');

console.log(guestList);
console.log(guestList.get('Jane'));
console.log(guestList.length);
console.log(guestList.delete('Rendi'));
console.log(guestList);

///////////////////////////////////////////

let menu = new Set();

let borch = { dish: "Borch", price: '120$' };
let potato = { dish: "Potato", price: '20$' };
let tomato = { dish: "Tomato", price: '50$' };
let pizza = { dish: "Pizza", price: '100000$' };

menu.add(borch);
menu.add(potato);
menu.add(tomato);
menu.add(pizza);
menu.add(pizza);

console.log(menu.size);

for (let d of menu) {
    console.log(d.dish, d.price);
}


//////////////////////////////////////////////

let bankVault = new WeakMap();

let cr2345 = { Name: "Till" };
let cr1234 = { Name: "Mell" };
let cr5678 = { Name: "Lok" };
let cr9123 = { Name: "Nem" };

bankVault.set(cr1234, { Pr: 3333 });
bankVault.set(cr2345, { Pr: 3786 });
bankVault.set(cr5678, { Pr: 4675 });
bankVault.set(cr9123, { Pr: 24334 });

console.log(bankVault.get(cr9123));
console.log(bankVault.has(cr1234));


//////////////////////////////////////////////////

let coinCollection = new WeakSet();

val1 = { coin: 25 };
val2 = { coin: '$' };
val3 = { coin: '£' };
val4 = { coin: '€' };

coinCollection.add(val1);
coinCollection.add(val2);
coinCollection.add(val3);
coinCollection.add(val4);
coinCollection.add(val1);

coinCollection.has(val2);
console.log(coinCollection);
console.log(coinCollection.delete(val4));
console.log(coinCollection);

