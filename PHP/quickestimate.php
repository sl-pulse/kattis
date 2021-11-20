<?php
//https://open.kattis.com/problems/quickestimate
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $input[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
array_shift($input);
foreach ($input as $value){
    echo strlen($value)."\n";
}
