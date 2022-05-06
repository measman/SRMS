<?php $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-md-6">
            <h2 class="title">Manage Subjects</h2>

        </div>

        <!-- /.col-md-6 text-right -->
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
        <div class="col-md-6">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li>Subjects</li>
                <li class="active">Manage Subjects</li>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subjectModal">
                Create Subjects
            </button>
        </p>
        <!-- Modal -->
        <div class="modal fade" id="subjectModal" tabindex="-1" role="dialog" aria-labelledby="subjectModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h5>Create Subjects
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </h5>
                                    </div>
                                </div>
                                

                                <div class="panel-body">

                                    <form class="form-horizontal" method="post" id="subject_form">

                                        <div class="form-group">
                                            <label for="default" class="col-sm-2 control-label">Subject Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="subjectname" class="form-control" id="subjectname" required="required" autocomplete="off">
                                                <span id="subjectname_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="default" class="col-sm-2 control-label">Subject Code</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="subjectcode" class="form-control" id="subjectcode" maxlength="5" required="required" autocomplete="off">
                                                <span id="subjectcode_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="default" class="col-sm-2 control-label">Full Marks for Theory</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="fmth" class="form-control" id="fmth" required="required" autocomplete="off">
                                                <span id="fmth_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="default" class="col-sm-2 control-label">Total Credit Hour</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tch" class="form-control" id="tch" required="required" autocomplete="off">
                                                <span id="tch_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <input type="hidden" name="hidden_id" id="hidden_id" />
                                                <input type="hidden" name="action" id="action" value="Add" />
                                                <button id="submit_button" type="submit" name="submit" class="btn btn-primary">Add</button>
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
                            <h5>View Subjects Info</h5>
                        </div>
                    </div>

                    <div class="panel-body p-20">

                        <table id="subjectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subject Name</th>
                                    <th>Subject Code</th>
                                    <th>Theory Full Marks</th>
                                    <th>Total Credit Hour</th>
                                    <th>Creation Date</th>
                                    <th>Updation Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Subject Name</th>
                                    <th>Subject Code</th>
                                    <th>Theory Full Marks</th>
                                    <th>Total Credit Hour</th>
                                    <th>Creation Date</th>
                                    <th>Updation Date</th>
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
                                            <td><?php echo htmlentities($cnt['SubjectName']); ?></td>
                                            <td><?php echo htmlentities($cnt['SubjectCode']); ?></td>
                                            <td><?php echo htmlentities($cnt['fm_th']); ?></td>
                                            <td><?php echo htmlentities($cnt['total_cr_hr']); ?></td>
                                            <td><?php echo htmlentities($cnt['Creationdate']); ?>
                                            </td>
                                            <td><?php echo $cnt['UpdationDate']; ?></td>

                                            <td>
                                                <button class="btn btn-info subject-edit" data-id="<?php echo htmlentities($cnt['id']); ?>"><i class="fa fa-edit" title="Edit Record"></i> </button>

                                            </td>
                                        </tr>
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