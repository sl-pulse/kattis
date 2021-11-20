<?php
//https://open.kattis.com/problems/raggedright
//Running Time: 0.01s
$longest=0;
$arr=array();
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
    $line=trim($line);
    if (strlen($line)>$longest){
        $longest=  strlen($line);
    }
    $arr[]=$line;
    }
if (!(feof(STDIN))){     
    }
fclose(STDIN);
}
$penalty=0;
for ($i=0; $i<count($arr)-1; $i++){
    $a=$arr[$i];
    $diff=$longest-strlen($a);
    $penalty+= pow($diff, 2);
}
echo $penalty;
