<?php

# https://kotakode.com/challenges/details/3/7270/Palindrome

function apakahPalindrome($input) {
  # Inisialisasi variabel output dengan nilai "false"
  $output = false;
  # Inisialisasi variabel o dengan nilai hasil konversi parameter nilai dari tipe integer ke tipe string untuk proses ektrasi menjadi karakter 
  $o = (string) $input;
  # Inisialisasi variabel x dengan nilai array kosong
  $x = [];
  # Looping menurun dengan indeks awal panjang dari string o selama >= 0
  for ($i=strlen($o)-1;$i>=0;$i--) {
    # Menyisipkan elemen baru ke array x dengan nilai dari tiap karakter pada string 0 menggunakan indeks i
    array_push($x,str_split($o)[$i]);
  }
  # Pengecekan apakah nilai dari array x sama dengan nilai array string o
  if ($x == str_split($o)) $output = true;
  return $output;
}
