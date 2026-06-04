const getUserSync = id => {
    const nama = id === 1 ? "Pertama" : "Kedua";
    return { id, nama };
}

for (let i = 0; i <= 5; i++) {
    setTimeout(() => {
        console.log(`Urutan Ke: ${i}`);
    }, 3000);
}

setTimeout(() => {
    console.log("Selesai");
}, 2000);

setTimeout(() => {
    console.log("Selesai Lagi");
}, 1000);

const userSatu = getUserSync(1);
console.log(userSatu);

const userDua = getUserSync(2);
console.log(userDua);

const halo = "Halo";
console.log(halo);
