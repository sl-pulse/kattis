<?php
//https://open.kattis.com/problems/armystrengthhard
//Running Time: 0.04s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $input[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
array_shift($input);
$x=-1;
foreach ($input as $key => $value){
    if ($value==""){
        $x++;
    }
    else{
        $arr[$x][]=$value;
    }
}

for ($i=0; $i<count($arr); $i++){
    $godzilla=explode(" ",$arr[$i][1]);
    $mechagodzilla=explode(" ",$arr[$i][2]);
    
        if (max($mechagodzilla)>max($godzilla) ){
              echo "Mechagodzilla\n";
        }
        else {
             echo "Godzilla\n";
        }             
}
 
