<?php
//https://open.kattis.com/problems/conundrum
//Running Time: 0.01s

$line=trim(fgets(STDIN));
//$line="SECRETUYROQWEUNSIWNE";
$array=str_split($line);
$base=array("P","E","R");
$counter=0;
for ($i=0; $i<count($array); $i++){
   if($array[$i] !==$base[$i%3]){
       $counter++;
   }
}
fprintf(STDOUT, '%d', $counter);
