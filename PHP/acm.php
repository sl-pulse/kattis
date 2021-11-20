<?php
//https://open.kattis.com/problems/acm
//Running Time: 0.01s
$cTime=array();
$wrong=array();
$counter=0;
$penalty=0;
while (fscanf(STDIN, '%d%s%s', $time, $qs, $tf)==3){
    if ($tf=="right"){
       $cTime[$qs]="$time";
       $counter++;
    }
    else{
        if (array_key_exists($qs, $wrong)){
        $wrong[$qs]+=1;
        }
        else {$wrong[$qs]=1;}
    }
}
$subTotal=array_sum($cTime);
$cKey=  array_keys($cTime);
foreach ($cKey as $char) {
    if (array_key_exists($char, $wrong)){
    $penalty+=20*$wrong[$char]; 
    }
}
$totalTime=$subTotal+$penalty;
echo $counter." ".$totalTime."\n";
