<?php 
//https://open.kattis.com/problems/abc
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $lines[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}

$input=$lines[0];
$order=$lines[1];
$arr=explode(" ", $input);
$opOrder=str_split(strtolower($order));
sort ($arr);
$output['a'][0]=$arr[0];
$output['b'][0]=$arr[1];
$output['c'][0]=$arr[2];

for ($i=0; $i<3; $i++){
    echo $output[$opOrder[$i]][0]." ";
}
