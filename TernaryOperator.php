<?php

$gender = "PRIA";
$hi = null;

/* 
if ($gender == "PRIA"){
    echo $hi = "Hi Bro";
} else {
    echo $hi = "Hi Nona";
}
*/

// fungsi if di atas bisa disederhanakan dengan cara berikut:

$hi = $gender == "PRIA" ? "Hi Bro!" : "Hi Nona.";
// tanda tanya (?) sebagai awalan untuk data yang memenuhi syarat
// tanda titik dua ":" sebagai else nya

echo $hi . PHP_EOL;