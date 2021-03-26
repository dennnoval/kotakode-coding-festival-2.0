<?php

# https://kotakode.com/challenges/details/3/7272/Jalur-Jumlah-Maksimum

function jumlahMaksimum($arr1,$arr2) {
  # Mengurutkan secara ascending parameter arr1 dan arr2
  sort($arr1); sort($arr2);
  # Inisialisasi variabel a dengan nilai dari parameter arr1
  $a = $arr1;
  # Inisialisasi variabel b dengan nilai dari parameter arr2
  $b = $arr2;
  # Inisialisasi variabel l dengan hasil pengecekan antara apakah panjang array a lebih besar b
  $l = count($a) > count($b) ? count($a) : count($b);
  # Inisialisasi variabel t dengan nilai 0 untuk menampung total nilai yg dipilih
  $t = 0;
  # Inisialisasi variabel s dengan nilai false sebagai state untuk swap elemen antara array a dan b
  $s = false;
  # Inisialisasi variabel i dengan nilai 0 untuk indeks looping
  $i = 0;
  # Looping selama nilai i kurang dari nilai l
  while ($i < $l) {
    # Inisialisasi variabel c dengan nilai dari hasil pengecekan apakah panjang array a lebih kecil dari array b
    $c = count($a) < count($b) ? $a[$i] : $b[$i];
    # Pengecekan apakah nilai elemen ke-i pada array b sama dengan nilai elemen indeks ke-i pada array a
    if ($b[$i]==$a[$i]) 
      # Ubah nilai s menjadi true
      $s = true;
    # Lakukan pengecekan jika nilai s sama dengan true
    if ($s)
      # Pengecekan apakah nilai variabel c sama dengan nilai elemen ke-i pada array b
      if ($c==$b[$i]) 
        # Ubah nilai variabel c dengan nilai dari elemen ke-i pada array a
        $c = $a[$i];
      # Jika pengecekan diatas salah maka
      else
        # Ubah nilai variabel c dengan nilai dari elemen ke-i pada array b
        $c = $b[$i];
    # Tambahkan nilai variabel t dengan nilai dari variabel c
    $t += $c;
    # Tambahkan nilai i dengan nilai 1 untuk proses looping
    $i += 1;
  }
  # Simpan nilai variabel t ke dalam variabel output
  $output = $t;
  return $output;
}
