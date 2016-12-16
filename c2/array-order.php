<?php
$a = [0, 1];
$a[5] = 5;
$a[4] = 4;
$a[2] = 2;
$a[3] = 3;

for ($i = 0; $i < count($a); $i++) {
  echo $a[$i] . "\n";
}

foreach ($a as $e) {
  echo $e . "\n";
}
