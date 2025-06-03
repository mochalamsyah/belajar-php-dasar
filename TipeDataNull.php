<?php

$name = "Alamsyah";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
echo is_null($name);
echo "\n";
var_dump(is_null($name));
echo "\n"; 

$contoh = "Persib";
unset($contoh);

echo $contoh;

$name2 = "test";
// isset mengecek variable tersebut ada atau tidak
var_dump(isset($contoh));
var_dump(isset($name2));