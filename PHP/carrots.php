<?php
//https://open.kattis.com/problems/carrots
//Running Time: 0.01s
while (fscanf(STDIN, '%d%d', $attempt, $won) === 2) { 
    fprintf(STDOUT, '%d', $won);
}   
