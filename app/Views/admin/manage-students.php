<?php $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-md-6">
            <h2 class="title">Manage Students</h2>

        </div>

        <!-- /.col-md-6 text-right -->
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
        <div class="col-md-6">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li> Classes</li>
                <li class="active">Manage Students</li>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentModal">
                Create Student
            </button>
            <label class="btn btn-outline-primary" for="btn-check-outlined"></label>
        <table align="left" cellpadding="5">
            <tr>
                <td>File <font color=blue>(Upload .csv or .xlsx file)</font> :</td>
                <td><input type="file" size="40px" name="upload_filename" id="upload_filename" /></td>
                <td colspan="5" align="center">
                    <input type="submit" id="btn_submit_file_upload" value="Import File" />
                </td>
            </tr>
        </table>
        </p>

        <!-- Modal -->
        <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="form-horizontal" method="post" id="students_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Student</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fullanme" class="form-control" id="fullanme"
                                        required="required" autocomplete="off">
                                    <span id="fullanme_error" class="text-danger"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Symbol No</label>
                                <div class="col-sm-10">
                                    <input type="text" name="rollid" class="form-control" id="rollid" maxlength="5"
                                        required="required" autocomplete="off">
                                    <span id="rollid_error" class="text-danger"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Email id</label>
                                <div class="col-sm-10">
                                    <input type="email" name="emailid" class="form-control" id="email"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="gender" value="Male" required="required" checked="">Male
                                    <input type="radio" name="gender" value="Female" required="required">Female
                                    <input type="radio" name="gender" value="Other" required="required">Other
                                    <span id="gender_error" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Class</label>
                                <div class="col-sm-10">
                                    <select name="class" class="form-control" id="default" required="required">
                                        <option value="">Select Class</option>
                                        <?php
                                                    if (isset($classes)) {
                                                        foreach ($classes as $cnt) {
                                                            print "<option value='" . $cnt['id'] . "'>" . $cnt['ClassName'] . " Section-" . $cnt['Section'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                    </select>
                                    <span id="class_error" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-2 control-label">DOB</label>
                                <div class="col-sm-10">
                                    <input type="date" name="dob" class="form-control" id="date">
                                    <span id="dob_error" class="text-danger"></span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                            <input type="hidden" name="action" id="action" value="Add" />
                            <button id="submit_button" type="submit" name="submit" class="btn btn-primary">Add</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                        <!-- /.row -->
                    </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="row">
            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5>View Students Info</h5>
                        </div>
                    </div>

                    <div class="panel-body p-20">

                        <table id="studentTable" class="display table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Roll Id</th>
                                    <th>Class</th>
                                    <th>Subjects</th>
                                    <th>Reg Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Roll Id</th>
                                    <th>Class</th>
                                    <th>Subjects</th>
                                    <th>Reg Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                if (isset($content)) :
                                    $i = 1;
                                    foreach ($content as $cnt) :
                                ?>
                                <tr>
                                    <td><?php echo htmlentities($i); ?></td>
                                    <td><?php echo htmlentities($cnt['StudentName']); ?></td>
                                    <td><?php echo htmlentities($cnt['RollId']); ?></td>
                                    <td><?php echo htmlentities($cnt['ClassName']); ?>(<?php echo htmlentities($cnt['Section']); ?>)
                                    </td>
                                    <td>
                                        <?php if(isset($cnt['ClassName'])){
                                                    foreach($subjectcombinations as $subcom){
                                                        if($subcom['ClassId']==$cnt['ClassId']){
                                                            // print_r();
                                                            echo $subjects[$subcom['SubjectId']]['SubjectName']."<br>";
                                                            // echo $subcom['SubjectId']."<br>";
                                                        }
                                                    }
                                                } 
                                                ?>
                                    </td>
                                    <td><?php echo $cnt['RegDate']; ?></td>
                                    <td><input type="checkbox" <?= ($cnt['Status'] == 1) ? 'checked' : '' ?>
                                            class="status-student" data-id="<?= $cnt['StudentId'] ?>"
                                            title="Change Status" />
                                    </td>
                                    <td>
                                        <button class="btn btn-info student-edit"
                                            data-id="<?php echo htmlentities($cnt['StudentId']); ?>"><i
                                                class="fa fa-edit" title="Edit Record"></i> </button>

                                    </td>
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