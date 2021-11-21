<?php
//https://open.kattis.com/problems/quickbrownfox
//Running Time: 0.01s

$base="abcdefghijklmnopqrstuvwxyz";
$b_arr=  str_split($base);
$longest=0;
$arr=array();
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
      if(!(preg_match('/^\d+$/',$line))){
      check($line, $b_arr);   
      }
    }
if (!(feof(STDIN))){
        
    }
    fclose(STDIN);
}
function check($str, $b_arr){
$str=  strtolower($str);
$str= preg_replace('/[^a-z]/','', $str);
$arr=  str_split($str);
$diff=  array_diff($b_arr, $arr);
if (empty($diff)){
    echo "pangram\n";
}
else{
echo "missing ".implode('', $diff)."\n";
}
}
