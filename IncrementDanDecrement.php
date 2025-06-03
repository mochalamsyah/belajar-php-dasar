<?php

$a = "10";

$a++; // ini sama dengan a = a + 1



$b = $a++; /* ini sama dengan 
    $b = $a;
    $a = $a+1;
*/

$c = ++$a; /* ini sama dengan 
    $a = $a+1;
    $c = $a;
*/

var_dump($a);
var_dump($b);
var_dump($c);
