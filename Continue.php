<?php

/* for ($counter = 1 ; $counter <= 100 ; $counter++) {
    echo "Counter : $counter" . PHP_EOL;
} */

// continue berarti menghentikan perulangan yang sedang berjalan, dan melanjutkan ke perulangan berikutnya
// contoh penggunaan continue bisa dilihat di bawah ini

for ($counter = 1 ; $counter <= 100 ; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }

    echo "Counter : $counter" . PHP_EOL;
}

// if di atas berfungsi melakukan skip jika counter=angka genap
// jika angka genap maka akan dijalankan si continue tersebut

for ($counter = 1 ; $counter <= 100 ; $counter++) {
    if ($counter % 2 == 1) {
        continue;
    }

    echo "Counter : $counter" . PHP_EOL;
}