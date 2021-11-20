<?php
//https://open.kattis.com/problems/rimski
//Running Time: 0.01s
$int="0,I,II,III,IV,V,VI,VII,VIII,IX";
$ten="0,X,XX,XXX,XL,L,LX,LXX,LXXX,XC";
$intArr=explode(",",$int);
$tenArr=explode(",",$ten);

for ($i=1; $i<100; $i++){
    if($i/10<1){    
        $number=$intArr[$i];
    }
    else {
        $a=floor($i/10);
        $b=$i%10;
        if ($b>0){
        $number=$tenArr[$a].$intArr[$b];
        }
    else $input=$tenArr[$a];
    }
$base[$i]=$number;
}

while (fscanf(STDIN, '%s', $input)==1){
    $characters = str_split($input);//create array characters containing all alaphbets in input
    $permutations = array();
    $output=10000;
    //function to return permutations array containing all possible permutations from the list of alaphbets in characters
    string_getpermutations("", $characters, $permutations);

    //for each permutation check if it exists in array-base
    //if it does, calculate key which is the conventional number of the roman numerical
    //if key is smaller than output assign key as output
    foreach ($permutations as $perm){
        if (in_array($perm, $base)){
            $key = array_search($perm, $base); 
            if ($key<$output){
                $output=$key;
            }
        }
    }
    print_r ($base[$output]);
}

function string_getpermutations($prefix, $characters, &$permutations)
{
    if (count($characters) == 1)
        $permutations[] = $prefix . array_pop($characters);
    else
    {
        for ($i = 0; $i < count($characters); $i++)
        {
            $tmp = $characters;
            unset($tmp[$i]);
            string_getpermutations($prefix . $characters[$i], array_values($tmp), $permutations);
        }
    }
}
