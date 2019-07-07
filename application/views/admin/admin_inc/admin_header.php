<?php
if(!$this->session->userdata('isloggedin')){
    redirect('Systemcontroller/index');
}
else{
    //redirect('Admincontroller/composeemail');
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Materia - Admin Template">
    <meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
    <meta name="author" content="solutionportal">
    <!-- <base href="/"> -->

    <title>Mailer</title>

    <!-- Icons -->
    <script src="../../../cdn-cgi/apps/head/aWgZFzIn5ln8hauTCmfEvTQEy2Q.js"></script><link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/plugins/c3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/plugins/waves.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/plugins/select2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/plugins/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/plugins/summernote.css">

    <!-- Css/Less Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.min.css">

    <!--- CSS to process datables  -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/datatables/jquery.dataTables.min.css">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

    <!-- Match Media polyfill for IE9 -->
    <!--[if IE 9]> <script src="<?php echo base_url();?>assets/scripts/ie/matchMedia.js"></script>  <![endif]-->
<style>
    .error,.required{
        color: red;
    }
</style>
</head>
<body id="app" class="app off-canvas">