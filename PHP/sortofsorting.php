<?php
//https://open.kattis.com/problems/sortofsorting
//Running Time: 0.25s
$counter=1;
if (STDIN) {
    while (($line = fgets(STDIN, 4096)) !== false) {
        if(preg_match('/^([A-Za-z]+)$/',$line)){ 
             $temp=substr($line, 0, 2);  
             if (empty($array)||$subarray[count($subarray)-1]<=$temp){
             $array[]=$line;
             $subarray[]=$temp; 
             }
             else if (count($subarray)==1){             
                array_unshift($array, $line);
                array_unshift($subarray, $temp);
             }
             else {
                 for ($i=0; $i<count($subarray)-1; $i++){
                     if ($temp<$subarray[$i]){
                         array_splice($array, $i, 0, $line);             
                         array_splice($subarray, $i, 0, $temp);
                         break;
                     }
                     else if ($temp<$subarray[$i+1]){
                         array_splice($array, $i+1, 0, $line);
                         array_splice($subarray, $i+1, 0, $temp);
                         break;
                     }
                  }
             }             
        }
        else{   
              if (!empty($array)){
               foreach ($array as $item ) {
               echo $item . "\n";
               }
               echo "\n";
               unset($array);
               unset($subarray);
              }
        }
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}
