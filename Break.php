<?php

$counter = 1;

while (true) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

// while di atas sebenrnya akan berjalan terus, maka perlu menggunakan 'break' pada kondisi tertentu
// break digunakan untuk menghentikan seluruh perulangan, tidak peduli kondisi apapun maka perulangan akan dihentikan



