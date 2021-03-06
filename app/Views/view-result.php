<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Management System</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/toastr/toastr.min.css" media="screen">

    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css" media="screen">
    <script src="<?= base_url(); ?>/js/modernizr/modernizr.min.js"></script>
</head>

<body>
    <div class="main-wrapper">
        <div class="content-wrapper">
            <div class="content-container">
                <!-- /.left-sidebar -->
                <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                
                                <h2 class="title text-center">Result Management System</h2>
                                
                            </div>
                            <div class="col-md-3"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" OnClick="CallPrint(this.value)"></i></div>
                            
                        </div>
                        <!-- /.row -->
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                    <section class="section" id="exampl">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row">
                                                    <div class="col-sm-2 border border-primary rounded"><img src="<?= base_url(); ?>/images/logo.png" alt="logo" ></div>
                                                    <div class="col-sm-8"><h3 class="text-center">CHAMUNDA SECONDARY SCHOOL </br> CHAMUNDA, DAILEKH </h3> <br> <h3 class="text-center">GRADE-SHEET</h3></div>
                                                    <div class="col-sm-2"></div>
                                                </div>
                                                <hr />
                                            </div>
                                            <div>
                                        
                                                <?php
                                                    if (isset($std)):
                                                        $i = 1;
                                                        foreach ($std as $s):
                                                ?>
                                                <p>THE GRADE(S) SECURED BY:<span style="padding: 0 20%; border-bottom: 2px dotted #000; font-size:18px; font-family:'Courier New', Courier, monospace;" ><?php echo htmlentities(strtoupper($s['StudentName'])); ?></span></p>
                                                <p>DATE OF BIRTH : <span style="padding: 0 10%; border-bottom: 2px dotted #000;" ><?php echo htmlentities($s['DOB']); ?> </span> B.S (<span style="padding: 0 10%; border-bottom: 2px dotted #000;" ><?php echo htmlentities($s['DOB']); ?></span> A.D.)</p>
                                                <p>REGISTRATION NO:<span style="padding: 0 10%; border-bottom: 2px dotted #000;" > <?php echo htmlentities($s['RegNo']); ?></span>
                                                SYMBOL NO: <span style="padding: 0 10%; border-bottom: 2px dotted #000;" ><?php echo htmlentities($s['StudentId']); ?></span> 
                                                GRADE : <span style="padding: 0 10%; border-bottom: 2px dotted #000;" ><?php echo htmlentities($s['ClassName']); ?></span></p>
                                                <p>IN THE ANNUAL EXAMINATION CONDUCTED IN ????????????????????????..??????..???????????????. B.S. (???????????????..???.???????????? A.D.) ARE GIVEN BELOW</p>
                                                    <?php
                                                        $i++;
                                                    endforeach;

                                                    ?>
                                            </div>
                                        </div>
                                            <div class="panel-body p-20">
                                                <table class="table table-hover table-bordered" width="100%">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th class="text-center">Subject Code</th>
                                                            <th class="text-center">SUBJECTS</th>
                                                            <th class="text-center">CREDIT HOUR (CH)</th>
                                                            <th class="text-center">GRADE POINT (GP)</th>
                                                            <th class="text-center">GRADE</th>
                                                            <th class="text-center">FINAL GRADE</th>
                                                            <th class="text-center">REMARKS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        // Code for result
                                                        if (isset($results) && sizeof($results)>0) :
                                                            $i = 1;
                                                            $totlcount = 0;
                                                            foreach ($results as $result) :
                                                        ?>
                                                        <tr>
                                                            <th scope="row" class="text-center">
                                                                <?php echo htmlentities($result['SubjectCode']); ?></th>
                                                            <td class="text-center">
                                                                <?php echo htmlentities($result['SubjectName']); ?></td>
                                                            <td class="text-center">
                                                                <?php echo htmlentities(round($result['total_cr_hr'],2)); ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo htmlentities(round(getGPA($result['marks'],$result['total_cr_hr'],$result['fm_th']),2)); ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo getGrade($result['marks']);?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo getGrade($result['marks']);?>
                                                            </td>
                                                            <td class="text-center">
                                                                
                                                            </td>
                                                        </tr>
			                                            <?php
                                                            $totlcount += ($result['marks'] * $result['total_cr_hr']);
                                                            $i++;
                                                        endforeach;
                                                        ?>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th scope="row" colspan="3" class="text-center">GRADE POINT AVERAGE (GPA)</th>
                                                            <td class="text-center">
                                                                  
                                                                <?php $outof = ($i - 1) * 100; ?> 
                                                                <b><?php echo htmlentities(round($totlcount/$outof,2)); ?></b> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" colspan="7" class="text-left">
                                                                EXTRA SUBJECTS
                                                            </th>
                                                        </tr>
                                                        <!-- <?php ?> for extra subjects-->
                                                        <tr>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="text-center">
                                                            </td>
                                                        </tr>
                                                <?php else: ?>
                                                <div class="alert alert-warning left-icon-alert" role="alert">
                                                    <strong>Notice!</strong> Your result not declared yet
                                                    <?php endif;?>
                                                </div>

                                                        <?php else : ?>
                                                            <div class="alert alert-danger left-icon-alert" role="alert">
                                                                <strong>Oh snap!</strong>
                                                            <?php
                                                            echo htmlentities("Invalid Roll Id");
                                                        endif;
                                                            ?>
                                                            </div>



                                                    </tbody>
                                                </table>
                                                <p><strong>PREPARED BY :................................</strong></p>
                                                <p><strong>CHECKED BY :.................................</strong></p>
                                                <p class="text-right" style="margin-bottom:0px;">...........................................................................</p>
                                                <p class="text-right"> <strong>HEAD TEACHER/CAMPUS CHIEF </strong></p>
                                                
                                                <p><strong>DATE OF ISSUE : ...................</strong></p>
                                                <hr style="border-color:black;">
                                                <p><strong>NOTE : ONE CREDIT HOUR EQUALS TO 32 WORKING HOURS. </strong></p>
                                                <p><strong>INTERNAL (IN): THIS COVERS THE PARTICIPATION, PRACTICAL PROJECT WORKS, COMMUNITY WORKS,</strong><strong>INTERNSHIP, PRESENTATIONS TERMINAL EXAMINATIONS.</strong></p>
                                                <p><strong>THEORY (TH) : THIS COVERS WRITTEN EXTERNAL EXAMINATION</strong></p>
                                                <p><strong>ABS = ABSENT </strong><strong> </strong><strong>W = WITHHELD</strong></p>
                                                <p><strong>..................................................................SECONDARY SCHOOL/CAMPUS</strong></p>
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                                
                            </div>
                            <!-- /.container-fluid -->
                    </section>
                    <!-- /.section -->
                    <div class="form-group">
                        <div class="col-sm-6">
                            <a href="index.php">Back to Home</a>
                        </div>
                    </div>
                </div>
                <!-- /.main-page -->
            </div>
            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /.main-wrapper -->
    <!-- ========== COMMON JS FILES ========== -->
    <script src="<?= base_url(); ?>/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url(); ?>/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/js/pace/pace.min.js"></script>
    <script src="<?= base_url(); ?>/js/lobipanel/lobipanel.min.js"></script>
    <script src="<?= base_url(); ?>/js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->
    <script src="<?= base_url(); ?>/js/prism/prism.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="<?= base_url(); ?>/js/main.js"></script>
    <script>
        $(function($) {

        });

        function CallPrint(strid) {
            var prtContent = document.getElementById("exampl");
            var WinPrint = window.open('', '', 'left=0,top=0,width=900,height=900,toolbar=0,scrollbars=0,status=0');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
    </script>
    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>