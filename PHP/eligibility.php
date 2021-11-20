<?php
//https://open.kattis.com/problems/eligibility
//Running Time: 0.01s
if (STDIN){
    while (($line=fgets(STDIN))!=FALSE){
        if((preg_match('[^\d+$]',$line))){ 
         $number=$line;            
        }
        else{
         $arr=explode(" ",$line);
         $name=$arr[0];
         $enrol_arr=$arr[1];
         $enrol=explode("/",$enrol_arr);
         $enrol_yr=$enrol[0];
         $dob_arr=$arr[2];
         $dob=explode("/",$dob_arr);
         $dob_yr=$dob[0];
         $credit=$arr[3];
         if ($enrol_yr>=2010){
             echo $name." eligible\n";
         }
         else if ($dob_yr>=1991){
             echo $name." eligible\n";
         }
         else if ($credit>40){
             echo $name." ineligible\n";
         }
         else {
            echo $name." coach petitions\n";
         }
         }
    }
if (!feof(STDIN)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose(STDIN);
}
