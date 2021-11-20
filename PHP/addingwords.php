<?php
//https://open.kattis.com/problems/addingwords
//Running Time: 0.01s

if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
        $input[]=trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);

    

$x=array();
foreach ($input as $in){
        $arr=explode(" ",$in);
        if ($arr[0]==="clear"){
          unset($x);
        }
        if ($arr[0]==="def"){
            $x[$arr[1]]=(int)$arr[2];
        }
        if ($arr[0]==="calc"){
            $temp=0;
            $str=substr($in, 5);
            $ref=explode(" ",$str);
            array_unshift($ref,"+");
            array_pop($ref);
            
            for ($i=0; $i<count($ref);){            
                   $value=lookup($ref[$i+1],$x);
                   if ($value===Null){
                       $ans="unknown";
                       break;
                   }
                    else if ($ref[$i]==="+"){
                        $temp+=$value;
                    }
                    else if ($ref[$i]==="-"){
                        $temp-=$value;
                    }               
                    $i++;
                    $i++;
            }
            
            if (!isset($ans)){
              $ans=(array_search($temp,$x)!=FALSE)?array_search($temp,$x):"unknown";
            }
            echo $str." ".$ans."\r\n";
            unset($ans);
        }
}

function lookup($key,$x){
     if (isset ($x[$key])){
       return $x[$key];
       }
     return Null;
}
