<?php
//https://open.kattis.com/problems/sidewayssorting
//Running Time: 0.01s
if (STDIN){
    while(($in=fgets(STDIN)) != FALSE){
          $lines[] = trim($in);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}

for ($i=0; $i<count($lines); $i++){
    $line=$lines[$i];
    $pos=strpos($line, ' '); 
    if ($pos !== false) {
        $counter=0;
        if (isset($column)){
            asort ($column);
            for($m=0; $m<$noR; $m++){
                foreach ($column as $key=>$value){
                print_r ($row[$m][$key]);
                }
                echo "\r\n";
            }
            unset ($column);
            echo "\r\n";
        }       
        $noC=substr($line,$pos+1);
        $noR=substr($line,0, $pos);

    }
    else {
        $lineArr=str_split($line);
        for ($j=0; $j<$noC; $j++){
            if (!isset($column[$j])){
                $column[$j]=strtolower($lineArr[$j]);       
            }
            else $column[$j].=strtolower($lineArr[$j]); 
            $row[$counter][$j]=$lineArr[$j];
        }
        $counter++;
    }

}
