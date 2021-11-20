<?php
//https://open.kattis.com/problems/r2
//Running Time: 0.01s
$str=trim(fgets(STDIN));
$arr=explode(' ', $str);
$r_one=$arr[0];
$mean=$arr[1];
$r_two=$mean*2-$r_one;
echo $r_two;
