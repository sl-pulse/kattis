<?php
//https://open.kattis.com/problems/anagramcounting
//Running Time: 0.02s
if (STDIN) {
    while (($line = fgets(STDIN, 4096)) !== false) {
       $input[]=trim($line);
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}

foreach ($input as $in){
    $letter=str_split($in);
    $count=array_count_values ($letter);
    foreach (array_keys($count, 1) as $key) {
        unset($count[$key]);
    }

    $numerator=implode("",factorial(strlen($in)));
    $ans=$numerator;
    
    if (!empty($count)){
        $distinct=array_keys(array_flip($count));
        foreach ($distinct as $dist){
            $fact=implode("",factorial($dist));
            $value=count(array_keys($count, $dist));
            $denominator=pow($fact,$value);
            $ans=longDivision($ans,$denominator);
        }
    } 
     echo $ans."\r\n";
}

function longDivision(&$n,$d){
    $i=0;
    $temp=intval(substr($n, 0, $i));
    while ($temp<$d){
        $temp=$temp*10+(intval(substr($n, $i,1)));
        $i++;
    }
    $ans="";
    while (strlen($n) >=$i){
        $ans.=(int)($temp/$d);
        $temp=($temp%$d)*10+(intval(substr($n, $i,1)));
        $i++;
    }
    return $ans;
}

function factorial($n){
    $res = array_fill(0, 50, NULL);
    $res[0]=1;
    $res_size=1;

    for ($x=2; $x<=$n; $x++){
        $res_size=multiply($x,$res,$res_size);
    }
    
    for ($j=$res_size-1; $j>=0; $j--){
        $k[]=$res[$j];
    }
    return $k;
}

function multiply($x,&$res,$res_size){
    $temp=0;

    for ($i=0; $i<$res_size; $i++){
        $prod=$res[$i]*$x+$temp; 
        $res[$i]=$prod%10; 
        $temp=(int)($prod/10);
    }
    
    while ($temp){
        $res[$res_size]=$temp%10;
        $temp=(int)($temp/10);
        $res_size++;
    }   
    return $res_size;
}
