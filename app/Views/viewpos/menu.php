<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
    <ul class="nav side-menu">
      <li><a href="<?= base_url('/home/dashboard')?>"><i class="fa fa-home"></i> Home</a>
      </li><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
      <li><a><i class="fa fa-edit"></i> transaksi <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <?php  if(session()->get('level')== 1 ||session()->get('level')==4 ) { ?>
            <li><a href="<?= base_url('/home/t_barang')?>">Barang</a></li>
            <li><a href="<?= base_url('/home/t_masuk')?>">Barang masuk</a></li>
            <li><a href="<?= base_url('/home/t_jual')?>">Barang Keluar</a></li>
          <?php }elseif(session()->get('level')== 2 ||session()->get('level')==3 ){ ?>
            <li><a href="<?= base_url('/home/t_jual')?>">Barang Keluar</a></li>
          <?php } ?>
        </ul>
      </li>
      <?php  if(session()->get('level')== 1 ||session()->get('level')==4 ) { ?>
        <li><a><i class="fa fa-desktop"></i> Laporan <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="<?= base_url('/home/l_brg')?>">Barang</a></li>
            <li><a href="<?= base_url('/home/l_masuk')?>">Barang Masuk</a></li>
            <li><a href="<?= base_url('/home/l_penjualan')?>">Penjualan</a></li>

          </ul>
        </li><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
      <?php }elseif(session()->get('level')== 2 ||session()->get('level')==3 ){} ?>
      <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
    </ul>
  </div>
  <?php  if(session()->get('level')== 1) { ?>
    <div class="menu_section">
      <h3>Settings</h3><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
      <ul class="nav side-menu">
        <li><a><i class="fa fa-users"></i> user <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="<?= base_url('/home/t_karyawan')?>">karyawan</a></li>
            <li><a href="<?= base_url('/home/t_user')?>">User</a></li>
          </ul><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        </li>
        <!-- <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li> -->
      </ul>
    </div>
  <?php }elseif(session()->get('level')== 2 ||session()->get('level')==3 ){} ?>
  <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) --><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) --><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="Settings">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Lock">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('/home/log_out')?>">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <?php if($foto->foto != ''
             && file_exists(PUBLIC_PATH."/images/avatar/".$foto->foto)) { ?>
              <img src="<?= base_url('/images/avatar/'.$foto->foto)?>"  alt="...">
            <?php }else{ ?>
              <img src="<?= base_url('/images/avatar/default-profile-photo.jpg' )?>" alt="...">
            <?php } ?> <?= session()->get('username')?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
           <!--  <li><a href="javascript:;"> Profile</a></li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">50%</span>
                <span>Settings</span>
              </a>
            </li>
            <li><a href="javascript:;">Help</a></li> -->
            <li><a href="<?= base_url('/home/ganti_profil')?>"><i class="fa fa-user pull-right"></i>profil</a></li>
            <li><a href="<?= base_url('/home/ganti_pass')?>"><i class="fa fa-key pull-right"></i>ganti password</a></li>
            <li><a href="<?= base_url('/home/log_out')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

        <!-- <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
            <span class="badge bg-green">6</span>
          </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <div class="text-center">
                <a>
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li> -->
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-cubes"></i> Total Barang</span>
      <div class="count"><?=  count($b) ?></div>
      <span class="count_bottom"><i class="green">4% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-truck"></i> Total Barang Masuk</span>
      <div class="count"><?=  count($bm) ?></div>
      <span class="count_bottom"> Hari ini</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-shopping-cart"></i> Total penjualan</span>
      <div class="count green"><?=  count($p) ?></div>
      <span class="count_bottom"> Hari ini</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total user</span>
      <div class="count"><?=  count($user) ?></div>
      <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Karyawan</span>
      <div class="count"><?=  count($karyawan) ?></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
  </div>