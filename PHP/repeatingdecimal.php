<?php
//https://open.kattis.com/problems/repeatingdecimal
//Running Time: 0.05s
if (STDIN){
   while (fscanf(STDIN, "%d%d%d", $a, $b, $c) == 3) {
        $rem=$a%$b;
        $i=0;
        while ($i<$c){
            $rem=$rem*10;
            $res[$i++]=(int)($rem/$b);
            $rem=$rem%$b;
            if ($rem===0){
                break;
            }
        }
        $result=implode("",$res);
        echo "0.";
        echo str_pad($result, $c, "0");
        echo "\r\n";
        unset($res);
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
