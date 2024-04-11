<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                    <!-- <img src="images/logo.png" alt="" /> --><span>Perpustakaan Sekolah</span></a></div>
                    <li class="label">Dashboard</li>
                    <li><a href="/home/dashboard"><i class="ti-dashboard"></i> Dashboard </a></li>
                    <br>
                    <li class="label">Features</li>
                    
                    <?php  if(session()->get('role')== 'admin'){ ?>
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> User <span
                        class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                        <li><a href="<?= base_url('/petugas')?>">Petugas</a></li>
                        <li><a href="<?= base_url('/teachers') ?>">Teachers</a></li>
                        <li><a href="<?= base_url('/students') ?>">Students</a></li>
                        <li><a href="<?= base_url('/classes') ?>">Classes</a></li>
                     </ul>
                 </li>
                 <?php  }else{}?>
                 
                
                <li><a class="sidebar-sub-toggle"><i class="ti-server"></i>Apklikasi <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                    <li><a href="<?= base_url('/buku')?>">Daftar Buku</a></li>
                     <?php  if(session()->get('role')== "admin" || session()->get('role')== "petugas"){ ?>
                    <li><a href="<?= base_url('/Inventaris')?>">Inventaris</a></li>
                    <?php }?>
                    <?php  if(session()->get('role')== "student" ){ ?>
                    <li><a href="<?= base_url('/BukuController/dashboard')?>">Koleksi Buku</a></li>
                    <?php }?>
                    <?php  if(session()->get('role') != "petugas"){ ?>
                    <li><a href="<?= base_url('/user')?>">Ujian Online</a></li>
                    <?php } ?>
                        
                    </ul>
                </li>
               

              <br>
              <li class="label">Account</li>
              <li><a href="/Profile"><i class="ti-info-alt"></i> Profile</a></li>
              <li><a href="/Log"><i class="ti-harddrives"></i> Log</a></li>
              <li><a href="/home/logout"><i class="ti-close"></i> Logout</a></li>
          </ul>
      </div>
  </div>
</div>
<!-- /# sidebar -->









<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">

                    <div class="header-icon" data-toggle="dropdown">
                        <span class="user-avatar">
                         
                         <?= session()->get('name')?>
                     </span>

                 </div>
             </div>
         </div>
     </div>
 </div>
</div>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome <?= session()->get('name')?></span></h1>
                        </div>
                    </div>
                </div>
            </div>
<section id="main-content">