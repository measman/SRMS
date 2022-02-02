<!DOCTYPE html>
<html lang="en">
<?php $session = \Config\Services::session(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/prism/prism.css" media="screen">
    <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css" media="screen">
    <script src="<?= base_url(); ?>/js/modernizr/modernizr.min.js"></script>
</head>

<body class="">
    <div class="main-wrapper">

        <div class="">
            <div class="row">
                <h1 align="center">Student Result Management System</h1>

                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <section class="section">
                        <div class="row mt-40">
                            <div class="col-md-10 col-md-offset-1 pt-50">

                                <div class="row mt-30 ">
                                    <div class="col-md-11">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title text-center">
                                                    <h4>Admin Login</h4>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                            <?php echo form_open('Home/check'); ?>
                                                    <?php if (!empty($session->getTempdata('login_error'))) : ?>

                                                    <div class="alert alert-danger">
                                                        <?= $session->getTempdata('login_error'); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <div class="form-group">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 control-label">Username</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="username" class="form-control"
                                                                id="inputEmail3" placeholder="UserName">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3"
                                                            class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="password" class="form-control"
                                                                id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mt-20">
                                                        <div class="col-sm-offset-2 col-sm-10">

                                                            <button type="submit" name="login"
                                                                class="btn btn-success btn-labeled pull-right">Sign
                                                                in<span class="btn-label btn-label-right"><i
                                                                        class="fa fa-check"></i></span></button>
                                                        </div>
                                                    </div>
                                                </form>




                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                        <p class="text-muted text-center"><small>Student Result Management
                                                System</small></p>
                                    </div>
                                    <!-- /.col-md-11 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </section>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /. -->

    </div>
    <!-- /.main-wrapper -->

    <!-- ========== COMMON JS FILES ========== -->
    <script src="<?= base_url(); ?>/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= base_url(); ?>/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/js/pace/pace.min.js"></script>
    <script src="<?= base_url(); ?>/js/lobipanel/lobipanel.min.js"></script>
    <script src="<?= base_url(); ?>/js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->

    <!-- ========== THEME JS ========== -->
    <script src="<?= base_url(); ?>/js/main.js"></script>
    <script>
    $(function() {

    });
    </script>

    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>