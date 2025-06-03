<?php

echo 'Name : ';
echo 'Mochamad Yasin Alamsyah';
echo "\n";

echo "Name : ";
echo "Mochamad\t Yasin\t Alamsyah\n";

echo <<<TEXT
test paragraf tanpa perintah enter
ini baris ke 2 seharusnya
ini adalah cara Heredoc

TEXT;

echo <<<'CEK'
test paragraf tanpa perintah enter
ini baris ke 2 seharusnya
ini adalah cara Nowdoc
CEK;