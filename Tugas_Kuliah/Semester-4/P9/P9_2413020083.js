const args = process.argv;
const angka1 = parseFloat(args[2]);
const operator = args[3];
const angka2 = parseFloat(args[4]);

if (isNaN(angka1) || isNaN(angka2)) {
    console.log("=== ERROR ===");
    console.log("Input yang Anda masukkan salah atau tidak lengkap.");
    console.log("Format penggunaan: node P9_2413020083.js [angka1] [operator] [angka2]");
    console.log("Contoh: node P9_2413020083.js 10 + 5");
    console.log("Atau: node P9_2413020083.js 10 tambah 5");
    process.exit(1);
}

let hasil;

switch (operator) {
    case "+":
    case "tambah":
        hasil = angka1 + angka2;
        break;
    case "-":
    case "kurang":
        hasil = angka1 - angka2;
        break;
    case "x":
    case "kali":
        hasil = angka1 * angka2;
        break;
    case "/":
    case "bagi":
        if (angka2 === 0) {
            console.log("Error: Pembagian dengan angka 0 tidak diperbolehkan.");
            process.exit(1);
        }
        hasil = angka1 / angka2;
        break;
    default:
        console.log("Operator tidak dikenal. Gunakan: +, -, x, / (atau: tambah, kurang, kali, bagi)");
        process.exit(1);
}

console.log("=====================================");
console.log("          KALKULATOR NODE.JS         ");
console.log("=====================================");
console.log(`Perhitungan : ${angka1} ${operator} ${angka2}`);
console.log(`Hasil       : ${hasil}`);
console.log("=====================================");