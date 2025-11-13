let name = "Pisang";
let weight = 5;
let isSoldOut = false;

const product = {
    name: "Pisang",
    weight: 5,
    isSoldOut: false
};

// Challenge I

let person = {
    name: "Luke",
    age: 25,
    dateOfBirth: 2000,
    isEmployed: true
};

console.log(person.name);
console.log(person.age);
console.log(person.dateOfBirth);
console.log(person.isEmployed);

console.log(person["name"]);
console.log(person["age"]);
console.log(person["dateOfBirth"]);
console.log(person["isEmployed"]);

// Challenge II

console.log(`${person.name} lahir pada tahun ${person.dateOfBirth}`)
