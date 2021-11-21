<?php
//https://open.kattis.com/problems/symmetricorder
//Running Time: 0.01s

if (STDIN) {
    while (($line = fgets(STDIN, 4096)) !== false) {
        if(preg_match('/^\d+$/',$line)){ 
             $array[]=(int)$line; 
        }
        else{
            $array[]=$line; 
        }
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}

array_pop($array);

$j=-1;
for ($i=0; $i<count($array); $i++){
    $value=$array[$i];
    if (!is_numeric($value)){
        $arraySet[$j][]=$array[$i];
    } 
    else{
        $setSize[]=$array[$i];
        $j++;;
    }
}
  
for ($i=0; $i<count($setSize); $i++){
     $count=count($arraySet[$i]);
     $last_element=$count-1;
     $max_move=$count/2;
     for ($j=1; $j<$max_move;){
        moveElement($arraySet[$i],$j,$last_element);
        $j++;
        $last_element--;
     }
}

for ($i=0; $i<count($arraySet); $i++){
    $name="SET ".($i+1);
    array_unshift($arraySet[$i], $name);
    for ($j=0; $j<count($arraySet[$i]); $j++){
        $output[]=$arraySet[$i][$j];
    }
}

function moveElement(&$array, $a, $b) {
    $p1 = array_splice($array, $a, 1);
    $p2 = array_splice($array, 0, $b);
    $array = array_merge($p2,$p1,$array);
}   

print_r (implode("\n", $output));
