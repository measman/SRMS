<?php

use App\Controllers\Students;

 $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-md-6">
            <h2 class="title">Manage Student Subject</h2>

        </div>

        <!-- /.col-md-6 text-right -->
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
        <div class="col-md-6">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li>Subjects</li>
                <li class="active">Manage Student Subject</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

<section class="section">
    <div class="container-fluid">
         <p>
            <button class="btn btn-primary" id="btn-check-outlined" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" autocomplete="off">
                Create Student Subject Combination
            </button>
            <label class="btn btn-outline-primary" for="btn-check-outlined"></label>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Create Student Subject Combination
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </h5>
                            </div>
                        </div>
                        

                        <div class="panel-body">

                            <form class="form-horizontal" method="post" id="studentsubjectcombination_form">

                                <div class="form-group">
                                    <label for="default" class="col-sm-2 control-label">Class</label>
                                    <div class="col-sm-10">
                                    <select name="class" class="form-control" id="default" required="required">
                                            <option value="">Select Class</option>
                                            <?php
                                        if (isset($classes)) {
                                            foreach ($classes as $cnt) {
                                                print "<option value='" . $cnt['id'] . "'>" . $cnt['ClassName'] . " Section-".$cnt['Section']."</option>";
                                            }
                                        }
                                    ?>
                                    </select>
                                    <span id="class_error" class="text-danger"></span>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="default" class="col-sm-2 control-label">Student</label>
                                    <div class="col-sm-10">
                                    <select name="student" class="form-control" id="default" required="required">
                                            <option value="">Select Student</option>
                                            <?php
                                        if (isset($students)) {
                                            foreach ($students as $cnt) {
                                                print "<option value='" . $cnt['StudentId'] . "'>" . $cnt['StudentName'] ."</option>";
                                            }
                                        }
                                    ?>
                                    </select>
                                    <span id="class_error" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="subjects" class="col-sm-2 control-label">Subjects</label>
                                    <div class="container">
                                        <div id="SubjectsChoice" class="row">
                                            <?php
                                                if (isset($subjects)) {
                                                    foreach ($subjects as $cnt) {
                                                        print '<div class="col-sm-2">'."<input name='subjects[]' type='checkbox' value='" . $cnt['id'] . "'>" . $cnt['SubjectName'] . "</input>"."</div>";
                                                    }
                                                }
                                            ?>
                                            <span id="subject_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="hidden" name="hidden_id" id="hidden_id" />
                                        <input type="hidden" name="action" id="action" value="Add" />
                                        <button id="submit_button" type="submit" name="submit"
                                            class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <!-- /.col-md-8 col-md-offset-2 -->
            </div>
            <!-- /.row -->
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5>View Student Subjects Combinations Info</h5>
                        </div>
                    </div>

                    <div class="panel-body p-20">

                        <table id="studentsubjectcombinationTable" class="display table table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student</th>
                                    <th>Class and Section</th>
                                    <th>Subject </th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Student</th>
                                    <th>Class and Section</th>
                                    <th>Subjects </th>
                                    
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                            if (isset($content) && isset($students)) :
                                $i = 1;
                                $currentstudent = 0;
                                $currentsubjects = array();
                                // unset($currentstudent); 
                                foreach ($content as $cnt) :
                            ?>
                            
                                <?php 
                                    if($cnt['StudentId'] !=$currentstudent) {
                                        $currentsubjects = array($cnt['SubjectName']);
                                ?>
                                <tr>
                                    <td><?php echo htmlentities($i);?></td>
                                    <td><?php echo htmlentities($cnt['StudentName'])?></td>
                                    <td><?php echo htmlentities($cnt['ClassName']);?>&nbsp; Section-<?php echo htmlentities($cnt['Section']);?></td>
                                    <td class="SubjectName"><?php echo htmlentities($cnt['SubjectName']);?></td>

                                    <td>
                                        <button class="btn btn-info studentsubjectcombination-edit"
                                            data-id="<?php echo htmlentities($cnt['id']);?>"><i class="fa fa-edit"
                                                title="Edit Record"></i> </button>

                                    </td>
                                </tr>
                                <?php
                                    $currentstudent = $cnt['StudentId'];
                               }
                                else if($cnt['StudentId'] ==$currentstudent) {
                                    array_push($currentsubjects,$cnt['SubjectName']);
                                    ?>
                                    <script>
                                        // console.log("<?php echo htmlentities($cnt['SubjectName']);?>");
                                        var subjectColumn = document.getElementsByClassName("SubjectName");
                                        // console.log(subjectColumn.length);
                                        var last = subjectColumn[subjectColumn.length- 1];
                                        var t = document.createElement('div');
                                        last.append(t);
                                        t.append("<?php echo(htmlentities($cnt['SubjectName']));?>");
                                        
                                        console.log(last);
                                    </script>
                                    <?php
                                    // print_r($currentsubjects);

                                    
                                }
                                ?>
                                <?php
                                    $i++;
                                endforeach;
                            endif;
                            ?>


                            </tbody>
                        </table>


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