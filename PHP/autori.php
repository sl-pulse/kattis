<?php
//https://open.kattis.com/problems/autori
//Running Time: 0.01s
$line=trim(fgets(STDIN));
$arr=explode('-', $line);
  for ($i=0; $i<count($arr); $i++){
      $res[] = $arr[$i][0];
  }
echo implode($res);
