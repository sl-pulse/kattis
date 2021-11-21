<?php
//https://open.kattis.com/problems/sumoftheothers
//Running Time: 0.01s

if (STDIN){
    while(($in=fgets(STDIN)) != FALSE){
          $lines[] = trim($in);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}

foreach ($lines as $line){
    $lineArr=explode(" ",$line);
        for ($i=0; $i<count($lineArr); $i++){
            $temp=$lineArr;
            unset($temp[$i]);   
            if ($lineArr[$i]==array_sum($temp)){
                echo $lineArr[$i]."\r\n";
                break;
            }
        }
}
