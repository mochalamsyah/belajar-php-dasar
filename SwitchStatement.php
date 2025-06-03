<?php

 // Switch sama dengan IF, namun dengan versi lebih simple, kondisi/case hanya 1 saja

 $nilai = "B";

 switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default: // default sama spserti else
        echo "Mungkin anda Salah Jurusan" . PHP_EOL;
 }