<?php $session = \Config\Services::session(); ?>
<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row page-title-div">
        <div class="col-md-6">
            <h2 class="title">Print Result</h2>

        </div>

        <!-- /.col-md-6 text-right -->
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
        <div class="col-md-6">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li> Result</li>
                <li class="active">Print Result</li>
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
                                <h5>Print Result</h5>
                            </div>
                        </div>
                        

                        <div class="panel-body">

                        <form action="<?= base_url(); ?>/Result/printClassResult" method="post">
                                	
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
                                      
                        </form>


                        </div>
                    </div>
                </div>
                <!-- /.col-md-8 col-md-offset-2 -->
            </div>
            <!-- /.row -->
      

        
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