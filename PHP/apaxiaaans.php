<?php
//https://open.kattis.com/problems/apaxiaaans
//Running Time: 0.01s
while (fscanf(STDIN, '%s', $string)==1){
    $duplicate=array();
    $length=strlen($string);
    $arr=str_split($string);
    for ($i=0; $i<$length-1;$i++){
        if ($arr[$i]==$arr[$i+1]){
            $duplicate[]=$i+1;
        }
    }
    removeDup($duplicate, $arr);
}
function removeDup($duplicate, $arr){
foreach ($duplicate as $dup){
    unset($arr[$dup]);
}
echo implode("", $arr)."\n";
}
