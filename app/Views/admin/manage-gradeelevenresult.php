<?php $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-md-6">
            <h2 class="title">Manage Grade 11 Result</h2>

        </div>

        <!-- /.col-md-6 text-right -->
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
        <div class="col-md-6">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li> Classes</li>
                <li class="active">Manage Grade 11 Result</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

<section class="section">
    <div class="container-fluid">
        <p>
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentModal">
                Create Student
            </button>
            <label class="btn btn-outline-primary" for="btn-check-outlined"></label> -->
        <table align="left" cellpadding="5">
            <tr>
                <td>File <font color=blue>(Upload .csv or .xlsx file)</font> :</td>
                <td><input type="file" size="40px" name="grdelv" id="grdelv" /></td>
                <td colspan="5" align="center">
                    <input type="submit" id="btn_submit_grdelv_upload" value="Import File" />
                </td>
            </tr>
        </table>
        </p>

        

        <div class="row">
            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5>View Grade 11 Result Info</h5>
                        </div>
                    </div>

                    <div class="panel-body p-20">

                        <table id="gradeElevenResultTable" class="display table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Regetration No</th>
                                    <th>Year</th>
                                    <th>School</th>
                                    <th>Program</th>
                                    <th>First Name</th>
                                    <th>Mid Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Exam Roll No</th>
                                    <th>Subjects</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Regetration No</th>
                                    <th>Year</th>
                                    <th>School</th>
                                    <th>Program</th>
                                    <th>First Name</th>
                                    <th>Mid Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Exam Roll No</th>
                                    <th>Subjects</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                if (isset($gradeelevenresultmodel)) :
                                    $i = 1;
                                    foreach ($gradeelevenresultmodel as $cnt) :
                                ?>
                                <tr>
                                    <td><?php echo htmlentities($i); ?></td>
                                    <td><?php echo htmlentities($cnt['reg_no']); ?></td>
                                    <td><?php echo htmlentities($cnt['year']); ?></td>
                                    <td><?php echo htmlentities($cnt['school']); ?></td>
                                    <td><?php echo htmlentities($cnt['program']); ?></td>
                                    <td><?php echo htmlentities($cnt['first_name']); ?></td>
                                    <td><?php echo htmlentities($cnt['mid_name']); ?></td>
                                    <td><?php echo htmlentities($cnt['last_name']); ?></td>
                                    <td><?php echo htmlentities($cnt['gender']); ?></td>
                                    <td><?php echo htmlentities($cnt['dob']); ?></td>
                                    <td><?php echo htmlentities($cnt['father_name']); ?></td>
                                    <td><?php echo htmlentities($cnt['mother_name']); ?></td>
                                    <td><?php echo htmlentities($cnt['exam_roll_no']); ?></td>
                                    <td><?php echo htmlentities($cnt['registered_sub']); ?></td>
                                    <!-- <td>
                                        <?php //if(isset($cnt['ClassName'])){
                                                    //foreach($subjectcombinations as $subcom){
                                                        //if($subcom['ClassId']==$cnt['ClassId']){
                                                            // print_r();
                                                            //echo $subjects[$subcom['SubjectId']]['SubjectName']."<br>";
                                                            // echo $subcom['SubjectId']."<br>";
                                                        //}
                                                    //}
                                                //} 
                                                ?>
                                    </td>
                                    <td><?php //echo $cnt['RegDate']; ?></td>
                                    <td><input type="checkbox" 
                                            class="status-student" data-id=""
                                            title="Change Status" />
                                    </td>
                                    <td>
                                        <button class="btn btn-info student-edit"
                                            data-id="<?php //echo htmlentities($cnt['StudentId']); ?>"><i
                                                class="fa fa-edit" title="Edit Record"></i> </button>

                                    </td> -->
                                </tr>
                                <?php
                                        $i++;
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                        <pre>

                        </pre>


                        <!-- /.col-md-12 -->
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->


        </div>
        <!-- /.col-md-12 -->
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


<?= $this->endSection() ?>