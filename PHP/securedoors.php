<?php
//https://open.kattis.com/problems/securedoors
//Running Time: 0.01s
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $lines[] = trim($line);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}

$list=array();
for ($i=1; $i<count($lines); $i++){
    $arr=explode(" ", $lines[$i]);
    $name=$arr[1];
    if ($arr[0]=="entry"){
        $state="entered";
    }
    else $state="exited";

    if (!isset($list[$name]) && $state=="entered"){
        echo $name." ".$state."\r\n";
        $list[$name]=$state;
    }
    else if (!isset($list[$name]) && $state=="exited"){
        echo $name." ".$state." (ANOMALY)\r\n";
        $list[$name]=$state;
    }
    else if ($list[$name]==$state){
        echo $name." ".$state." (ANOMALY)\r\n";
    }
    else {
          echo $name." ".$state."\r\n";
          $list[$name]=$state;
    }
}
