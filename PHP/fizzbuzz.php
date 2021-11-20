<?php
//https://open.kattis.com/problems/fizzbuzz
//Running Time: 0.01s
while (fscanf(STDIN, '%d%d%d', $x, $y, $n )==3){
    for ($i=1; $i<=$n; $i++){
        if ($i%$x==0 && $i%$y==0 ){
            echo "FizzBuzz\r\n";
        }
        else if ($i%$x==0){
            echo "Fizz\r\n";
        }
        else if ($i%$y==0 ){
            echo "Buzz\r\n";
        }
        else echo $i."\r\n";
    }
}
