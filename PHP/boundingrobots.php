<?php
//https://open.kattis.com/problems/boundingrobots
//Running Time: 0.01s
if (STDIN) {
    while (($line = fgets(STDIN, 4096)) !== false) {
        $input[]=$line;
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}

foreach ($input as $in){
    $data=explode(" ", $in);
    if (!isset ($data[1])){
        $no_of_case[]=intval($data[0]);
    }
    else if (is_numeric($data[0])===true && intval($data[0]) != 0) { 
        $w_array[]=intval($data[0]);
        $l_array[]=intval($data[1]);    
    }
    else {
        $direction[]=$data[0];
        $move[]=intval($data[1]);   
    }
}

$counter=0;
for ($j=0; $j<count($no_of_case); $j++){
    $edge_x=$w_array[$j]-1;
    $edge_y=$l_array[$j]-1;
    
    for ($i=$counter; $i<$counter+$no_of_case[$j]; $i++){
        if ($i===$counter){
            $actual_x=$robot_x=0;
            $actual_y=$robot_y=0;
        }
        
        if ($direction[$i]==="r") {
                $robot_x+=$move[$i];
                $actual_x+=$move[$i];
                if (0>$actual_x){
                    $actual_x=0;
                }
                else if ($actual_x>$edge_x){
                    $actual_x=$edge_x;
                }
        }
        else if ($direction[$i]==="l") {
                $robot_x-=$move[$i];
                $actual_x-=$move[$i];
                if (0>$actual_x){
                    $actual_x=0;
                }
                else if ($actual_x>$edge_x){
                    $actual_x=$edge_x;
                }
        }
        else if ($direction[$i]==="u") {
                $robot_y+=$move[$i];
                $actual_y+=$move[$i];
                if (0>$actual_y){
                    $actual_y=0;
                }
                else if ($actual_y>$edge_y){
                    $actual_y=$edge_y;
                }
        }
        else if ($direction[$i]==="d") {
                $robot_y-=$move[$i];
                $actual_y-=$move[$i];
                if (0>$actual_y){
                    $actual_y=0;
                }
                else if ($actual_y>$edge_y){
                    $actual_y=$edge_y;
                }
        }       
    }
    $counter+=$no_of_case[$j];
    echo "Robot thinks ".$robot_x." ".$robot_y."\r\n";
    echo "Actually at ".$actual_x." ".$actual_y."\r\n";
    echo "\r\n";
}
