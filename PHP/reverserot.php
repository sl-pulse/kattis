<?php
//https://open.kattis.com/problems/reverserot
//Running Time: 0.01s
$original=str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ_.', 1);

while (fscanf(STDIN, "%d%s", $forward, $string)===2){
$out=array();
$rotation=array();
ksort ($rotation);
$strArr= str_split($string);
foreach ($strArr as $s){
    $key=array_search($s, $original);
    $new_key=$key+$forward;
    $shift_key=$new_key%28;
    $out[]=$original[$shift_key];
}
$out=  array_reverse($out);
$output=  implode('', $out);
echo $output."\n";
}
