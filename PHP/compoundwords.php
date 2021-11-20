<?php
//https://open.kattis.com/problems/compoundwords
//Running Time: 0.01s
if (STDIN) {
    while (($line = fgets(STDIN, 4096)) !== false) {
        $input=explode(" ", trim($line));
        foreach ($input as $in){
            $word[]=$in;
        }
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}

foreach ($word as $wordA){
    foreach ($word as $wordB){
        if ($wordA !== $wordB){
        $output[]=$wordA.$wordB;
        }
    }
}

$res=array_unique($output);
sort ($res);
foreach ($res as $o){
    echo $o."\r\n";
}
