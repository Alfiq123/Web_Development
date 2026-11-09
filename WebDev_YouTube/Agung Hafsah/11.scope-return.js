let firstName = "Agung";
let lastName = "Hapsah";

function getFullName(firstName, lastName) {
    let fullName = `${firstName} ${lastName}`;
    return fullName;
}

console.log(getFullName(firstName, lastName));

function getString() {
    return "ABC";
}

function getNumber() {
    return 123;
}

console.log(getString());
console.log(getNumber());

// Challenge I

function multiply(x, y) {
    return x * y;
}

console.log(multiply(8, 8));
console.log(multiply(16, 16));
