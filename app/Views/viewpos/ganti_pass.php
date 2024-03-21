<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Ganti Profil</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
      <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_ganti_password')?>" method="post">

        <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Password Baru 
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="pswd" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="pswd" placeholder="Password"  required="required" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->