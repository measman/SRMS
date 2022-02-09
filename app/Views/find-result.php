<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>School Result Management System</title>
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

            <div class="login-bg-color bg-black-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>School Result Management System</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">
                                <form action="<?= base_url(); ?>/get-result" method="post">
                                	<div class="form-group">
                                		<label for="rollid">Enter your Roll Id</label>
                                        <input type="text" class="form-control" id="rollid" placeholder="Enter Your Roll Id" autocomplete="off" name="rollid">
                                	</div>
                               <div class="form-group">
                                    <label for="default" class="col-sm-2 control-label">Class</label>
                                    <select name="class" class="form-control" id="default" required="required">
                                    <option value="">Select Class</option>
                                    <?php 
                                    if( isset($classes))
                                    {
                                    foreach($classes as $class)
                                    {   ?>
                                    <option value="<?php echo htmlentities($class['id']); ?>"><?php echo htmlentities($class['ClassName']); ?>&nbsp; Section-<?php echo htmlentities($class['Section']); ?></option>
                                    <?php }} ?>
                                    </select>
                                </div>

    
                                    <div class="form-group mt-20">
                                        <div class="">                                      
                                            <button type="submit" class="btn btn-success btn-labeled pull-right">Search<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                       <div class="col-sm-6">
                                            <a href="<?= base_url(); ?>">Back to Home</a>
                                        </div>
                                </form>

                                <hr>

                            </div>
                        </div>
                        <!-- /.panel -->
                        <p class="text-muted text-center"><small>Student Result Management System</small></p>
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
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
    

    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>