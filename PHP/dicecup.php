<?php
//https://open.kattis.com/problems/dicecup
//Running Time: 0.01s

$str=trim(fgets(STDIN));
$arr=explode(' ', $str);
$a=$arr[0];
$b=$arr[1];

$res=array_fill(2,$a+$b,0);
for ($i=1; $i<=$a; $i++){
    for ($j=1; $j<=$b; $j++){   
        $res[($i+$j)]+=1;
    }
}
$max=max($res);
for ($m=2; $m<count($res); $m++){
    if ($res[$m]==$max){
        echo $m."\r\n";
    }
}
