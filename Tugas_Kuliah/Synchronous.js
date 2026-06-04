const getUserSync = id => {
    const nama = id === 1 ? "Pertama" : "Kedua";
    return { id, nama };
}

const userSatu = getUserSync(1);
console.log(userSatu);

const userDua = getUserSync(2);
console.log(userDua);

const halo = "Halo";
console.log(halo);
