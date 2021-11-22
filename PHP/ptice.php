<?php
//https://open.kattis.com/problems/ptice
//Running Time: 0.01s
$cou=0;
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
       $line=trim($line);
       if($cou==0){
           $num=$line;
       }
       if ($cou==1){
           $answer=$line;
       }
       $cou++;
    }

    if (!(feof(STDIN))){
       
    }
    fclose(STDIN);
}

$patA=explode(",", "A,B,C");
$patB=explode(",", "B,A,B,C");
$patC=explode(",", "C,C,A,A,B,B");

$counter["Adrian"]=repeatLoops ($patA, $num, $answer);
$counter["Bruno"]=repeatLoops ($patB, $num, $answer);
$counter["Goran"]=repeatLoops ($patC, $num, $answer);

$most_correct=array_keys($counter, max($counter));
echo max($counter)."\r\n";
foreach ($most_correct as $person){
    echo $person."\r\n";
}

function repeatLoops ($pattern, $num, $answer){ 
$repeat=ceil($num/count($pattern));
$count=0;
    
    for ($i=0; $i<$repeat; $i++){
        for ($j=0; $j<count($pattern); $j++){
            $output[]=$pattern[$j];
        }
    };

    for ($m=0; $m<$num; $m++){
        if ($answer[$m]==$output[$m]){
            $count+=1;
        }
    }
    
    return $count;
}
