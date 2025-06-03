<?php

$first = [
    "first_name" => "Moch"
];

$last = [
    "last_name" => "Alamsyah"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Moch",
    "last_name" => "Alamsyah"
];

$b = [
    "last_name" => "Alamsyah",
    "first_name" => "Moch"
];

var_dump($a == $b); // hasilnya akan true (dianggap sama)
var_dump($a === $b); // hasilnya akan false, karena urutan datanya berbeda
