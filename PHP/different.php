<?php
//https://open.kattis.com/problems/different
//Running Time: 0.01s

while (fscanf(STDIN, '%d%d', $number1, $number2) === 2) {
    $res = abs($number1 - $number2);
    fprintf(STDOUT, "%d\n", $res);
}
