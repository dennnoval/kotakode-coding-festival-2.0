<?php

# https://kotakode.com/challenges/details/3/7272/Jalur-Jumlah-Maksimum

function jumlahMaksimum($arr1, $arr2) {
	# Urutkan tiap parameter input array jika belum terurut
  sort($arr1); sort($arr2);
  # Inisialisasi variabel a dan b dengan nilai parameter arr1 dan arr2 untuk mempersingkat penamaan variabel
  $a = $arr1; $b = $arr2;
  # Inisialisasi variabel c sebagai variabel array default
  $c = null;
  # Pemilihan array yang cocok sebagai array default
  # Pertama dengan membandingkan jumlah elemen dari kedua array a dan b
  # Kedua dengan membandingkan total penjumlahan elemen dari kedua array a dan b
  # Terakhir pemilihan dilanjutkan dengan kondisi sisanya
  if (count($b) < count($b))
    if (array_sum($b) < array_sum($a))
      $c = $b;
    else $c = $a;
  else if (count($b) > count($a))
    if (array_sum($b) < array_sum($a))
      $c = $a;
    else $c = $b;
  else
    if (array_sum($b) < array_sum($a))
      $c = $b;
    else $c = $a;
      
  # Pemilihan array yang cocok sebagai array pembanding
  $d = $c==$a ? $b : $a;
  
  # Inisialisasi array kosong untuk menampung hasil seleksi pada looping
  $t = [];
  
  # Inisialisasi variabel s sebagai state pertukaran untuk masing2 elemen array c dan d
  $s = false;
  
  # Looping pertama sepanjang array default
  for ($i=0; $i<count($c); $i++) {
  	# Looping kedua sepanjang array pembanding
    for ($j=0; $j<count($d); $j++) {
    	# Pengecekan apakah nilai elemen indeks ke-i pada array c sama dengan elemen indeks ke-j pada array d
    	if ($c[$i]==$d[$j]) {
    		# Ubah variabel s menjadi state true
				$s = true;
    		# Pengecekan jika nilai indeks i sama dengan indeks j
    		if ($i==$j) {
    			# Pengecekan jika nilai indeks sama dengan jumlah panjang elemen array c dikurang 2 dimana elemen selanjutnya termasuk indeks terakhir seperti contoh 1
    			if ($i==count($c)-2)
    				# Ubah nilai array c menjadi nilai array d
    				$c = $d;
    		# Selain itu
    		} else {
    			# Tambahkan kedalam array t penjumlahan dari elemen c indeks ke-i dengan elemen d indeks ke-j dibagi dengan 2
    			array_push($t,($c[$i]+$d[$j])/2);
    			# Ubah nilai array c menjadi nilai array d
		  		$c = $d;
    		}
  		}
    }
    # Pengecekan jika state bernilai true
    if ($s)
    	# Tambahkan kedalam array t dengan nilai elemen array c pada indeks ke-i
    	array_push($t,$c[$i]);
    else
    	# Masukan ini dalam pengecualian else agar tidak menampung nilai elemen c ke dalam array t
    	array_push($t,$c[$i]);
  }
  return $t;
}
