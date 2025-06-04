<?php

$data = [
    "action" => "Create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// isset mengecek data apakah ada atau engga, dan valuenya tidak sama dengan null
// cara di atas bisa diganti dengan operator null coalescing operator "??"
// contohnya sebagai berikut :

$data2 = [];
$action2 = $data2["action"] ?? "Nothing";
// set action2 dari data2[action], jika tidak ada maka set Nothing

echo $action2 . PHP_EOL;