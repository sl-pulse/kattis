<?php
//https://open.kattis.com/problems/cetvrta
//Running Time: 0.01s
$arrayX=array();
$arrayY=array();
while (fscanf(STDIN,'%d%d', $x, $y)==2){
    array_push($arrayX, $x);
    array_push($arrayY, $y);
}
sort($arrayX);
sort($arrayY);
if ($arrayX[0]==$arrayX[1]){
    $outX=$arrayX[2];
}
else {$outX=$arrayX[0];}
if ($arrayY[0]==$arrayY[1]){
    $outY=$arrayY[2];
}
else {$outY=$arrayY[0];}
echo $outX.' '.$outY;
