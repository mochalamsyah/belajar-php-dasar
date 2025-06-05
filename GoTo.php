<?php

// goto berfungsi untuk loncat ke program tujuan
// tetapi goto ini tidak disarankan digunakan karena akan membuat bingung si pembaca code

goto a;
echo "Ini akan diskip karena ada perintah goto a di atas";

a:
echo "Hello A" . PHP_EOL;

// contoh lainnya

$counter = 1;

while ($counter <= 10) {
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";