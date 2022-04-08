<?php 

if (!function_exists("getGrade")) {
    function getGrade($perct,$refmarks){

        $actualPerct = ($perct*100)/$refmarks;
        if($perct==0){
            echo "NG";
            return;
        }

        switch($actualPerct){
            case $actualPerct >= 90:
                echo "A+";
                break;
            case $actualPerct >= 80:
                echo "A";
                break;
            case $actualPerct >= 70:
                echo "B+";
                break;
            case $actualPerct >= 60:
                echo "B";
                break;
            case $actualPerct >= 50:
                echo "C+";
                break;
            case $actualPerct >= 40:
                echo "C";
                break;
            case $actualPerct >= 35:
                echo "D";
                break;
            default:
                echo "NG";
                break;
        }
    }
  }

  if (!function_exists("getGPA")) {
    function getGPA($ch,$gp,$tch){
        return ($ch*$gp)/$tch;        
    }
  }

  if (!function_exists("actualCreditHour")) {
    function actualCreditHour($fm,$tch){
        return ($fm*$tch)/100;        
    }
  }