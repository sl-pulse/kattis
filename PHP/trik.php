<?php
//https://open.kattis.com/problems/trik
//Running Time: 0.01s

if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
          $input = str_split(trim($line));
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
$ball=array(1,2,3);
$length=count($input);
for ($i=0; $i<$length; $i++){
    $case=$input[$i];
    if ($case=="A"){
       $temp=$ball[0];
       $ball[0]=$ball[1];
       $ball[1]=$temp;
    }
    else if ($case=="B"){
       $temp=$ball[1];
       $ball[1]=$ball[2];
       $ball[2]=$temp;
    }
    else if ($case=="C"){
       $temp=$ball[0];
       $ball[0]=$ball[2];
       $ball[2]=$temp; 
    }
}

print_r(array_search(1, $ball)+1);
