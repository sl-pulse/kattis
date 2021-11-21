<?php
//https://open.kattis.com/problems/easiest
//Running Time: 0.01s
  
if (STDIN) {
    while (($line = fgets(STDIN, 1028)) !== false) {
            $array[]=(int)$line; 
    }
    if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}


for ($i=0; $i<count($array); $i++){
  $number=$array[$i];
  $n_split=str_split($number);
  $answer=0;
  $p=11;
   while ($answer==0 && $number !=0){
       $product_pn=$number*$p;
       $array_pn=  str_split($product_pn);
       if(array_sum($n_split)== array_sum($array_pn)){
          $product_pn=$number*$p;
       $array_pn=  str_split($product_pn);$answer=$p;
          $answer_array[]=$p;
      }
      else{
      $p++;
      }
  }
  if ($number == 0)  {
      $answer_array[]="";
  }
  
}
print_r (implode("\n", $answer_array));
    
