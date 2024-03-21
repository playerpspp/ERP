<!DOCTYPE html>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
  <title>Gentelella Alela! | </title>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
  <!-- Bootstrap -->
  <link href="<?= base_url('../vendors/bootstrap/dist/css/bootstrap.min.css')?>"rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('../vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('../vendors/nprogress/nprogress.css')?>" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?= base_url('../vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
  
  <!-- bootstrap-progressbar -->
  <link href="<?= base_url('../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?= base_url('../vendors/jqvmap/dist/jqvmap.min.css')?>" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="<?= base_url('../vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('../build/css/custom.min.css')?>" rel="stylesheet">
</head>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url('/home')?>" class="site_title"><i class="fa fa-paw"></i> <span>POS</span></a>
          </div>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
          <div class="clearfix"></div>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <?php if($foto->foto != '' && file_exists(PUBLIC_PATH."/images/avatar/".$foto->foto)) { ?>
            <img src="<?= base_url('/images/avatar/'.$foto->foto)?>"  height="55px" alt="..." class="img-circle profile_img">
          <?php }else{ ?>
            <img src="<?= base_url('/images/avatar/default-profile-photo.jpg' )?>" height="55px" alt="..." class="img-circle profile_img">
         <?php } ?>
            </div>
            <div class="profile_info">
              <span>Selamat Datang,</span>
              <h2><?= $foto->username?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
          <br />