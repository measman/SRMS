<?php $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-sm-6">
            <h2 class="title">Dashboard</h2>

        </div>
        <!-- /.col-sm-6 -->
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a class="dashboard-stat bg-primary" href="manage-students.php">


                    <span class="number counter"></span>
                    <span class="name">Regd Users</span>
                    <span class="bg-icon"><i class="fa fa-users"></i></span>
                </a>
                <!-- /.dashboard-stat -->
            </div>
            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a class="dashboard-stat bg-danger" href="manage-subjects.php">

                    <span class="number counter"></span>
                    <span class="name">Subjects Listed</span>
                    <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                </a>
                <!-- /.dashboard-stat -->
            </div>
            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:1%;">
                <a class="dashboard-stat bg-warning" href="manage-classes.php">

                    <span class="number counter"></span>
                    <span class="name">Total classes listed</span>
                    <span class="bg-icon"><i class="fa fa-bank"></i></span>
                </a>
                <!-- /.dashboard-stat -->
            </div>
            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:1%">
                <a class="dashboard-stat bg-success" href="manage-results.php">


                    <span class="number counter"></span>
                    <span class="name">Results Declared</span>
                    <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                </a>
                <!-- /.dashboard-stat -->
            </div>
            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.section -->


<?= $this->endSection() ?>