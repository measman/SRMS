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
    <link rel="stylesheet" href="<?= base_url(); ?>/css/select2/select2.min.css" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css" media="screen">
    <script src="<?= base_url(); ?>/js/modernizr/modernizr.min.js"></script>
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">
        <nav class="navbar top-navbar bg-white box-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar-header no-padding">
                        <a class="navbar-brand" href="<?= base_url(); ?>">
                            SRMS | Admin
                        </a>
                        <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
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
                            <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
                            <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>

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
                            <img src="default.png" alt="Admin" class="img-circle profile-img">
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
                                    <a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>

                                </li>

                                <li class="nav-header">
                                    <span class="">Appearance</span>
                                </li>
                                <li class="has-children">
                                    <a href="#"><i class="fa fa-file-text"></i> <span>Student Classes</span> <i class="fa fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">

                                        <li><a href="<?= base_url(); ?>/manage-classes"><i class="fa fa fa-server"></i>
                                                <span>Manage
                                                    Classes</span></a></li>

                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><i class="fa fa-file-text"></i> <span>Subjects</span> <i class="fa fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">

                                        <li><a href="<?= base_url(); ?>/manage-subjects"><i class="fa fa fa-server"></i>
                                                <span>Manage
                                                    Subjects</span></a></li>

                                        <a href="<?= base_url(); ?>/manage-subjectcombination"><i class="fa fa-newspaper-o"></i>
                                            <span>Manage Subject Combination </span></a>
                                </li>
                            </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"><i class="fa fa-users"></i> <span>Students</span> <i class="fa fa-angle-right arrow"></i></a>
                                <ul class="child-nav">

                                    <li><a href="<?= base_url(); ?>/manage-students"><i class="fa fa fa-server"></i>
                                            <span>Manage
                                                Students</span></a></li>
                                    <!-- <li><a href="<?= base_url(); ?>/manage-studentsubject"><i class="fa fa fa-server"></i>
                                            <span>Manage
                                                Students Subject</span></a></li> -->

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"><i class="fa fa-info-circle"></i> <span>Result</span> <i class="fa fa-angle-right arrow"></i></a>
                                <ul class="child-nav">

                                    <li><a href="<?= base_url(); ?>/manage-results"><i class="fa fa fa-server"></i>
                                            <span>Manage
                                                Result</span></a></li>
                                    <li><a href="<?= base_url(); ?>/print-results"><i class="fa fa fa-server"></i>
                                            <span>Print
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/js/select2/select2.min.js"></script>
    <!-- ========== THEME JS ========== -->
    <script src="<?= base_url(); ?>/js/main.js"></script>
    <script src="<?= base_url(); ?>/js/production-chart.js"></script>
    <script src="<?= base_url(); ?>/js/traffic-chart.js"></script>
    <script src="<?= base_url(); ?>/js/task-list.js"></script>

    <script>
        $(function() {

            $("#studentTable").DataTable();
            $("#classTable").DataTable();
            $("#subjectTable").DataTable();
            $("#subjectcombinationTable").DataTable();
            
            $("#resultTable").DataTable();
            var ssct = $("#studentsubjectcombinationTable").DataTable();

            $("#slcsubjectlist").select2();
            $("#subjectlist").select2({
                tags: true,
                dropdownParent: $("#exampleModal")
            });

            $("input.status-student").change(function() {
                var std_id = $(this).data('id');
                var stus = ($(this).is(':checked')) ? 1 : 0;
                // getStudentSubjectList(classid);
                $.ajax({
                    url: "<?php echo base_url('/Students/set_students_status'); ?>",
                    method: "POST",
                    data: {
                        id: std_id,
                        status: stus
                    },
                    dataType: "JSON",
                    success: function(data) {
                        toastr["success"](data.message);
                    }
                });

            });
            $("input.status-sbjcmb").change(function() {
                var sbjcmb_id = $(this).data('id');
                var stus = ($(this).is(':checked')) ? 1 : 0;
                // getStudentSubjectList(classid);
                $.ajax({
                    url: "<?php echo base_url('/SubjectCombination/set_subjectcombination_status'); ?>",
                    method: "POST",
                    data: {
                        id: sbjcmb_id,
                        status: stus
                    },
                    dataType: "JSON",
                    success: function(data) {
                        toastr["success"](data.message);
                    }
                });

            });


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


            $('#classes_form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "<?php echo base_url('/Classes/action'); ?>",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    beforeSend: function() {
                        $('#submit_button').text('Wait...');
                        $('#submit_button').attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        $('#submit_button').text('Add');
                        $('#submit_button').attr('disabled', false);
                        if (data.error == 'yes') {
                            $('#classname_error').text(data
                                .classname_error);
                            $('#classnamenumeric_error').text(data
                                .classnamenumeric_error);
                            $('#section_error').text(data
                                .section_error);
                        } else {
                            toastr["success"](data.message);
                            $('#classTable').load(location.href + " #classTable");
                        }
                    }
                });
            });
            $('#students_form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "<?php echo base_url('/Students/action'); ?>",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    beforeSend: function() {
                        $('#submit_button').text('Wait...');
                        $('#submit_button').attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        $('#submit_button').text('Add');
                        $('#submit_button').attr('disabled', false);
                        if (data.error == 'yes') {
                            $('#fullanme_error').text(data
                                .fullanme_error);
                            $('#rollid_error').text(data
                                .rollid_error);
                            $('#gender_error').text(data
                                .gender_error);
                            $('#rollid_error').text(data
                                .rollid_error);
                            $('#class_error').text(data
                                .class_error);
                            $('#dob_error').text(data
                                .dob_error);
                        } else {
                            toastr["success"](data.message);
                            $('#studentTable').load(location.href + " #studentTable");
                        }
                    }
                });
            });
            $('#subject_form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "<?php echo base_url('/Subject/action'); ?>",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    beforeSend: function() {
                        $('#submit_button').text('Wait...');
                        $('#submit_button').attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        $('#submit_button').text('Add');
                        $('#submit_button').attr('disabled', false);
                        if (data.error == 'yes') {
                            $('#subjectname_error').text(data
                                .subjectname_error);
                            $('#subjectcode_error').text(data
                                .subjectcode_error);
                            $('#fmth_error').text(data
                                .fmth_error);
                            $('#tch_error').text(data
                                .tch_error);
                        } else {
                            toastr["success"](data.message);
                            $('#subjectTable').load(location.href + " #subjectTable");
                        }
                    }
                });
            });
            $('#subjectcombination_form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "<?php echo base_url('/SubjectCombination/action'); ?>",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    beforeSend: function() {
                        $('#submit_button').text('Wait...');
                        $('#submit_button').attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        $('#submit_button').text('Add');
                        $('#submit_button').attr('disabled', false);
                        if (data.error == 'yes') {
                            $('#class_error').text(data
                                .class_error);
                            $('#subject_error').text(data
                                .subject_error);
                        } else {
                            toastr["success"](data.message);
                            $('#subjectcombinationTable').load(location.href +
                                " #subjectcombinationTable");
                        }
                    }
                });
            });
            $(document).on('click', '.class-edit', function() {
                var class_id = $(this).data('id');
                $('#exampleModal').modal('show')
                $.ajax({
                    url: "<?php echo base_url('/Classes/fetch_single_data'); ?>",
                    method: "POST",
                    data: {
                        id: class_id
                    },
                    dataType: "JSON",
                    success: function(data) {

                        $('[name="classname"]').val(data.ClassName);
                        $('[name="classnamenumeric"]').val(data.ClassNameNumeric);
                        $('[name="section"]').val(data.Section);
                        $('#classname_error').text('');
                        $('#classnamenumeric_error').text('');
                        $('#section_error').text('');
                        $('#action').val('Edit');
                        $('#submit_button').text('Edit');
                        $('#hidden_id').val(class_id);
                    }
                });
            });
            $(document).on('click', '.student-edit', function() {
                var student_id = $(this).data('id');
                $('#exampleModal').modal('show')
                $.ajax({
                    url: "<?php echo base_url('/Students/fetch_single_data'); ?>",
                    method: "POST",
                    data: {
                        id: student_id
                    },
                    dataType: "JSON",
                    success: function(data) {

                        $('[name="fullanme"]').val(data.StudentName);
                        $('[name="rollid"]').val(data.RollId);
                        $('[name="emailid"]').val(data.StudentEmail);
                        $("input[name=gender][value=" + data.Gender + "]").prop('checked',
                            true);
                        $('[name="class"]').val(data.ClassId);
                        $('[name="dob"]').val(data.DOB);
                        $('#fullanme_error').text('');
                        $('#rollid_error').text('');
                        $('#emailid_error').text('');
                        $('#gender_error').text('');
                        $('#class_error').text('');
                        $('#dob_error').text('');
                        $('#action').val('Edit');
                        $('#submit_button').text('Edit');
                        $('#hidden_id').val(student_id);
                    }
                });
            });
            $(document).on('click', '.subject-edit', function() {
                var sub_id = $(this).data('id');
                $('#exampleModal').modal('show')
                $.ajax({
                    url: "<?php echo base_url('/Subject/fetch_single_data'); ?>",
                    method: "POST",
                    data: {
                        id: sub_id
                    },
                    dataType: "JSON",
                    success: function(data) {

                        $('[name="subjectname"]').val(data.SubjectName);
                        $('[name="subjectcode"]').val(data.SubjectCode);
                        $('[name="fmth"]').val(data.fm_th);
                        $('[name="tch"]').val(data.total_cr_hr);
                        $('#subjectname_error').text('');
                        $('#subjectcode_error').text('');
                        $('#fmth_error').text('');
                        $('#tch_error').text('');
                        $('#action').val('Edit');
                        $('#submit_button').text('Edit');
                        $('#hidden_id').val(sub_id);
                    }
                });
            });
            $(document).on('click', '.subjectcombination-edit', function() {
                var sub_id = $(this).data('id');
                $('#exampleModal').modal('show')
                $.ajax({
                    url: "<?php echo base_url('/SubjectCombination/fetch_single_data'); ?>",
                    method: "POST",
                    data: {
                        id: sub_id
                    },
                    dataType: "JSON",
                    success: function(data) {

                        $('[name="class"]').val(data.ClassId);
                        $('[name="subject"]').val(data.SubjectId);
                        $('#class_error').text('');
                        $('#subject_error').text('');
                        $('#action').val('Edit');
                        $('#submit_button').text('Edit');
                        $('#hidden_id').val(sub_id);
                    }
                });
            });

            function getStudentSubjectList(classid, dt = []) {
                var ddt = dt;
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('/Students/get_students_by_class'); ?>",
                    data: {
                        id: classid
                    },
                    success: function(data) {
                        var jsn = JSON.parse(data);
                        // $("#studentid").html(data);

                        if (jsn.length != 0) {
                            $("#studentid").html('');
                            $("#studentid").append('<option>Select Student</option>');

                            $.each(jsn, function(key, data) {
                                // console.log(data.StudentId);
                                if (ddt.length > 0 && ddt[0].StudentId == data.StudentId) {
                                    $("#studentid").append('<option value="' + data
                                        .StudentId + '" selected>' + data.StudentName +
                                        '</option>');
                                } else {
                                    $("#studentid").append('<option value="' + data
                                        .StudentId + '">' + data.StudentName +
                                        '</option>');
                                }
                                // console.log(data);
                            });

                        } else {
                            $("#studentid").html('');
                            $("#subject").html('');
                        }
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('/SubjectCombination/get_subjectcombination_by_class'); ?>",
                    data: {
                        id: classid
                    },
                    success: function(data) {
                        // $("#subject").html(data);
                        var jsn = JSON.parse(data);
                        // $("#studentid").html(data);
                        //    console.log(jsn);
                        if (jsn.length > 0) {
                            $("#subject").html('');
                            console.log(jsn.length);
                            console.log(ddt.length);
                            $.each(jsn, function(key, data) {

                                if (jsn.length > 0 && ddt.length > 0) {
                                    $("#subject").append('<div class="col-md-6">' + data.SubjectName + ' (TH)<input type="text"  name="marks[]" value="' + ddt[key].marks + '" class="form-control" required="" placeholder="Enter theory marks " autocomplete="off"></div>');
                                    $("#subject").append('<div class="col-md-6">' + data.SubjectName + ' (IN)<input type="text"  name="inmarks[]" value="' + ddt[key].in_marks + '" class="form-control" required="" placeholder="Enter theory marks " autocomplete="off"></div>');
                                    console.log(key + '=>' + data.SubjectName);
                                } else {
                                    $("#subject").append('<div class="col-md-6">' + data.SubjectName + ' (TH)<input type="text"  name="marks[]" value="" class="form-control" required="" placeholder="Enter theory marks " autocomplete="off"></div>');
                                    $("#subject").append('<div class="col-md-6">' + data.SubjectName + ' (IN)<input type="text"  name="inmarks[]" value="" class="form-control" required="" placeholder="Enter internal marks " autocomplete="off"></div>');

                                }
                                // console.log(data);
                            });

                        }

                    }
                });
            }

            $("#slcresultClass").change(function() {
                var classid = $(this).val();
                getStudentSubjectList(classid);
            });
            $("#studentid").change(function() {
                var studentid = $(this).val();
                var classid = $("#slcresultClass").val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('/Result/checkStudentsResult'); ?>",
                    data: {
                        classid: classid,
                        studentid: studentid
                    },
                    success: function(data) {
                        var jsn = JSON.parse(data);
                        console.log(jsn.status);
                        if (jsn.status == 'data') {
                            $("#reslt").html('<span style="color:red"> Result Already Declare .</span>');
                            $('#submit_button').prop('disabled', true);
                        } else {
                            $("#reslt").html('');
                            $('#submit_button').prop('disabled', false);
                        }

                    }
                });
            });
            $('#result_form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "<?php echo base_url('/Result/action'); ?>",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    beforeSend: function() {
                        $('#submit_button').text('Wait...');
                        $('#submit_button').attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        $('#submit_button').text('Add');
                        $('#submit_button').attr('disabled', false);
                        if (data.error == 'yes') {
                            $('#classid_error').text(data
                                .classid_error);
                            $('#studentid_error').text(data
                                .studentid_error);
                        } else {
                            toastr["success"](data.message);
                            $('#resultTable').load(location.href +
                                " #resultTable")
                        }
                    }
                });
            });
            $('#studentsubjectcombination_form').on('submit', function(event) {
                event.preventDefault();
                // console.log($(this).serialize());
                $.ajax({
                    url: "<?php echo base_url('/StudentSubject/action'); ?>",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    beforeSend: function() {
                        $('#submit_button').text('Wait...');
                        $('#submit_button').attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        // console.log(data);
                        $('#submit_button').text('Add');
                        $('#submit_button').attr('disabled', false);
                        if (data.error == 'yes') {
                            $('#classid_error').text(data
                                .classid_error);
                            $('#studentid_error').text(data
                                .studentid_error);
                        } else {
                            toastr["success"](data.message);
                            ssct.ajax.reload();
                        }
                    }
                });
            });
            $(document).on('click', '.result-edit', function() {
                var res_id = $(this).data('id');
                $('#exampleModal').modal('show')
                $.ajax({
                    url: "<?php echo base_url('/Result/fetch_single_data'); ?>",
                    method: "POST",
                    data: {
                        id: res_id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data);
                        var classid = data[0].ClassId;
                        var stdid = data[0].StudentId;
                        $('[name="classid"]').val(classid);
                        getStudentSubjectList(classid, data);
                        $('#action').val('Edit');
                        $('#submit_button').text('Edit');
                        $('#hidden_id').html('');
                        $.each(data, function(k, d) {
                            $('#hidden_id').append('<input type="hidden" name="id[]" value="' + d.id + '"/>');
                        });

                    }
                });
            });

            $('#btn_submit_file_upload').click(function() {


                // Get the selected file
                var files = $('#upload_filename')[0].files;

                if (files.length > 0) {
                    var fd = new FormData();
                    console.log(files[0]);
                    // Append data 
                    fd.append('upload_filename', files[0]);

                    // AJAX request 
                    $.ajax({
                        url: "<?= site_url('Students/import') ?>",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            // if (response.success == 1) { // Uploaded successfully
                            //     Toast.fire({
                            //         icon: 'success',
                            //         title: response.message
                            //     });
                            // console.log(response);
                            //filedistTable.ajax.reload();
                            // $('#filepreview').attr('src', response.filepath);
                            // $('#filepreview').show();
                            // $('#afterUpload').val(response.filename);

                            // } else if (response.success == 2) { // File not uploaded
                            //     Toast.fire({
                            //         icon: 'error',
                            //         title: response.message
                            //     });
                            // } else {
                            // Display Error
                            // $('#err_file').text(response.error);
                            // $('#err_file').removeClass('d-none');
                            // $('#err_file').addClass('d-block');
                            // }
                        },
                        error: function(response) {
                            console.log("error : " + JSON.stringify(response));
                        }
                    });
                } else {
                    alert("Please select a file.");
                }

            });



        });
    </script>
</body>

</html>