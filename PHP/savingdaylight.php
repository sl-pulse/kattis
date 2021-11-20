<?php
//https://open.kattis.com/problems/savingdaylight
//Running Time: 0.01s
if (STDIN) {
    while (($line = fgets(STDIN, 4096)) !== false) {
        $input[]=$line;
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}

foreach ($input as $in){
    $data=explode(" ", $in);
    $date[]=$data[0]." ".$data[1]." ".$data[2]." ";
    $sunrise[]=explode(":", $data[3]);
    $sunset[]=explode(":", $data[4]);   
}

for ($j=0; $j<count($sunset); $j++){
        $diff_m=$sunset[$j][1]-$sunrise[$j][1];
        $diff_h=$sunset[$j][0]-$sunrise[$j][0];
    
    if ($diff_m>=0){
        echo $date[$j]." ".$diff_h." hours ".$diff_m." minutes\r\n";
    }
    else{
        $diff_h=$diff_h-1;
        $diff_m=60+$diff_m;
        echo $date[$j]." ".$diff_h." hours ".$diff_m." minutes\r\n";
    }
}
