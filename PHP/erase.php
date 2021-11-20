<?php
//https://open.kattis.com/problems/erase
//Running Time: 0.01s
$counter=0;
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
       $line=trim($line);
       if($counter==0){
           $rewrite=$line;
       }
       if ($counter==1){
           $before=$line;
       }
       if ($counter==2){
           $after=$line;
       }
       $counter++;
    }
    checkDel($rewrite, $before, $after);
    if (!(feof(STDIN))){
       
    }
    fclose(STDIN);
}

function checkDel($rewrite, $before, $after){
    $new=$before;
   if ($rewrite%2!=0){
       $new=  str_replace('1', 'l', $new);
       $new=  str_replace('0', '1', $new);
       $new=  str_replace('l', '0', $new);
   }
   if ($after===$new){
       echo "Deletion succeeded\n";
   }
   else {
       echo "Deletion failed\n";
   }
}
