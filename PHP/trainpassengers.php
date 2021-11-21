<?php
//https://open.kattis.com/problems/trainpassengers
//Running Time: 0.01s

if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $input[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}

$on_train=0;
$first=  explode(" ", $input[0]);
$capacity=$first[0];
$station=$first[1];
$element=$station-1;

for ($i=1; $i<count($input); $i++){
    $temp=explode(" ",$input[$i]);
    $off[]=$temp[0];
    $on[]=$temp[1];
    $wait[]=$temp[2];
}
if ($off[0]!=0){
    echo "impossible";
}
else if ($on[$element]!=0){
    echo "impossible";
}
else if ($wait[$element]!=0){
    echo "impossible";
}
else {
    for ($j=0; $j<count($wait); $j++){
        if ($on[$j]>$capacity){
            echo "impossible";
            break;
        }
        else if ($off[$j]>$on_train){
            echo "impossible";
            break;
        }
        else {
            $on_train-=$off[$j];
            $on_train+=$on[$j];

            if ($on_train>$capacity){
                echo "impossible";
                break;
            }
            else if ($capacity>$on_train && $wait[$j]>0){
                echo "impossible";
                break;
            }
            else if ($j==$element && $on_train!=0){          
                echo "impossible";
                break;
            }
            else if ($j==$element && $on_train==0){
                echo "possible";
                break;
            }
        }
    }
}
