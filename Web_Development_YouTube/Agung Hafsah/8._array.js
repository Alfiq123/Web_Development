// let avenger1 = "Iron Man";
// let avenger2 = "Black Widow";
// let avenger3 = "Hulk";

let avengers = [
    "Iron Man", 
    "Black Widow", 
    "Hulk", 
    "Captain America", 
    "Thor"
];

console.log(avengers);

console.log(avengers[0]);
console.log(avengers[1]);
console.log(avengers[2]);
console.log(avengers[3]);
console.log(avengers[4]);

console.log(avengers.length);

console.log(avengers.includes("Thor"));
console.log(avengers.includes("Wanda"));

// Challenge I

let usernames = [
    "Yandy", 
    "Dimas", 
    "Mita", 
    "Dika", 
    "Budi"
];

console.log(`Ada total ${usernames.length} username`);

// Challenge II

let newUsernames = "Agung";

if (usernames.includes(newUsernames)) {
    console.log("Username sudah digunakan");

} else {
    console.log("Username Tersedia!");

}

// Challenge III

let favoriteFoods = [
    "Mie Ayam",
    "Ayam Bakar",
    "Soto",
    "Rendang",
    "Bakso"
];

console.log(`Makanan favoritku yang kedua adalah ${favoriteFoods[1]}`);
console.log(`Makanan favoritku yang Ketiga adalah ${favoriteFoods[2]}`);
