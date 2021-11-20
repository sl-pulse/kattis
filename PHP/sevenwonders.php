<?php
//https://open.kattis.com/problems/sevenwonders
//Running Time: 0.01s
$str=trim(fgets(STDIN));
$countT=$countC=$countG=0;

for ($i=0; $i<strlen($str); $i++){
    $letter=$str[$i];
    if ($letter=="T"){
        $countT++;
    }
    else if ($letter=="G"){
        $countG++;
    }
    
    else if ($letter=="C"){
        $countC++;
    }
    
}

$bonus[]=$countT;
$bonus[]=$countG;
$bonus[]=$countC;

$score=pow($countT,2)+pow($countG,2)+pow($countC,2)+(min($bonus)*7);
echo $score;
