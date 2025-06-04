<?php

// for ( ; ; ) {
    // echo "Ini adalah for loop" . PHP_EOL;
// }
// init statement ; kondisi ; post statement tidak diisi, maka ototmatis true, dan looping akan terus dilakukan

// $counter = 1;

/* for ( ; $counter <= 10 ; ) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++; //ditambah 1 supaya value counternya berbeda
} */

// cara di atas bisa menggunakan cara di bawah ini agar init statement dan post nya terisi
for ( $counter = 1 ; $counter <= 10 ; $counter++ ) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

// contoh decrement :
for ( $counter = 10 ; $counter >= 1 ; $counter-- ) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

// bisa pakai titik2 dan endfor
for ( $counter = 1 ; $counter <= 10 ; $counter++ ) :
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;