<?php
//Buat program dengan array berisi angka 1-20.Gunakan perulangan dan percabangan untuk menampilkan hanya angka yang habis dibagi 3. 

$kumpulan_angka = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

echo "Angka yang habis dibagi 3 adalah: <br>";

foreach ($kumpulan_angka as $angka) {
    if ($angka % 3 == 0) {
        echo $angka . "<br>";
    }
    
}

?>
