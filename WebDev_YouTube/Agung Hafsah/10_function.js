function sayHappyBirthday(nama, umur) {
    console.log(`Selamat Ulang Tahun Ke ${umur}, ${nama}!`);
}

sayHappyBirthday(nama="Fauzi", umur=20);
sayHappyBirthday(nama="Izuaf", umur=21);
sayHappyBirthday(nama="Budi" , umur=22);

// Challenge I

function sayName() {
    console.log("Algorithm");
}

sayName();

// Challenge II

function logNumberType(angka) {
    if (angka === 0) {
        console.log("Netral");

    } else if (angka > 0) {
        console.log("Positif");
        
    } else if (angka < 0) {
        console.log("Negatif");

    } else {
        console.log("Input Tidak Valid");

    }
}

logNumberType(angka=0);
logNumberType(angka=10);
logNumberType(angka=-20);

// Challenge III

function add(x, y) {
    console.log(`${x} ditambah ${y} sama dengan ${x + y}`);
}

add(x=10, y=20);
add(x=16, y=16);
add(x=32, y=32);
