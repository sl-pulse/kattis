<?php
//https://open.kattis.com/problems/almostperfect
//Running Time: 0.05s
if (STDIN){
    while(($in=fgets(STDIN)) != FALSE){
            $p = trim($in);
            $d=1;
            $root=sqrt($p);
    
            for ($i=2; $i<$root; $i++){    
               if ($p%$i === 0){
                    $d+=$i+$p/$i;
                }
            }
    
            if((string)(int)$root == $root) {
                $d+=$root;
            }
    
            $output=$d-$p;

            if ($output===0){
                echo $p." perfect\r\n";
            }
            else if (abs($output)<=2){
                echo $p." almost perfect\r\n";
            }
            else
                echo $p." not perfect\r\n";
        }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
