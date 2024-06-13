<html lang="en" dir="ltr">
  <head>
        <!-- Meta data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="" name="description">
        <meta content="" name="author">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/allwell-vector-favicon.png" />
        <title>Rice Dealing | ERP Cloud App</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
        <link href="<?php echo base_url();?>assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/color-styles.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/plugins/iconfonts/plugin.css" rel="stylesheet" />

    </head>
    <body>
        <div class="page custom-pages" style="background-image:url(assets/images/bg/); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col  mx-auto">
                        <div class="text-center mb-6">
                            <img src="<?php echo base_url();?>assets/images/brand/" class="" alt="" height="150">
                        </div>
                        <div class="row justify-content-center" style="opacity: 0.9">
                            <div class="col-md-5">
                                <div class="card-group mb-0">
                                    <div class="card p-4">
                                        <div class="card-body">
<form method="post" action="<?php echo site_url('validating'); ?>">
                                            
                                            <div class="form-group">
                                                <label class="form-label text-left" for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" id="email_address"  placeholder="Enter Email Address">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="text-left form-label">Password</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                                            </div>
                                            
                                            <div class="text-left">
                                                <button type="submit" class="btn btn-lime"><i class="fe fe-power text-white"></i> Login</button>
                                                <button type="submit" class="btn btn-secondary" style="float: right;"><i class="fe fe-user-plus text-white"></i> Staff Registration</button>
                                            </div>
</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard js -->
        <script src="<?php echo base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendors/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendors/selectize.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendors/jquery.tablesorter.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendors/circle-progress.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery.rating/jquery.rating-stars.js"></script>

        <!--Bootstrap.min js-->
        <script src="<?php echo base_url();?>assets/plugins/bootstrap/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Custom scroll bar js-->
        <script src="<?php echo base_url();?>assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

        <!--Peitychart js-->
        <script src="<?php echo base_url();?>assets/plugins/peitychart/jquery.peity.min.js"></script>

        <!--Counters js-->
        <script src="<?php echo base_url();?>assets/plugins/counters/counterup.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/counters/waypoints.min.js"></script>

        <!-- Custom js -->
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>

    </body>
</html>