<?php
// Buat program untuk menampilkan bilangan dari 1-10 dengan
// ketentuan:
// Jika bilangan genap -> tampilkan "Genap"
// Jika bilangan ganjil -> tampilkan "Ganjil"

for ($i = 1; $i <= 10; $i++) {
        
    if ($i % 2 == 0) {
        echo "$i adalah bilangan Genap <br>";
    } else {
        echo "$i adalah bilangan Ganjil <br>";
    }
    
}
?>

