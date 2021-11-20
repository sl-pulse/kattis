<?php
//https://open.kattis.com/problems/set
//Running Time: 0.01s
if (STDIN){
    while(($in=fgets(STDIN)) != FALSE){
          $lines[] = trim($in);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}


//create mutlidimensional array to store each character of card
//key of array is the card number
//card number 0 is add as spacer
$card[]=0;
foreach ($lines as $line){
    $temp=explode(" ", $line);
    foreach ($temp as $t){
        $card[]=str_split($t);
    }
}

//compare card of current and next card to create an array named output to store pattern
//key of level 1 array = reference card number
//key of level 2 array = card number in comparison with reference
//value of level 2 is pattern
for ($i=1; $i<count($card)-1; $i++){
    for ($j=$i+1; $j<count($card); $j++){
        for ($k=0; $k<4; $k++){
            if ($card[$i][$k]==$card[$j][$k] && $k==0){
                    $res[$j]="s";
            }
            else if ($card[$i][$k]==$card[$j][$k] && $k!=0){
                $res[$j].="s";
            }
            else if ($card[$i][$k]!=$card[$j][$k] && $k==0){
                 $res[$j]="d";
            }
            else $res[$j].="d";
        }
    }
    $output[$i]=$res;
    unset ($res);
}

$noset="no sets";
//find the unique patterns in each reference card array
for ($refcard=1; $refcard<count($output); $refcard++){
    $arr=array_unique($output[$refcard]);
    foreach ($arr as $pattern){
        //find the keys of the occurence of pattern
        $com_w=array_keys($output[$refcard], $pattern);
        //if the pattern has occured more than once
        if (count($com_w)>1){
            //compare any two cards of the same pattern
            //to check if the same pattern occurs when using card A as reference
            //if the same pattern occurs as the next level
            //that means all three cards have the same pattern
            //and can form a set
            for ($n=0; $n<count($com_w)-1; $n++){
                for ($o=$n+1; $o<count($com_w); $o++){
                    $nextref=$com_w[$n];
                    $testcase=$com_w[$o];
                    if ($output[$nextref][$testcase]==$pattern){
                        echo $refcard." ".$nextref." ".$testcase."\r\n";
                        unset($noset);
                    }
                }
            }
        }
    }
}

if (isset($noset)){
    echo $noset."\r\n";
}
