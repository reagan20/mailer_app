<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Materia - Admin Template">
    <meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
    <meta name="author" content="solutionportal">
    <!-- <base href="/"> -->
    <title>Materia - Admin Template</title>
    <!-- Icons -->
    <script src="../../../cdn-cgi/apps/head/aWgZFzIn5ln8hauTCmfEvTQEy2Q.js"></script><link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/plugins/waves.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/plugins/perfect-scrollbar.css">

    <!-- Css/Less Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.min.css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'> -->
    <!-- Match Media polyfill for IE9 -->
    <!--[if IE 9]> <script src="<?php echo base_url();?>assets/scripts/ie/matchMedia.js"></script>  <![endif]-->
</head>
<body id="app" class="app off-canvas body-full">
<!-- main-container -->
<div class="main-container clearfix">

    <!-- content-here -->
    <div class="content-container" id="content">
        <div class="page page-auth">
            <div class="auth-container">

                <div class="form-head mb20">
                    <h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><a href="">Mail Test</a></h1>
                    <h5 class="text-normal h5 text-center"></h5>
                </div>

                <div class="form-container">
                    <?php
                    if (isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }
                    ?>
                    <form class="form-horizontal" action="<?php echo site_url('Systemcontroller/login');?>" method="post">
                        <div class="md-input-container md-float-label">
                            <input  name="email" type="email" class="form-control" placeholder="Email Address" required>
                        </div>

                        <div class="md-input-container md-float-label">
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="clearfix mb15"><a href="<?php echo  site_url('Systemcontroller/create_account');?>" class="text-success small">Create account</a></div>
                        <div class="btn-group btn-group-justified mb15">
                            <div class="btn-group">
                                <button name="login_btn" type="submit" class="btn btn-primary"><span class="fa fa-lock"></span> Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div> <!-- #end main-container -->

<!-- Dev only -->
<!-- Vendors -->
<script src="<?php echo base_url();?>assets/scripts/vendors.js"></script>

</body>
</html>