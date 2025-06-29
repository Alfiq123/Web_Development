// Standard variables
let price;
let quantity;
let total;

// Initialize variables
price = 10;
quantity = 2;
total = price * quantity;

// Declaring multiple variables at once
let apple = "A",
    orange = "O",
    banana = "B",
    mango = "M";

// Variables
let name = "John Doe";
let age = 30;
let isMarried = true;
let isSingle = false;
let favFood = "Pizza";
let email = "johndoe@google.com";

// Check data types
console.log(typeof name);
console.log(typeof age);
console.log(typeof isMarried);

// Print data
console.log(`Name: ${name}`);
console.log(`Age: ${age} years old`);
console.log(`Married: ${isMarried}`);
console.log(`Single: ${isSingle}`);
console.log(`Favorite food: ${favFood}`);
console.log(`Email: ${email}`);

// Alert stuff...
// alert(`Name: ${name}`);
// alert(`Age: ${age} years old`);
// alert(`Married: ${isMarried}`);
// alert(`Single: ${isSingle}`);
// alert(`Favorite food: ${favFood}`);
// alert(`Email: ${email}`);

// Changing index paragraph
document.getElementById("p1").textContent = `Your Name is: ${name}`;
document.getElementById("p2").textContent = `Your Age is: ${age}`;
document.getElementById("p3").textContent = `Are You Married?: ${isMarried}`;
