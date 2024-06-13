<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page_title; ?> | RD-ERP</title>
    <script src="<?php echo base_url();?>assets/js/ajax.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/allwell-vector-favicon.png" />
    <?php include 'includes_top.php'; ?>
</head>
<body class="app sidebar-mini">
<div class="page">
    <div class="page-main">
    <!-- HEADER -->
    <?php include 'header.php'; ?>
    <?php include 'navigation.php' ?>
        <div class="app-content">
            <?php $user_id = $this->user_model->get_all_user_by_id($this->session->userdata('user_id'))->row_array(); ?>
            <?php include $page_name.'.php';?>
        </div>
    </div>
</div>
    <!-- all the js files -->
    <?php include 'includes_bottom.php'; ?>
</body>
</html>