// https://kotakode.com/challenges/details/1/7268/Hilangkan-Angka-Duplikat

function hilangkanDuplikat(inputList) {
  // Inisialisasi array kosong untuk menampung hasil seleksi dari array inputan
  var output = []
  // Looping pertama sebagai base elemen dari array inputan untuk perbandingan pada looping kedua
  for (var i = 0; i < inputList.length; i++) {
    // Looping kedua sebagai elemen pembanding untuk base elemen dari looping pertama
    for (var j = i+1; j < inputList.length; j++) {
      // Cek apakah base elemen (looping pertama) sama dengan elemen pembanding (looping kedua)
      if (inputList[i] == inputList[j])
        // Ubah elemen pada indeks j dengan nilai 0 
        inputList[j] = 0
    }
    // Menyisipkan elemen baru dari array input dengan indeks i ke variabel output
    output.push(inputList[i])
  }
  return output
}
