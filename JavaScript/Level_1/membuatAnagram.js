// https://kotakode.com/challenges/details/1/7267/Membuat-Anagram

function membuatAnagram(str1, str2) {
  // Variabel untuk menampung karakter yang sama
  var aa = ""
  // Looping karakter dari string pertama (str1)
  for (var i = 0; i < str1.length; i++) {
    // Looping karakter dari string kedua (str2)
    for (var j = 0; j < str2.length; j++) {
      // Jika ditemukan kesamaan karakter dari string pertama (str1) & string kedua (str2)
      if (str1[i] == str2[j]) {
        // Tambahkan karakter dari string pertama (str1) ke variabel aa
        aa += str1[i]
        // Tambahkan karakter dari string kedua (str2) ke variabel aa
        aa += str2[j]
      }
    }
  }
  // Menghitung selisih karakter dengan jumlah karakter pada string pertama (str1) dan string kedua (str2) lalu dikurangi dengan jumlah karakter pada variabel aa
  output = (str1.length + str2.length) - aa.length
  return output
}
