<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="<?= base_url('/user') ?>">
                    <!-- <img src="images/logo.png" alt="" /> --><span>Ujian Online</span></a></div>
                    <li class="label">Main</li>
                    <li><a href="<?= base_url('/user') ?>"><i class="ti-dashboard"></i> Dashboard </a></li>
                    <br>
                    <li class="label">Apps</li>
                    
                    <br>
                    <li><a href="<?= base_url('/exams') ?>"><i class="ti-file"></i> Exams </a></li>
                    <li class="label">Account</li>
                    <li><a href="<?= base_url('/profile') ?>"><i class="ti-info-alt"></i> Profile</a></li>
                    <li><a href="<?= base_url('/home/Logout') ?>"><i class="ti-close"></i> Logout</a></li>
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
                                <?= session()->get('name') ?>
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
                                <h1>Hello, <span>Welcome 

                                 <?= session()->get('name') ?>

                             </span></h1>
                         </div>
                     </div>
                 </div>
             </div>
