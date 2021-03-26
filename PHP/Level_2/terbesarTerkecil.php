<?php

# https://kotakode.com/challenges/details/3/7271/Terbesar-dan-Terkecil

function terbesarTerkecil($inputArr) {
  # Inisialisasi variabel dt dengan nilai dari parameter inputArr untuk memperpendek penamaan variabel 
  $d = $inputArr;
  # Looping pertama selama panjang elemen array d
  for ($i=0;$i<count($d);$i++) {
    # Simpan nilai indeks i ke variabel im sebagai indeks minimum untuk pemilihan elemen dalam array d
    $im=$i;
    # Looping kedua selama panjang elemen array d digunakan sebagai elemen pembanding dengan elemen im
    for ($j=$i+1;$j<count($d);$j++)
      # Pengecekan apakah elemen dari array d dengan indeks j lebih kecil nilainya dibanding elemen dengan indeks im
      if ($d[$j]<$d[$im])
        # Ubah nilai im dengan nilai dari j
        $im = $j;
    # Proses pertukaran elemen
    $tmp = $d[$i];
    # Proses pertukaran elemen
    $d[$i] = $d[$im];
    # Proses pertukaran elemen
    $d[$im] = $tmp;
  }
  # Simpan hasil dari elemen array ke-0 dan elemen array terakhir ke dalam vsriabel output
  $output = [$d[0],$d[count($d)-1]];
  return $output;
