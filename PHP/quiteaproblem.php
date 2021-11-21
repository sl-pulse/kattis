<?php
//https://open.kattis.com/problems/quiteaproblem
//Running Time: 0.01s

if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $paragraph[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}

for ($i=0; $i<count($paragraph); $i++){
    if (strpos(strtolower($paragraph[$i]), "problem") !== false) {
    echo "yes";
    } 
    else {
    echo "no";
    }
    echo "\r\n";    
}
