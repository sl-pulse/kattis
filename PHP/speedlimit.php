<?php
//https://open.kattis.com/problems/speedlimit
//Running Time: 0.01s
$set_counter=0;
$speed=array();
$lapsed_time=array();
$distance=array();

if (STDIN) {
    while (($line = fgets(STDIN, 4096)) !== false) {
//if input is a single number and not equal to -1
     if((preg_match('/^[0-9]*$/',$line))){ 
         
         if (count($speed)!==0){
             for ($i=0; $i<count($speed); $i++){
                if ($i==0)
                {                
                    $distance[]=$speed[$i]*$lapsed_time[$i];
                 }
                else
                { 
                    $j=$i-1;
                    $time=$lapsed_time[$i]-$lapsed_time[$j];
                    $distance[]=$speed[$i]*$time;
                }
             }//end of i loop
            
             $output[]=  array_sum($distance);
            //empty array speed, array lapsed time and array distance
             $speed=array();
             $distance=array();
             $lapsed_time=array();
             }//end of if speed is not null
                  $set_counter++;        
         }
        else if ((int)$line ==-1){
            
             for ($i=0; $i<count($speed); $i++){
                if ($i==0)
                {                
                    $distance[]=$speed[$i]*$lapsed_time[$i];
                 }
                else
                { 
                    $j=$i-1;
                    $time=$lapsed_time[$i]-$lapsed_time[$j];
                    $distance[]=$speed[$i]*$time;
                }
             }//end of i loop                    
             $output[]=  array_sum($distance);
        }
        else if ((int)$line != -1){
            $temp=explode(" ", $line);
            array_push($speed,$temp[0]);
            array_push($lapsed_time,$temp[1]);
        }
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}
foreach($output as $out) {
    printf ($out ." miles\n");
}
