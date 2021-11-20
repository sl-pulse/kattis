<?php
//https://open.kattis.com/problems/filip
//Running Time: 0.01s
while (fscanf(STDIN, '%d%d', $x, $y)==2){
  $arrX=str_split($x);
  $arrY=str_split($y);
  $flipX=implode("",array_reverse($arrX));
  $flipY=implode("",array_reverse($arrY));
  if ($flipX>$flipY){
      echo $flipX;
  }
  else echo $flipY;
}
