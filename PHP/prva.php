<?php
//https://open.kattis.com/problems/prva
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $input[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
$rc=explode(" ",$input[0]);
$row=$rc[0];
$column=$rc[1];
$temp="";

array_shift($input);
foreach ($input as $value){
    $data[]=str_split($value);
}

for ($i=0; $i<$row; $i++){
    for ($j=0; $j<$column; $j++){
        if ($data[$i][$j] !== "#"){
            $temp .= $data[$i][$j];
        }
        if ($data[$i][$j] === "#" || $j===$column-1){
            if (strlen($temp)>=2){
            $horizontal[]=$temp;
            $temp="";
            }
            $temp="";
        }
    }
}

for ($m=0; $m<$column; $m++){
    for ($n=0; $n<$row; $n++){
        if ($data[$n][$m] !== "#"){
            $temp .= $data[$n][$m];
        }
        if ($data[$n][$m] === "#" || $n===$row-1){
            if (strlen($temp)>=2){
            $vertical[]=$temp;
            $temp="";
            }
            $temp="";
        }
    }
}


$result=array_unique(array_merge($horizontal,$vertical));
sort($result);
echo $result[0];
