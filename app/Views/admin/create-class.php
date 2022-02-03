<?php $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-md-6">
            <h2 class="title">Create Student Class</h2>
        </div>

    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
        <div class="col-md-6">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#">Classes</a></li>
                <li class="active">Create Class</li>
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

                    <?php echo form_open();?>
                            <div class="form-group has-success">
                                <label for="success" class="control-label">Class Name</label>
                                <div class="">
                                    <input type="text" name="classname" class="form-control" required="required"
                                        id="success">
                                    <span class="help-block">Eg- Third, Fouth,Sixth etc</span>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label for="success" class="control-label">Class Name in Numeric</label>
                                <div class="">
                                    <input type="number" name="classnamenumeric" required="required"
                                        class="form-control" id="success">
                                    <span class="help-block">Eg- 1,2,4,5 etc</span>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label for="success" class="control-label">Section</label>
                                <div class="">
                                    <input type="text" name="section" class="form-control" required="required"
                                        id="success">
                                    <span class="help-block">Eg- A,B,C etc</span>
                                </div>
                            </div>
                            <div class="form-group has-success">

                                <div class="">
                                    <button type="submit" name="submit" class="btn btn-success btn-labeled">Submit<span
                                            class="btn-label btn-label-right"><i
                                                class="fa fa-check"></i></span></button>
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
    <!-- /.container-fluid -->
</section>
<!-- /.section -->


<?= $this->endSection() ?>