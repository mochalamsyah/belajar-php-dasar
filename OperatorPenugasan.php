<?php

$total = 0;

$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;

$total = $total + $fruit;
$total = $total + $chicken;
$total = $total + $orangeJuice;

var_dump($total);

$total2 = 0;

// cara di atas sama dengan cara di bawah

$fruit2 = 5000;
$chicken2 = 10000;
$orangeJuice2 = 5000;

$total2 += $fruit2;
$total2 += $chicken2;
$total2 += $orangeJuice2;

var_dump($total2);