<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Result Management System | Dashboard</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/toastr/toastr.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/icheck/skins/line/blue.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/icheck/skins/line/red.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/icheck/skins/line/green.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css" media="screen">
    <script src="<?= base_url(); ?>/js/modernizr/modernizr.min.js"></script>
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">
        <nav class="navbar top-navbar bg-white box-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar-header no-padding">
                        <a class="navbar-brand" href="dashboard.php">
                            SRMS | Admin
                        </a>
                        <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <button type="button" class="navbar-toggle mobile-nav-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- /.navbar-header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i
                                        class="fa fa-user"></i></a></li>
                            <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i
                                        class="fa fa-arrows-alt"></i></a></li>

                            <li class="hidden-xs hidden-xs">
                                <!-- <a href="#">My Tasks</a> -->
                            </li>

                        </ul>
                        <!-- /.nav navbar-nav -->

                        <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">


                            <li><a href="<?php base_url() ?>/home/logout" class="color-danger text-center"><i class="fa fa-sign-out"></i>
                                    Logout</a></li>



                        </ul>
                        <!-- /.nav navbar-nav navbar-right -->
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div class="content-wrapper">
            <div class="content-container">

                <div class="left-sidebar bg-black-300 box-shadow ">
                    <div class="sidebar-content">
                        <div class="user-info closed">
                            <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe"
                                class="img-circle profile-img">
                            <h6 class="title">Admin</h6>
                            <small class="info">Administrator</small>
                        </div>
                        <!-- /.user-info -->

                        <div class="sidebar-nav">
                            <ul class="side-nav color-gray">
                                <li class="nav-header">
                                    <span class="">Main Category</span>
                                </li>
                                <li>
                                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>

                                </li>

                                <li class="nav-header">
                                    <span class="">Appearance</span>
                                </li>
                                <li class="has-children">
                                    <a href="#"><i class="fa fa-file-text"></i> <span>Student Classes</span> <i
                                            class="fa fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">
                                        <li><a href="<?= base_url(); ?>/create-class"><i class="fa fa-bars"></i> <span>Create
                                                    Class</span></a></li>
                                        <li><a href="<?= base_url(); ?>/manage-classes"><i class="fa fa fa-server"></i> <span>Manage
                                                    Classes</span></a></li>

                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><i class="fa fa-file-text"></i> <span>Subjects</span> <i
                                            class="fa fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">
                                        <li><a href="create-subject.php"><i class="fa fa-bars"></i> <span>Create
                                                    Subject</span></a></li>
                                        <li><a href="manage-subjects.php"><i class="fa fa fa-server"></i> <span>Manage
                                                    Subjects</span></a></li>
                                        <li><a href="add-subjectcombination.php"><i class="fa fa-newspaper-o"></i>
                                                <span>Add Subject Combination </span></a></li>
                                        <a href="manage-subjectcombination.php"><i class="fa fa-newspaper-o"></i>
                                            <span>Manage Subject Combination </span></a>
                                </li>
                            </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"><i class="fa fa-users"></i> <span>Students</span> <i
                                        class="fa fa-angle-right arrow"></i></a>
                                <ul class="child-nav">
                                    <li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add
                                                Students</span></a></li>
                                    <li><a href="manage-students.php"><i class="fa fa fa-server"></i> <span>Manage
                                                Students</span></a></li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"><i class="fa fa-info-circle"></i> <span>Result</span> <i
                                        class="fa fa-angle-right arrow"></i></a>
                                <ul class="child-nav">
                                    <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a>
                                    </li>
                                    <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage
                                                Result</span></a></li>

                                </ul>
                            </li>


                            <!-- <li class="has-children">
                                        <a href="#"><i class="fa fa-bell"></i> <span>Notices</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-notice.php"><i class="fa fa-bars"></i> <span>Add Notice</span></a></li>
                                            <li><a href="manage-notices.php"><i class="fa fa fa-server"></i> <span>Manage Notices</span></a></li>
                                           
                                        </ul>        </li>



                                        <li><a href="change-password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li> -->


                        </div>
                        <!-- /.sidebar-nav -->
                    </div>
                    <!-- /.sidebar-content -->
                </div>


                <div class="main-page">
                <?= $this->renderSection('content'); ?>

                </div>
                <!-- /.main-page -->


            </div>
            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->

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
    <script src="<?= base_url(); ?>/js/prism/prism.js"></script>
    <script src="<?= base_url(); ?>/js/waypoint/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/js/counterUp/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>/js/amcharts/amcharts.js"></script>
    <script src="<?= base_url(); ?>/js/amcharts/serial.js"></script>
    <script src="<?= base_url(); ?>/js/amcharts/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/js/amcharts/plugins/export/export.css" type="text/css" media="all" />
    <script src="<?= base_url(); ?>/js/amcharts/themes/light.js"></script>
    <script src="<?= base_url(); ?>/js/toastr/toastr.min.js"></script>
    <script src="<?= base_url(); ?>/js/icheck/icheck.min.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="<?= base_url(); ?>/js/main.js"></script>
    <script src="<?= base_url(); ?>/js/production-chart.js"></script>
    <script src="<?= base_url(); ?>/js/traffic-chart.js"></script>
    <script src="<?= base_url(); ?>/js/task-list.js"></script>
    <script>
    $(function() {

        // Counter for dashboard stats
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        // Welcome notification
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        // toastr["success"]("Welcome to student Result Management System!");

    });
    </script>
</body>

</html>