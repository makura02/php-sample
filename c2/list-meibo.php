<?php

// 名簿リストを初期化
$meibo = array();

// 人を名簿に追加1
$person = [
  "name" => "Nami",
  "age" => 18
];
array_push($meibo, $person);

// 人を名簿に追加2
$person = [
  "name" => "Sanji",
  "age" => 20
];
array_push($meibo, $person);

// 人を名簿に追加3
$person = [
  "name" => "Takeshi",
  "age" => 28
];
array_push($meibo, $person);

$r = rand(0, count($meibo) - 1);
$p = $meibo[$r];
echo "name:" . $p["name"] . "\n";
echo "age:" . $p["age"] . "\n";
