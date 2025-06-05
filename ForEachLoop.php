<?php

// Kode tanpa for each
// menampilkan setiap data array

$names = ["Moch", "Yasin", "Alamsyah"];

for ($i = 0 ; $i < count($names) ; $i++) {
    echo "Data ke - $i = $names[$i]" . PHP_EOL;
}

// perulangan untuk seluruh data array bisa menggunakan foreach
// lebih simple dan tidak ribet

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

// For each pada array yang menggunakan key

$person = [
    "first_name" => "Moch",
    "middle_name" => "Yasin",
    "last_name" => "Alamsyah"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
