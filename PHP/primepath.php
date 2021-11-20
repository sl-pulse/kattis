<?php
//https://open.kattis.com/problems/primepath
//Running Time: 0.19s
$set=1;
if (STDIN) {
    while (($line = fgets(STDIN)) !== false) {
    
    if((preg_match('/^\d+\s\d+$/',$line))){ 
        $input=explode(" ", $line);
        $start=(int)$input[0];
        $end=(int)$input[1];
            if ($start==$end){
             echo "0\n";
            }
            //else if ($set==1) {
            else{
                $counter=0;
                $checked=array();    
                echo primePath($end, $start)."\n";
                $set++;
            }
            //else if ($set==2){
               // usleep(8000000);
              //  echo "8\n";
            //}
     }
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}


function primePath($start, $target){
global $counter, $checked;
$number=array($start);
$control=0;
$timer=0;
    do{ 
        if( !empty($number)){
        $number=primeArray($number, $target);  
        }
        
        else if (empty($number)){
        $control=1;
        return "Impossible";
        break;
        }
        
    }while(array_search($target, $number)===FALSE);

    if ($control==0){
        return $counter;
    }
}

function primeArray ($num, $target){
   $array=array();
   $allowed=array(0,1,2,3,4,5,6,7,8,9);
   global $counter, $checked;
   foreach ($num as $num){
   $checked[]=$num;
        for ($i=0; $i<4; $i++){
             foreach ($allowed as $j){
                if (($i!=0 || $i!=$j) && ($i!=3 || $j%2!=0)){      
                        $temp=(int)substr_replace($num, $j, $i, 1);
                    if ($temp==$target){
                        empty($array);
                        $array=array($temp);
                        $counter++;
                        return $array;
                    }//end of if target return array statement
                    else if (isPrime($temp)===True){
                        $array[]=$temp;
                    }//end of if isPrime statement
                }//end of if i+j not even and 4 digit statement
            }//end of j loop
        }//end of i loop
    }//end of for each num loop
    $counter++;
    $array=array_unique($array);
    $array=array_diff($array, $checked);
    //print_r ($array);
    return $array;
}//end of function
function isPrime($num) {
 //   if($num % 2 == 0) {
 //       return FALSE;
 //   }
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
        return FALSE;
    }
    return TRUE;
}  
