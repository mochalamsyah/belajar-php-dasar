<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangakanDipanggil = "foo";
$functionYangakanDipanggil(); // Dengan cara ini, maka function dapat dipanggil melalui variable

$functionYangakanDipanggil = "bar";
$functionYangakanDipanggil();