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

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5>Create Student Class</h5>
                        </div>
                    </div>
                    <?php if($session->getTempdata('success')): ?>
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Success!</h4>
                            <?php echo $session->getTempdata('success'); ?>
                        </div>
                    </div>
                    <?php elseif($session->getTempdata('error')):?>
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Failed!</h4>
                            <?php echo $session->getTempdata('error'); ?>
                        </div>
                    </div>
                    <?php endif;?>

                    <div class="panel-body">

                        <form class="form-horizontal" method="post" id="students_form">

                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fullanme" class="form-control" id="fullanme"
                                        required="required" autocomplete="off">
                                        <span id="fullanme_error" class="text-danger"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Rool Id</label>
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
                                        required="required" autocomplete="off">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="gender" value="Male" required="required" checked="">Male
                                    <input type="radio" name="gender" value="Female" required="required">Female <input
                                        type="radio" name="gender" value="Other" required="required">Other
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
                                            print "<option value='" . $cnt['id'] . "'>" . $cnt['ClassName'] . " Section-".$cnt['Section']."</option>";
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

        <div class="row">
            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5>View Students Info</h5>
                        </div>
                    </div>
                    <?php if($session->getTempdata('success')): ?>
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Success!</h4>
                            <?php echo $session->getTempdata('success'); ?>
                        </div>
                    </div>
                    <?php elseif($session->getTempdata('error')):?>
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Failed!</h4>
                            <?php echo $session->getTempdata('error'); ?>
                        </div>
                    </div>
                    <?php endif;?>
                    <div class="panel-body p-20">

                        <table id="studentTable" class="display table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Roll Id</th>
                                    <th>Class</th>
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
                                    <td><?php echo htmlentities($i);?></td>
                                    <td><?php echo htmlentities($cnt['StudentName']);?></td>
                                    <td><?php echo htmlentities($cnt['RollId']);?></td>
                                    <td><?php echo htmlentities($cnt['ClassName']);?>(<?php echo htmlentities($cnt['Section']);?>)
                                    </td>
                                    <td><?php echo htmlentities($cnt['RegDate']);?></td>
                                    <td><?php if($cnt['Status']==1){
                                                echo htmlentities('Active');
                                                }
                                                else{
                                                echo htmlentities('Blocked'); 
                                                }
                                                                ?></td>
                                    <td>
                                        <button class="btn btn-info student-edit"
                                            data-id="<?php echo htmlentities($cnt['StudentId']);?>"><i
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