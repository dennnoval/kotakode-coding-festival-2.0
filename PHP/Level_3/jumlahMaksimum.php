<?php

# https://kotakode.com/challenges/details/3/7272/Jalur-Jumlah-Maksimum

function jumlahMaksimum($arr1, $arr2) {
  sort($arr1); sort($arr2);
  $a = $arr1; $b = $arr2;
  
  $c = null;
  
  # Pemilihan array yang cocok sebagai array default
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
      
  $l = count($c) >= count($d) ? count($c) : count($d);
  
  # Inisialisasi array kosong untuk menampung hasil seleksi pada looping
  $t = [];
  
  $s = false;
  
  for ($i=0; $i<count($c); $i++) {
    for ($j=0; $j<count($d); $j++) {
    	if ($c[$i]==$d[$j])
    		if ($i==$j) {
    			if ($i==count($c)-2)
    				$c = $d;
    		} else {
    			array_push($t,($c[$i]+$d[$j])/2);
		  		$s = true;
		  		$c = $d;
    		}
    }
    if ($s)
    	array_push($t,$c[$i]);
    else array_push($t,$c[$i]);
  }
  return $t;
}
