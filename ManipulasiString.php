<?php

$name = "Moch Yasin Alamsyah";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;
// lebih ringkas karena tidak perlu banyak perintah echo

// Di bawah ini cara konversi tipe data
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$name = "Alam";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
// Mengakses karakter, sama seperti data dalam array

echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
// lebih simple menggunakan cara di bawah :
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

// menggabungkan variable dengan string (variable parsing)
$var = "var";
echo "This is {$var}s" . PHP_EOL; 