<?php
//https://open.kattis.com/problems/simon
//Running Time: 0.01s
$simon="^\bsimon says \b";
if (STDIN) {
    //read standard input line by line
    while (($line = fgets(STDIN)) !== FALSE) {
           if (preg_match("/".$simon."[a-zA-Z ]*/i", $line)==TRUE){
               $new=preg_replace("/".$simon."/i",'', $line);
               echo $new."\n";
           }
}
if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}
