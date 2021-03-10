let first = String(prompt('Write your first name'));
let last = String(prompt('Write your last name'));

function jsUcfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

if (!isNaN(first) || !isNaN(last) || !first.match(/[A-Za-z]/) || !last.match(/[A-Za-z]/)) {
    alert("Wrong input!");
    console.log("Wrong input!");
}
else {
    const a = jsUcfirst(first);
    const b = jsUcfirst(last);
    alert(`Greeting, ${a} ${b}`);
    console.log(`Greeting, ${a} ${b}`);
}