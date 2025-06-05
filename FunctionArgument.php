<?php

function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Moch");
sayHello("Alamsyah");

// function bisa mengirimkan argument/parameter
// argument ditempatkan di dalam kurung () di deklarasi function


// argumen bisa lebih dari 1, pisahkan dengan tanda koma
function sayHi($name, $age)
{
    echo "Hi $name, $age" . PHP_EOL;
}

sayHi("Moch", 28);
sayHi("Alamsyah", 18);

// set default argument value, jika memanggil function tanpa mengisi argumen
function sayHello2($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello2();
// name nya akan otomatis terisi anonymous


// Tipe data pada argumen function
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100"); // masih bisa running, karena bisa dikonversi otomatis ke integer
sum(true, false); // ini masih bisa juga, true 1 dan false 0
// sum([], []); tidak akan bisa dikonversi ke integer


// Variable length Argumen List
// parameter yang dikirimkan ke function, akan otomatis dibaca sebagai array

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);

$values = [6, 7, 8];
// sumAll($values); // ini akan error, karena mengirim variable array
// seharusnya pake ini :
sumAll(...$values);