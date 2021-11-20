<?php
//https://open.kattis.com/problems/babelfish
//Running Time: 0.17s

if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
        if(preg_match('/^([A-Za-z ]+)$/',$line)){ 
            (strpos($line, " ")!=FALSE)?$temp=explode(" ", $line):$word[]=$line;
            $dict[$temp[1]]=$temp[0];
        }
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
for ($i=0; $i<count($word); $i++){
echo (isset($dict[$word[$i]]))? $dict[$word[$i]]."\n": "eh\n";
}
