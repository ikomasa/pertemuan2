<?php
// Buat fungsi bernama hitungLuasLingkaran($jari) yang:
// Menggunakan rumus: luas = 3.14 * jari * jari
// Mengembalikan nilai luas
// Tampilkan hasilnya dalam format:
// Luas lingkaran dengan jari-jari 7 adalah 132.86

function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$jari_jari_input = 7;

$hasil_luas = HitungLuasLingkaran($jari_jari_input);

echo "Luas lingkaran dengan jari-jari " . $jari_jari_input . " adalah " . $hasil_luas;

?>

