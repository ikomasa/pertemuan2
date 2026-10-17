<?php
// Buat fungsi hitungNilaiAkhir($tugas, $uts, $uas) :
// Menghitung nilai akhir berdasarkan bobot:
// Tugas = 30%
// UTS = 30%
// UAS = 40%
// Menentukan apakah Lulus (nilai akhir >= 70) atau Tidak Lulus.
// Output :
// Nilai akhir : 83
// Satatus : lulus

$nilai_tugas = 81;
$nilai_uts = 81;
$nilai_uas = 86;

function hitung_Nilai_Akhir($tugas, $uts, $uas) {
    $Nilai_Akhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    
    echo "Nilai_Akhir: " . $Nilai_Akhir . "<br>";
    
    if ($Nilai_Akhir >= 70) {
        echo "Status: Lulus";
    } else {
        echo "Status: Tidak Lulus";
    }
}

Hitung_Nilai_Akhir($nilai_tugas, $nilai_uts, $nilai_uas);
?>

