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
    function getGPA($perct,$refmarks){
        $actualPerct = ($perct*100)/$refmarks;
        if($perct==0){
            return 0;
        }

        switch($actualPerct){
            case $actualPerct >= 90:
                return 4.0;
                break;
            case $actualPerct >= 80:
                return 3.60;
                break;
            case $actualPerct >= 70:
                return 3.20;
                break;
            case $actualPerct >= 60:
                return 2.80;
                break;
            case $actualPerct >= 50:
                return 2.40;
                break;
            case $actualPerct >= 40:
                return 2.00;
                break;
            case $actualPerct >= 35:
                return 1.60;
                break;
            default:
                return 0;
                break;
        }
               
    }
  }

  if (!function_exists("actualCreditHour")) {
    function actualCreditHour($fm,$tch){
        return ($fm*$tch)/100;        
    }
  }