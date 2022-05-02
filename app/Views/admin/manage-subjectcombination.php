<?php $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-md-6">
            <h2 class="title">Manage Subject Combination</h2>

        </div>

        <!-- /.col-md-6 text-right -->
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
        <div class="col-md-6">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li>Subjects</li>
                <li class="active">Manage Subject Combination</li>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Create Subject Combination
            </button>
        </p>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h5>Create Subject Combination</h5>
                                    </div>
                                </div>
                                <?php if ($session->getTempdata('success')) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-check"></i> Success!</h4>
                                            <?php echo $session->getTempdata('success'); ?>
                                        </div>
                                    </div>
                                <?php elseif ($session->getTempdata('error')) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-check"></i> Failed!</h4>
                                            <?php echo $session->getTempdata('error'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="panel-body">

                                    <form class="form-horizontal" method="post" id="subjectcombination_form">

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
                                            <label for="default" class="col-sm-2 control-label">Subject</label>
                                            <div class="col-sm-10">
                                                <select name="subject" class="form-control select2" id="subjectlist" required="required" style="width: 100%;">
                                                    <option value="">Select Subject</option>
                                                    <?php
                                                    if (isset($subjects)) {
                                                        foreach ($subjects as $cnt) {
                                                            print "<option value='" . $cnt['id'] . "'>" . $cnt['SubjectName'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <span id="subject_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <input type="hidden" name="hidden_id" id="hidden_id" />
                                                <input type="hidden" name="action" id="action" value="Add" />
                                                <button id="submit_button" type="submit" name="submit" class="btn btn-primary">Add</button>
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
                            <h5>View Subjects Combinations Info</h5>
                        </div>
                    </div>

                    <div class="panel-body p-20">

                        <table id="subjectcombinationTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Class and Section</th>
                                    <th>Subject </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Class and Section</th>
                                    <th>Subject </th>
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
                                <!-- <pre><?php print_r($content)?></pre> -->
                                        <tr>
                                            <td><?php echo htmlentities($i); ?></td>
                                            <td><?php echo htmlentities($cnt['ClassName']); ?>&nbsp; Section-<?php echo htmlentities($cnt['Section']); ?></td>
                                            <td><?php echo '['.htmlentities($cnt['scode']).'] '. htmlentities($cnt['SubjectName']); ?></td>
                                            <td><input type="checkbox" <?= ($cnt['status'] == 1) ? 'checked' : '' ?> class="status-sbjcmb" data-id="<?= $cnt['id'] ?>" title="Change Status" />
                                            </td>
                                            <td>
                                                <button class="btn btn-info subjectcombination-edit" data-id="<?php echo htmlentities($cnt['id']); ?>"><i class="fa fa-edit" title="Edit Record"></i> </button>

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