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
                <?php echo htmlentities($s['StudentName']); ?></td>
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
            <?php echo htmlentities($s['StudentId']); ?></td>
            <td colspan="2">SYMBOL NO</td>
            <td colspan="2" style="font-family: 'Courier New', Courier, monospace; font-size:13px;">
            <?php echo htmlentities($s['RollId']); ?></td>
            <td colspan="1">GRADE</td>
            <td align="center"><?php echo htmlentities($s['ClassName']); ?></td>
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

    <table cellpadding="2" border="1" style="border-collapse: collapse;">
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
            <td align="center"><?php echo htmlentities($result['SubjectCode']); ?></td>
            <td align="center" colspan="5"><?php echo htmlentities($result['SubjectName']); ?></td>
            <td align="center"><?php echo htmlentities(number_format($result['total_cr_hr'], 2, '.', '')); ?></td>
            <td align="center"><?php echo htmlentities(round(getGPA($result['marks'],$result['total_cr_hr'],$result['fm_th']),2)); ?></td>
            <td align="center"><?php echo getGrade($result['marks']); ?></td>
            <td align="center"><?php echo getGrade($result['marks']); ?></td>
            <td align="center" colspan="2"></td>
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
            <tr>
                <th colspan="12" class="text-left">
                    EXTRA SUBJECTS
                </th>
            </tr>
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
</body>

</html>