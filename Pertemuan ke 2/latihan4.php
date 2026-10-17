<?php
// buat ptogram PHP untuk menentukan grade nilai mahasiswa berdasarkan kriteria berikut:
// >=90 = A 
// 80-90 = B
// 70-79 = c
// 60-69 = D
// < 60 = E

$nilai = 40;
if ($nilai >= 90 ) {
    echo "A";
    } elseif ($nilai >= 80) {
    echo "B";
    } elseif ($nilai >= 70) {
    echo "C";    
    } elseif ($nilai >= 60) {
    echo "D";
    } else {
    echo "E";
    }
?>
   