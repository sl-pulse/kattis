<?php
//https://open.kattis.com/problems/cold
//Running Time: 0.01s
$new=1;
if (STDIN) {
    while (($line = fgets(STDIN)) !== false) {
   if ($new%2!=0){
   $number=$line;
   $counter=0;
   }
   else{
       $arr=explode(" ",$line);
       foreach ($arr as $temp){
           if ($temp<0){
               $counter++;
           }
       }
       echo $counter."\n";
   }
   $new++;
   }
if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}
