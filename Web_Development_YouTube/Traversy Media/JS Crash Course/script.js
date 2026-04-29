// === Alert === //
// alert("Hello World");


// === LOG === //
/*
console.log("Hello World!");
console.error("Hello World!");
console.warn("Hello World!");
*/


// === Variables === //
/*
var x = 15;
let y = 25;
const z = 35;

y = 50;

console.log(x);
console.log(y);
console.log(z);
*/


// === Data Types === //
/*
const name = "John Wesker";
const age = 50;
const rating = 4.5;
const isCool = "true";
const x = null;
const y = undefined;

console.log(typeof name);
console.log(typeof age);
console.log(typeof rating);
console.log(typeof isCool);
console.log(typeof x);
console.log(typeof y);
*/


// === Concatenation & Template String === //
/*
const nameB = "John Wesker";
const ageB = 50;

console.log("My name is: " + nameB + " and i am " + ageB + " years old");
console.log(`My name is: ${nameB}, and i am ${ageB} years old`);
*/


// === Some String Properties === //
/*
const s = "Hello World!";
const scomm = "Apple, Banana, Blueberry, Pineapple, Strawberry";

console.log(s.length);
console.log(s.toUpperCase());
console.log(s.toLowerCase());
console.log(s.substring(0, 5));
console.log(s.split(""));

console.log(scomm.split(", "));
*/


// === Arrays === //
/*
const numArr = new Array(1, 2, 3, 4, 5);
const fruits = ["Apple", "Banana", "Blueberry", "Orange", "Pears", "Pineapple", "Strawberry"]

numArr[5] = 10;
fruits[7] = "Grapes";

fruits.push("Mangos"); // Insert from end
fruits.unshift("Watermelon"); // Insert from start

fruits.pop();

console.log(Array.isArray(fruits)); // Check the array
console.log(Array.isArray(numArr)); // Check the array

console.log(fruits.indexOf("Blueberry")); // Check the index
console.log(fruits.indexOf("Pineapple")); // Check the index

console.log(numArr);
console.log(numArr[0]);
console.log(numArr[1]);
console.log(numArr[2]);

console.log(fruits);
console.log(fruits[0]);
console.log(fruits[1]);
console.log(fruits[2]);
*/


// === Object === //
/* 
const person = {
    firstName: "Albert",
    lastName: "Wesker",
    age: 50,
    hobbies: ["Kill", "Arson", "Murder"],
    address: {
        street: "Resident Evil St",
        city: "New York",
        state: "RE"
    }
};

console.log(person);
console.log(person.firstName);
console.log(person.firstName, person.lastName);

console.log(person.hobbies[0]);
console.log(person.hobbies[2]);

console.log(person.address.street);
console.log(person.address.city);

Object Destructuring 
const { firstName, lastName, address: { city } } = person;
console.log(firstName);
console.log(lastName);
console.log(city);

Add Properties
person.email = "albertwesker@remail.com";
console.log(person.email); 
*/


// === Array + Object === //
/*
const todos = [
    {
        id: 1,
        task: "Take out trash",
        isCompleted: true
    },
    {
        id: 2,
        task: "Meeting with boss",
        isCompleted: false
    },
    {
        id: 3,
        task: "Hotel appointment",
        isCompleted: true
    }
];

console.log(todos);

console.log(todos[0]);
console.log(todos[1]);
console.log(todos[2]);

console.log(todos[2].id);
console.log(todos[2].task);
console.log(todos[2].isCompleted);
*/


// === JSON === //
/*
const todos = [
    {
        id: 1,
        task: "Take out trash",
        isCompleted: true
    },
    {
        id: 2,
        task: "Meeting with boss",
        isCompleted: false
    },
    {
        id: 3,
        task: "Hotel appointment",
        isCompleted: true
    }
];
const todoJSON = JSON.stringify(todos);
console.log(todoJSON);
*/


// === For & While Loops === //
/*
const todos = [
    {
        id: 1,
        task: "Take out trash",
        isCompleted: true
    },
    {
        id: 2,
        task: "Meeting with boss",
        isCompleted: false
    },
    {
        id: 3,
        task: "Hotel appointment",
        isCompleted: true
    }
];

for (let i = 0; i < 10; i++) {
    console.log(`For Loop: ${i}`);
}

let i = 0;
while (i < 10) {
    console.log(`While Loop: ${i}`);
    i++;
}

for (let i = 0; i < todos.length; i++) {
    console.log(todos[i].task);
}

for (let todo of todos) {
    console.log(todo.id)
    console.log(todo.task)
    console.log(todo.isCompleted)
}
*/


