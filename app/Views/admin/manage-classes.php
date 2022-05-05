<?php $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-md-6">
            <h2 class="title">Manage Classes</h2>

        </div>

        <!-- /.col-md-6 text-right -->
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
        <div class="col-md-6">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li> Classes</li>
                <li class="active">Manage Classes</li>
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
                Create Student Class
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
                                        <h5>Create Student Class
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </h5>
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

                                    <form method="post" id="classes_form">
                                        <div class="form-group has-success">
                                            <label for="success" class="control-label">Class Name</label>
                                            <div class="">
                                                <input type="text" name="classname" class="form-control" required="required" id="success">
                                                <span class="help-block">Eg- Third, Fouth,Sixth etc</span>
                                                <span id="classname_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="success" class="control-label">Class Name in Numeric</label>
                                            <div class="">
                                                <input type="number" name="classnamenumeric" required="required" class="form-control" id="success">
                                                <span class="help-block">Eg- 1,2,4,5 etc</span>
                                                <span id="classnamenumeric_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="success" class="control-label">Section/Faculties</label>
                                            <div class="">
                                                <input type="text" name="section" class="form-control" id="success">
                                                <span class="help-block">Eg- A,B,C etc</span>
                                                <span id="section_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group has-success">

                                            <div class="">
                                                <input type="hidden" name="hidden_id" id="hidden_id" />
                                                <input type="hidden" name="action" id="action" value="Add" />
                                                <button id="submit_button" type="submit" name="submit" class="btn btn-success btn-labeled">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
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
                            <h5>View Classes Info</h5>
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
                    <div class="panel-body p-20">

                        <table id="classTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Class Name</th>
                                    <th>Class Name Numeric</th>
                                    <th>Section/Faculties</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Class Name</th>
                                    <th>Class Name Numeric</th>
                                    <th>Section/Faculties</th>
                                    <th>Creation Date</th>
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
                                            <td><?php echo htmlentities($cnt['ClassName']); ?></td>
                                            <td><?php echo htmlentities($cnt['ClassNameNumeric']); ?></td>
                                            <td><?php echo htmlentities($cnt['Section']); ?></td>
                                            <td><?php echo htmlentities($cnt['CreationDate']); ?></td>
                                            <td>
                                                <button class="btn btn-info class-edit" data-id="<?php echo htmlentities($cnt['id']); ?>"><i class="fa fa-edit" title="Edit Record"></i> </button>

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