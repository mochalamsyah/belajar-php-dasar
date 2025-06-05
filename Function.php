<?php

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

// function di atas jika tidak dipanggil maka tidak akan tampil apa2 ketika dirun

// panggil function :
sayHello();

// contoh function menggunakan IF
// function bisa diakses jika sudah dijalankan

$buat = true; // jika true makan function akan didefine, jika False maka function tidak akan didefine


if ($buat) {
    function sayHello2()
    {
        echo "Hello Function2" . PHP_EOL;
    }
}

sayHello2();
sayHello2();
