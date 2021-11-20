<?php
//https://open.kattis.com/problems/estimatingtheareaofacircle
//Running Time: 0.01s
while (fscanf(STDIN, '%f%f%f', $r,$m,$c)){
  if ($r!=0 && $m!=0 &$c!=0){
  $circle=pow($r, 2)*pi();           
  $est=pow(2*$r, 2)*$c/$m;
  echo $circle." ".$est."\n";
  }
}
