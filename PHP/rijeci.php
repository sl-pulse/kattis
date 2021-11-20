<?php
//https://open.kattis.com/problems/rijeci
//Running Time: 0.01s
$x=(int)(trim(fgets(STDIN)));

    $fib = [0,1];
    for($i=1;$i<=45;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
$a=$fib[$x];
$b=$fib[$x-1];
printf ($b." ".$a);
