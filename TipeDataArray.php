<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Moch", "Yasin", "Alamsyah"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Mochamad";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Kartakusuma";
var_dump($names);

var_dump(count($names));

$alam = array(
    "id" => "001",
    "name" => "Alamsyah",
    "age" => "28",
    "address" => array(
        "city" => "Bandung",
        "country" => "Indonesia"
    )
);

var_dump($alam);

// akses data dalam array
var_dump($alam["name"]);

// akses data array di dalam array
var_dump($alam["address"]["country"]);

$budi = [
    "id" => "002",
    "name" => "Budi",
    "age" => "30",
    "address" => [
        "city" => "Bandung",
        "country" => "Indonesia"
    ]
];

var_dump($budi);


