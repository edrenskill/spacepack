<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>EMAC LENDING INVESTORS INC. | Staff Registration</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?php echo base_url();?>login_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>login_assets/css/vendors.css" rel="stylesheet">
    <link href="<?php echo base_url();?>login_assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>login_assets/css/custom.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row no-gutters row-height">

            <div class="col-lg-6 content-left-bg-color">
                <div class="content-left-wrapper with_gradient">
                    <div>
                        <img class="mb-4" src="<?php echo base_url().'backend_assets/images/brand/realdemy_dark.svg'?>" alt="" height="60">
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex flex-column content-right">
                <div class="container my-auto py-5">
                    <div class="row">
                        <div class="col-lg-9 col-xl-7 mx-auto">
                            <h5 class="mb-4">Staff Registration</h5>
                            <form class="" method="post" action="<?php echo site_url('signup'); ?>">
                                <div class="form-group">
                                    <label for="full_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="full_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email_address">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password1">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password2">Confirm Password</label>
                                    <input type="password" name="password2" id="password2" class="form-control" required>
                                </div>
                                <div id="pass-info" class="clearfix"></div>
                                <button type="submit" class="btn_1 rounded full-width">Submit Information</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="<?php echo base_url();?>login_assets/js/common_scripts.js"></script>
    <script src="<?php echo base_url();?>login_assets/js/common_func.js"></script>
    <script src="<?php echo base_url();?>login_assets/js/pw_strenght.js"></script>   
</body>
</html>