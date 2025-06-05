<?php

$counter = 1;

while ($counter <= 10) {
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
}
// syarat while loop hanya perlu mengisi kondisi saja, untuk init dan post bisa menyesuaikan bila perlu ditambahkan

$counter = 1;

while ($counter <= 10) :
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;