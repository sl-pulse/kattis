<?php
//https://open.kattis.com/problems/reversebinary
//Running Time: 0.01s
while(fscanf(STDIN,'%d',$a)){
    $a=decbin($a);
    $aArr=str_split($a);
    $bBin=implode("",array_reverse($aArr));
    $b=bindec($bBin);
    echo $b."\n";
}
