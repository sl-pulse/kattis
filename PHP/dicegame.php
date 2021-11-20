<?php
//https://open.kattis.com/problems/dicegame
//Running Time: 0.01s
$counter=0;
$gunnar=array();
$emma=array();
if (STDIN){
    while(($line=fgets(STDIN)) != FALSE){
       $counter++;
       if ($counter%2!=0){    
           $gunnar=explode(" ", $line);
       }
       else {
           $emma=explode(" ",$line);
           findWinner($gunnar, $emma, $counter);
       }
       
    }
    if (!(feof(STDIN))){
        
    }
    fclose(STDIN);
}
function findWinner($gunnar, $emma, $counter){
$gun=array_sum($gunnar); 
$em=array_sum($emma);
if ($gun>$em){
    echo "Gunnar\n";
}
else if ($em>$gun){
    echo "Emma\n";
}
else {echo "Tie\n";
}
}
