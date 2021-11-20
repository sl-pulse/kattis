<?php
//https://open.kattis.com/problems/spavanac
//Running Time: 0.01s
while (fscanf(STDIN, '%d%d', $H, $M) === 2) {
     
     if ($M>=45){
         $new_H=$H;
         $new_M=$M-45;
         
     }
     else if ($H!=0){
         $new_M=60+$M-45;
         $new_H=$H-1;
       
     }
     else {
         $new_M=60+$M-45;
         $new_H=23;
         
     }

fprintf(STDOUT, '%d %d', $new_H, $new_M);

}   
