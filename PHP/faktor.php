<?php
//https://open.kattis.com/problems/faktor
//Running Time: 0.01s
while (fscanf(STDIN, '%d%d', $x, $y)==2){
  $minY=$y-0.99;
  echo ceil($minY*$x);
}
