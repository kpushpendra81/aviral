<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/elephant.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/application.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.min.css">
  </head>
  <body class="layout layout-header-fixed">
    <?php $this->load->view("template/topmenu"); ?>
    <div class="layout-main">
      <?php $this->load->view("template/leftMenu"); ?>
      <?php $this->load->view($body); ?>
      <?php $this->load->view("template/footer"); ?>
    
    <script src="<?php echo base_url(); ?>assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/elephant.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/application.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo.min.js"></script>
  </body>
</html>