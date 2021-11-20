<?php
//https://open.kattis.com/problems/busnumbers
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $lines[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}

$bus=explode(" ", $lines[1]);
sort($bus);

for ($i=0; $i<count($bus); $i++){
    if ($i!=count($bus)-1 && $bus[$i]+1==$bus[$i+1]){
        if (!isset($start)){
            $start=$bus[$i];
        }
        $end=$bus[$i+1];
    }
    else if (isset ($start) && isset ($end)){
        if ($end-$start>1){
            echo $start."-".$end." ";   
        }
        else echo $start." ".$end." ";  
    unset ($start);
    unset ($end);
    }
    
    else echo $bus[$i]." ";
}
