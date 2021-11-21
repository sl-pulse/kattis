<?php
//https://open.kattis.com/problems/tarifa
//Running Time: 0.01s

while (fscanf(STDIN, '%d', $a)) {
    $arr[]=$a;
}

$basic=$arr[0];
$rollover=0;
for ($i=2; $i<count($arr); $i++){
    $allow=$basic+$rollover;
    $rollover=$allow-$arr[$i];
}
echo $basic+$rollover;
