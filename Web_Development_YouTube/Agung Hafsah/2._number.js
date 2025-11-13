const x = 10;
const y = 5;
const z = x + y;

const a = 10 + 20 - 30

console.log(a);
console.log(z);

console.log(`Stack Remaining: ${64 * 16}`);
console.log(`Stack Remaining: ${64 * 32}`);

console.log(`Stack Remaining: ${16 + 16}`);
console.log(`Stack Remaining: ${16 - 16}`);
console.log(`Stack Remaining: ${16 * 16}`);
console.log(`Stack Remaining: ${16 / 16}`);

console.log(`Stack Remaining: ${16 % 16}`);

// Challenge I

let apel        = 5000;
let apelTotal   = 3
let pisang      = 10000;
let pisangTotal = 2;
let kupon       = 10000;

console.log(`Total Harga: ${(apel * apelTotal) + (pisang * pisangTotal) - kupon}`);

// Challenge II

let kuponDiskon = 0.1;
let hargaAsli   = (apel * apelTotal) + (pisang * pisangTotal);
let harga       = hargaAsli - (hargaAsli * kuponDiskon);

console.log(`Harga Asli: Rp ${harga}`)
