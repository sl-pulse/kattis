<?php
//https://open.kattis.com/problems/snapperhard
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
           $input[]=$line;
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
$counter=1;
array_shift($input);
for ($i=0; $i<count($input); $i++){
    $array=explode(" ", $input[$i]);
           if (count($array)==2){
           $turn=pow(2, $array[0]);
               if (($array[1]+1)%($turn)==0){
                    echo "Case #".$counter.": ON\n";
                }
                else {
                    echo "Case #".$counter.": OFF\n";
                }
                $counter++;
           }
}
  
