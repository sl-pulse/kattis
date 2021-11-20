<?php
//https://open.kattis.com/problems/statistics
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $lines[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}

$counter=1;
for ($i=0; $i<count($lines); $i++){
    $input=explode(" ",$lines[$i]);
    array_shift($input);
    $max=max($input);
    $min=min($input);
    $range=$max-$min;
    echo "Case ".$counter.": ".$min." ".$max." ".$range."\r\n";
    $counter++;
}
