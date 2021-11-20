<?php
//https://open.kattis.com/problems/3dprinter
//Running Time:0.01s
while (fscanf(STDIN, '%d', $input)==1){
    echo cal($input);
}

function cal($input){
    for ($j=0; $j<=7; $j++){
        if (pow(2, $j)>=$input){
            return ($j+1);
        }
    }
    for ($i=14; $i>6; $i--){
        if ($input>pow(2, $i)){
            return ($i+2);
        }
    }   
}
