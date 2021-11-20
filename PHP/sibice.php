<?php
//https://open.kattis.com/problems/sibice
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $input[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
$arr=explode(" ",$input[0]);
$w=$arr[1];
$h=$arr[2];
$d= sqrt(pow($w,2)+pow($h,2));

array_shift($input);

foreach ($input as $match){
    if ($match<=$d || $match<=$h || $match<=$w){
        echo "DA\r\n";  
    }
    else echo "NE\r\n";
}
