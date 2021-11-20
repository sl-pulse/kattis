<?php
//https://open.kattis.com/problems/secretmessage
//Running Time: 0.01s
if (STDIN){
    while (($line=fgets(STDIN))!=FALSE){
        
        if((preg_match('/^[a-zA-Z]+/',$line))){
            $array=array();
            $newArr=array();
            $newArr[]=array();
            $out='';
            $line=trim($line, $character_mask="\n\r");
            $l=strlen($line);
            $k=ceil(sqrt($l));
            $m=pow($k,2);
            $arr=array();
            $add=$m-$l; 
            for ($j=0; $j<$add; $j++){
             $line .='*';
            }
            $temp=str_split($line, $k);
            for ($n=0; $n<$k; $n++){
                $array[]=str_split($temp[$n]);
            }
            //print_r($array);
            for ($x=0; $x<$k; $x++){
                for ($y=0; $y<$k; $y++){                   
                 $newArr[$y][$x]=$array[$x][$y]; 
                }
            }
           // print_r($newArr);echo"<br>";
            for ($z=0; $z<$k; $z++){  
                $test=$newArr[$z];
                $newArr[$z]=array_reverse($test);
                $out.=implode('',$newArr[$z]);
            }
           $output=str_replace('*', '', $out);
           echo $output."\n";
        }
    }
if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}
