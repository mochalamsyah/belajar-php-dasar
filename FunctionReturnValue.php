<?php

function sum(int $first, int $second): int // : int berfungsi mendeklarasikan tipe data return value, agar meminimalisir error tipe data juga
{
    $total = $first + $second;
    return $total; // return berfungsi mengembalikan data, ibarat outputnya
}

$result = sum(10, 10);
var_dump($result);

function getFinalValue(int $value): string
{
    if ($value >= 90) {
        return "A";
    } else if ($value >= 80) {
        return "B";
    } else if ($value >= 70) {
        return "C";
    } else if ($value >= 60) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL; // statement ini tidak akan diproses, karena seelumnya ada Return
}

$score = getFinalValue(1);
var_dump($score);