// === ForEach, Map, Filter === //
/*
const todos = [
    {
        id: 1,
        task: "Take out trash",
        isCompleted: true
    },
    {
        id: 2,
        task: "Meeting with boss",
        isCompleted: false
    },
    {
        id: 3,
        task: "Hotel appointment",
        isCompleted: true
    }
];

// ForEach
todos.forEach(function(todo) {
    console.log(todo.task);
});


// Map
const todoTask = todos.map(function(todo) {
    return todo.task
});

console.log(todoTask);


// Filter
const todoFilter = todos.filter(function(todo) {
    return todo.isCompleted === true
});

console.log(todoFilter);


// Filter and Map
const todoFilterB = todos.filter(function(todo) {
    return todo.isCompleted === true
}).map(function(todo) {
    return todo.task;
});

console.log(todoFilterB);
*/


// === Condition === //
/*
const xampp = Math.floor(Math.random() * 101);

if (xampp === 100) { 
    console.log("XAMPP is 100"); 
} else if (xampp === 50) { 
    console.log("XAMPP is in the middle") 
} else { 
    console.log("XAMPP is not 100") 
}

const y = Math.floor(Math.random() * 51)
const z = Math.floor(Math.random() * 71)

for (let i = 0; i < 10; i++) {
    let inside = Math.floor(Math.random() * 51);
    console.log(inside);

    if (inside === 15) {
        console.log("We got 15");
    }
}
*/


// === Ternary === //
/*
const ternary = Math.floor(Math.random() * 256);
const color = ternary >= 128 ? "Red" : "Green"

console.log(ternary);
console.log(color);
*/


// === Switch === //
/*
const switching = Math.floor(Math.random() * 101);

switch (switching) {
    case 70:
        console.log("Good");
        break;
    
    case 80:
        console.log("Pretty Good")
        break;

    case 90:
        console.log("Awesome")
        break;

    case 100:
        console.log("Fantastic")
        break;
    
    default:
        console.log(`Are you alright? ${switching}`)
}
*/


// === Function === //
/*
function randInt (min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

const randIntB = (min, max) => Math.floor(Math.random() * (max - min)) + min;
const multFive = num => num * 5;

console.log(randInt(10, 100));
console.log(randInt(20, 200));
console.log(randInt(30, 300));

console.log(randIntB(10, 100));
console.log(randIntB(20, 200));
console.log(randIntB(30, 300));

console.log(multFive(5));
console.log(multFive(20));
console.log(multFive(50));
*/


// === OOP === //
/*
// Constructor
function Person (firstName, lastName, birthDate) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.birthDate = new Date(birthDate);
}

Person.prototype.getBirthYear = function () { return this.birthDate.getFullYear(); }
Person.prototype.getFullName = function () { return `${this.firstName} ${this.lastName}`; }

// Instantiate Object
const personA = new Person("Albert", "Einstein", "1879-03-14");
const personB = new Person("Isaac", "Newton", "1643-01-04");
const personC = new Person("Galileo", "Galilei", "1564-02-15");

console.log(personA);
console.log(personB.firstName);
console.log(personC.birthDate.getDay());
console.log(personC.birthDate.getMonth());
console.log(personC.birthDate.getFullYear());

console.log(personA.getFullName());
console.log(personA.getBirthYear());
*/


// === OOP Class === //
/*
class Person {
    constructor (firstName, lastName, birthDate) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.birthDate = new Date(birthDate);
    }

    getBirthYear () { return this.birthDate.getFullYear(); }
    getFullName () { return `${this.firstName} ${this.lastName}`; }
}

// Instantiate Object
const personA = new Person("Albert", "Einstein", "1879-03-14");
const personB = new Person("Isaac", "Newton", "1643-01-04");
const personC = new Person("Galileo", "Galilei", "1564-02-15");

console.log(personB.getFullName());
console.log(personB.getBirthYear());
*/

