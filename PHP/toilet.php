<?php
//https://open.kattis.com/problems/toilet
//Running Time: 0.01s
  
while (fscanf(STDIN, '%s', $line)){
    $line=  trim($line);
    changeToilet($line);
}

function changeToilet($line){
    $length=  strlen($line);
    $arr=  str_split($line);
    $up=0;
    $down=0;
    $preferred=0;
    $initate=0;
  
    for ($i=0; $i<$length; $i++){
        if ($i!=$length-1 && $arr[$i]!=$arr[$i+1]){
                $preferred+=1;        
        }
        if ($i===0 && $arr[$i]!=$arr[$i+1]){
            if ($arr[$i]==="U"){
                $down+=1;
            }
            if ($arr[$i]==="D"){
                $up+=1;
            }
            $initate=1;
        }
        else if ($i===1 && $initate===0){
            if ($arr[$i]==="U"){
                $down+=1;
            }
            if ($arr[$i]==="D"){
                $up+=1;
            }
        }
        else if(($i>1) ||($i===1 && $initate===1)){
            if ($arr[$i]==="U"){
                $down+=2;
            }
            if ($arr[$i]==="D"){
                $up+=2;
            }
        }    

    }
  
echo $up."\n";
echo $down."\n";
echo $preferred."\n";

}
