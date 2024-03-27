<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                    <!-- <img src="images/logo.png" alt="" /> --><span>Inventaris</span></a></div>
                    <li class="label">Dashboard</li>
                    <li><a href="<?= base_url('/Inventaris/dashboard')?>"><i class="ti-dashboard"></i> Dashboard </a></li>
                    <br>
                    <li class="label">Features</li>
               
                <?php  if(session()->get('role')== "admin" ||session()->get('role')=="petugas" ) { ?>                      
                      <li><a class="sidebar-sub-toggle"><i class="ti-server"></i> Data <span
                          class="sidebar-collapse-icon ti-angle-down"></span></a>
                          <ul>
                          <li><a href="<?= base_url('/Inventaris/t_barang')?>">Barang</a></li>
                          <li><a href="<?= base_url('/Inventaris/t_masuk')?>">Barang masuk</a></li>
                          <li><a href="<?= base_url('/Inventaris/t_jual')?>">Barang Keluar</a></li>
                              
                          </ul>
                      </li>
                <?php  } ?>

               

                <?php  if(session()->get('role')== "admin" ) { ?>

                <li><a class="sidebar-sub-toggle"><i class="ti-book"></i> Laporan <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                      <li><a href="<?= base_url('/Inventaris/l_brg')?>">Barang</a></li>
                      <li><a href="<?= base_url('/Inventaris/l_masuk')?>">Barang Masuk</a></li>
                      <li><a href="<?= base_url('/Inventaris/l_penjualan')?>">Penjualan</a></li>
                    </ul>
                </li>

              <?php  } ?>

              <br>
              <li class="label">Exit</li>
              <li><a href="<?= base_url('/Inventaris/Exit')?>"><i class="ti-close"></i> Exit</a></li>
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