<?php 

if (!function_exists("getGrade")) {
    function getGrade($perct){
        switch($perct){
            case $perct >= 90:
                echo "A+";
                break;
            case $perct >= 80:
                echo "A";
                break;
            case $perct >= 70:
                echo "B+";
                break;
            case $perct >= 60:
                echo "B";
                break;
            case $perct >= 50:
                echo "C+";
                break;
            case $perct >= 40:
                echo "C";
                break;
            case $perct >= 35:
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