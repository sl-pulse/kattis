<?php
//https://open.kattis.com/problems/aaah
//Running Time: 0.01s
$counter=1;
while (fscanf(STDIN, '%s', $string)==1){
    if ($counter%2!=0){
        $say=$string;
    }
    else {
        $doc=$string;
    }
    $counter++;
}
$say_a=  substr_count($say, 'a');
$doc_a=  substr_count($doc, 'a');
if ($doc_a>$say_a){
    echo "no\n";
}
else {
    echo "go\n";
}
