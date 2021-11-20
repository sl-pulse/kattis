<?php
//https://open.kattis.com/problems/differentdistances
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

array_pop($input);
    
foreach ($input as $in){
    $data=explode(" ", $in);    
    $x1=$data[0];
    $y1=$data[1];
    $x2=$data[2];
    $y2=$data[3];
    $p=$data[4];
    $res=pow(pow(abs($x1-$x2),$p)+pow(abs($y1-$y2),$p), 1/$p);
    $res=round($res, 10);
    echo number_format( $res, 10 )."\r\n";
}
