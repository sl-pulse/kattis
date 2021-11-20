<?php
//https://open.kattis.com/problems/detaileddifferences
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
    $input[]=trim($line);
    }
if (!(feof(STDIN))){
        
    }
    fclose(STDIN);
}

for ($i=1; $i<count($input); $i++){
    if ($i%2 !== 0){
        $line_a[]=$input[$i];
    }
    else 
        $line_b[]=$input[$i];
}

for ($j=0; $j<count($line_a); $j++){
    echo $line_a[$j]."\r\n";
    echo $line_b[$j]."\r\n";
    $array_a=str_split($line_a[$j]);
    $array_b=str_split($line_b[$j]);
    for ($k=0; $k<count($array_a); $k++){
        if ($array_a[$k]===$array_b[$k]){
            echo ".";
        }
        else 
            echo "*";
    }
    echo "\r\n\r\n";
}
