<?php
//https://open.kattis.com/problems/palindromesubstring
//Running Time: 0.34s
if (STDIN){
    while(($in=fgets(STDIN)) != FALSE){
          $str= trim($in);
          $wordlength=strlen($str);
          for ($i=1; $i<$wordlength; $i++){
                $right=($wordlength-$i)*-1;
                        $partA=substr($str, 0, $i);
                        $partB=substr($str, $right);
                        $partC=substr($str, $i+1, $wordlength);
                            
                        $flipA=strrev($partA);
                        
                        $ref1=(strlen($partA)>strlen($partB))?strlen($partB):strlen($partA);
                        $temp1="";
                        for ($j=0; $j<$ref1;){
                            if ($flipA[$j]===$partB[$j]){
                                $temp1=$flipA[$j].$temp1.$partB[$j];
                                $sub[]=$temp1;
                                $j++;
                            }
                            else break;
                        }
                        $temp2=$str[$i];
                        $ref2=(strlen($partA)>strlen($partC))?strlen($partC):strlen($partA);
                        for ($k=0; $k<$ref2;){
                            if ($flipA[$k]===$partC[$k]){
                                $temp2=$flipA[$k].$temp2.$partC[$k];
                                $sub[]=$temp2;
                                $k++;
                            }
                            else break;
                        }
            }
            if (isset ($sub)){
                $output=array_keys(array_flip($sub));
                sort($output);
                echo implode("\r\n",$output);
                echo "\r\n\r\n";
                unset($sub);
            }
    }
    if (!(feof(STDIN))){       
    }
    fclose(STDIN);
}
