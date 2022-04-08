<!DOCTYPE html>
<html lang="en">

<head>

</head>


<body>

    <table cellspacing="3" cellpadding="2">
    <?php
        if (isset($std)):
            $i = 1;
            foreach ($std as $s):
    ?>
        <tr>
            <td colspan="4">THE GRADE(S) SECURED BY</td>

            <td colspan="8" align="center" style="font-family: 'Courier New', Courier, monospace; font-size:13px;">
                <?php echo htmlentities(strtoupper($s['StudentName'])); ?></td>
        </tr>
        <tr>
            <td colspan="3">DATE OF BIRTH </td>
            <td align="center" colspan="4" style="font-family: 'Courier New', Courier, monospace; font-size:13px;">
            <?php echo htmlentities($s['DOB']); ?> B.S.</td>
            <td align="center" colspan="5" style="font-family: 'Courier New', Courier, monospace; font-size:13px;">(
                <?php echo htmlentities($s['DOB']); ?> A.D. )</td>
        </tr>

        <tr>
            <td colspan="3">REGISTRATION NO</td>
            <td colspan="3" style="font-family: 'Courier New', Courier, monospace; font-size:13px;">
            <?php echo htmlentities($s['RegNo']); ?></td>
            <td colspan="2">SYMBOL NO</td>
            <td colspan="2" style="font-family: 'Courier New', Courier, monospace; font-size:13px;">
            <?php echo htmlentities($s['RollId']); ?></td>
            <td colspan="1">GRADE</td>
            <td align="center" style="font-family: 'Courier New', Courier, monospace; font-size:13px;"><?php echo htmlentities(strtoupper($s['ClassName'])); ?></td>
        </tr>
        <tr>
            <td colspan="6">IN THE ANNUAL EXAMINATION CONDUCTED IN</td>
            <td colspan="2" style="font-family: 'Courier New', Courier, monospace; font-size:13px;">
                2078 B.S.</td>
            <td colspan="3" style="font-family: 'Courier New', Courier, monospace; font-size:13px;">
                (2022 A.D.)</td>
        </tr>
        <tr>
            <td colspan="8">ARE GIVEN BELOW.</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <?php
                                                        $i++;
                                                    endforeach;
                                                endif;
                                                    ?>
    </table>

    <table cellpadding="2" border="1" >
        <tr>
            <th align="center">SUBJECT CODE</th>
            <th align="center" colspan="5">SUBJECT</th>
            <th align="center">CREDIT HOUR (CR)</th>
            <th align="center">GRADE POINT (GP)</th>
            <th align="center">GRADE</th>
            <th align="center">FINAL POINT (GP) </th>
            <th align="center" colspan="2">REMARKS</th>
        </tr>
        <?php
        // Code for result
        if (isset($results) && sizeof($results)>0) :
            $i = 1;
            $totlcount = 0;
            foreach ($results as $result) :
        ?>
        <tr>
            <td align="center" style="border-right-style:none;" ><?php echo htmlentities($result['SubjectCode']); ?></td>
            <td align="left" style="border-right-style:none" colspan="5"><?php echo htmlentities($result['SubjectName']); ?> (TH)</td>
            <?php $actualTHCreditHour = actualCreditHour($result['fm_th'],$result['total_cr_hr']);?>
            <td align="center" style="border-right-style:none"><?php echo htmlentities(number_format($actualTHCreditHour, 2, '.', '')); ?></td>
            <td align="center" style="border-right-style:none"><?php echo htmlentities(round(getGPA($result['marks'],$actualTHCreditHour,$result['fm_th']),2)); ?></td>
            <td align="center" style="border-right-style:none"><?php echo getGrade($result['marks'],$result['fm_th']); ?></td>
            <td align="center" rowspan="2" style="border-right-style:none"><?php echo getGrade($result['marks']+$result['in_marks'],100); ?></td>
            <td align="center" colspan="2" style="border-right-style:none"></td>
        </tr>
        <tr>
            <td align="center" style="border-right-style:none"><?php echo htmlentities($result['SubjectCode']); ?></td>
            <td align="left" style="border-right-style:none" colspan="5"><?php echo htmlentities($result['SubjectName']); ?> (IN)</td>
            <?php $actualINCreditHour = actualCreditHour(100-$result['fm_th'],$result['total_cr_hr']);?>
            <td align="center" style="border-right-style:none"><?php echo htmlentities(number_format($actualINCreditHour, 2, '.', '')); ?></td>
            <td align="center" style="border-right-style:none"><?php echo htmlentities(round(getGPA($result['in_marks'],$actualINCreditHour,100-$result['fm_th']),2)); ?></td>
            <td align="center" style="border-right-style:none"><?php echo getGrade($result['in_marks'],100-$result['fm_th']); ?></td>
            <td align="center" colspan="2" style="border-right-style:none;"></td>
        </tr>
        <?php
                $totlcount += ($result['marks'] * $result['total_cr_hr']);
                $i++;
                endforeach;
            endif;
            ?>
            <tr>
                                                            
                <td align="right" colspan="9"><b>GRADE POINT AVERAGE (GPA)</b></td>
                <td>                                                                  
                    <?php $outof = ($i - 1) * 100; ?> 
                    <?php echo htmlentities(round($totlcount/$outof,2)); ?>
                </td>
                <td colspan="2"></td>
            </tr>
    </table>
    <table cellpadding="2">
            <tr>
                <th colspan="12" class="text-left" >
                   <h4>EXTRA SUBJECTS</h4>
                </th>
            </tr>
            
            </table>
    <table border="1">
        <!-- <?php ?> for extra subjects-->
            <tr>
                <td align="center"></td>
                <td align="center" colspan="5"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center" colspan="2"></td>
            </tr>
        
    </table>
    <table cellspacing="3" cellpadding="2"> 
        <tr><td colspan="12"></td></tr>
    <tr>
            <td colspan="2">PREPARED BY :</td>
            <td colspan="2">.......................</td>
            <td colspan="8"></td>
        </tr>
        
        <tr>
            <td colspan="2">CHECKED BY :</td>
            <td colspan="2">.......................</td>
            <td colspan="8"></td>
        </tr>
        <tr>
            <td colspan="3">DATE OF ISSUE :</td>
            <td colspan="2">2078-02-12</td>
            <td colspan="2"></td>
            <td colspan="5" style="border-top-style:dashed;">       HEAD TEACHER/CAMPUS CHIEF</td>
        </tr>
    </table>
    <table cellspacing="3" cellpadding="2">
        <tr>
            <td colspan="12">NOTE : ONE CREDIT HOUR EQUALS TO 32 WORKING HOURS.</td>
        </tr>
        <tr>
            <td colspan="2">INTERNAL (IN):</td>
            <td colspan="10">THIS COVERS THE PARTICIPATION, PRACTICAL PROJECT WORKS, COMMUNITY WORKS, INTERNSHIP, PRESENTATIONS TERMINAL EXAMINATIONS.</td>
        </tr>
        <tr>
            <td colspan="2">THEORY (TH) :</td>
            <td colspan="10">THIS COVERS WRITTEN EXTERNAL EXAMINATION</td>
        </tr>
        <tr>
            <td colspan="4">ABS = ABSENT</td>
            <td colspan="4"></td>
            <td colspan="4">W = WITHHELD</td>
        </tr>
    </table>
</body>

</html>