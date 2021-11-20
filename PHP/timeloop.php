<?php
//https://open.kattis.com/problems/timeloop
//Running Time: 0.01s
while (fscanf(STDIN, '%d', $num)==1){
    $word="Abracadabra";
    for ($i=1; $i<=$num; $i++){
        echo $i." ".$word."\r\n";
    }
}
