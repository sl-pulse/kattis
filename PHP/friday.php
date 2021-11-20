<?php
//https://open.kattis.com/problems/friday
//Running Time: 0.01s
$counter=0;
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
       $line=trim($line);
       if ($counter!=0 && $counter%2!=0){
           $input=  explode(" ", $line);
           $no_of_months=$input[1];
       }
       if ($counter!=0 && $counter%2==0){
           $days_in_month=  explode(" ", $line);
           getBFriday($no_of_months, $days_in_month);
       }
       $counter++;
    }
    if (!(feof(STDIN))){
       
    }
    fclose(STDIN);
}
function getBFriday ($tMonths, $monthArr){
    $count=0;
    $lucky=0;
    for ($i=0; $i<$tMonths; $i++){
        if ($monthArr[$i]>=13){
            $thirteen=($count+13)%7;
            if ($thirteen==6){
            $lucky++;
            }
        }
        $count+=$monthArr[$i];
    }
    echo $lucky."\n";
}
