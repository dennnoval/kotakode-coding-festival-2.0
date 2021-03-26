function kasihPerangko(arr1) {
  // Inisialisasi variabel output dengan nilai 1
  var output = 1
  // Inisialisasi variabel p dengan nilai 1
  var p = 1
  // Inisialisasi variabel state dengan nilai 0
  var state = 0
  // Looping pertama sepanjang array inputan sebagai base elemen
  for (var i = 1; i < arr1.length; i++) {
    // Looping kedua sepanjang indeks dari looping pertama sebagai elemen pembanding
    for (var j = i - 1; j < i; j++) {
      // Cek apakah elemen pada indeks i lebih besar nilainya dari elemen pada indeks j pada array inputan
      if (arr1[i] > arr1[j]) {
        // Tambahkan nilai dari variabel p dengan nilai 1
        p+=1
        // Tambahkan nilai dari variabel state dengan nilai 1
        state++
      } else if (arr1[i] == arr1[j]) {
        // Kurangi 1 nilai dari variabel p
        p-=1
        // Ubah nilai variabel state dengan nilai 0
        state = 0
      } else {
        // Cek apakah nilai dari variabel state yaitu lebih dari sama dengan 2
        if (state >= 2)
          // Kurangi 2 nilai dari variabel p
          p-=2
        // Selain itu
        else
          // Kurangi 1 nilai dari variabel p 
          p-=1
        // Ubah nilai dari variabel state menjadi 0
        state = 0
      }
    }
    // Tambahkan nilai dari variabel output dengan nilai dari variabel p
    output += p
  }
  return output
}
