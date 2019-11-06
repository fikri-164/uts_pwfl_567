<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#F6AE2D">
  <title><?= $title ?> | UTS PEMROGRAMAN WEB FRAMEWORK LANJUT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('')?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  

  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
</head>
<body class="hold-transition skin-yellow layout-top-nav">
<div class="wrapper">

<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url('C_page');?>" class="navbar-brand"><b>UTS PWFL</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?= $home ?> ><a href="<?php echo base_url('C_page/');?>">Dashboard</a></li>
            <li <?= $vmhs ?> ><a href="<?php echo base_url('C_page/mhs/');?>">Data Mahasiswa </a></li>
            <li <?= $vlog ?> ><a href="<?php echo base_url('C_page/logmhs/');?>">LOG Mahasiswa </a></li>
          </ul>
          
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <?php echo $this->session->flashdata('msg');?>
  </header>