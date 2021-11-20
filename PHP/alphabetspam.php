<?php
//https://open.kattis.com/problems/alphabetspam
//Running Time: 0.01s
while (fscanf(STDIN, '%s', $string)==1){
    $len=strlen($string);
    $space=strlen(preg_replace("/[^_]/","", $string));
    $upper=strlen(preg_replace("/[^A-Z]/","", $string));
    $lower=strlen(preg_replace("/[^a-z]/","", $string));
    $symbol=$len-($space+$upper+$lower); 
    echo $space/$len."\n";
    echo $lower/$len."\n";
    echo $upper/$len."\n";
    echo $symbol/$len."\n";
}
