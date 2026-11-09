function sayHi(name) {
    console.log(`Hi ${name}`);
}

let sayHi2 = (name) => {
    console.log(`Hi ${name}`);
}

// Challenge I

// let sayBye = (name) => {
//     console.log(`Bye ${name}`);
// }

// let add = (x, y) => {
//     return x * y;
// }

let sayBye = name => { console.log(`Bye ${name}`); }
let add = (x, y) => x * y;

// Challenge II

let formatAge = (name, age) => `${name} adalah umur ${age}`

console.log(formatAge("Fauzi", 20));
console.log(formatAge("Agung", 26));
console.log(formatAge("Daniy", 32));
