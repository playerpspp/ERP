<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Karyawan </h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('Koperasi/aksi_edit_karyawan')?>" method="post">
        <input type="hidden" name="id" value="<?= $duar->id_user ?>">

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Karyawan<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" placeholder="Nama" value="<?= $duar->nama ?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" >Jenis Kelamin <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select id="jk" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="jk" required="required">
              <option value="<?= $duar->JK?>">Pilih</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" >NIK <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="nik" name="nik" placeholder="NIK" required="required" class="form-control col-md-7 col-xs-12" value="<?= $duar->NIK?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" >Username<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="username" name="username" placeholder="Username" required="required" class="form-control col-md-7 col-xs-12" value="<?= $duar->username?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" >password<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="pass" name="pass" placeholder="Password" required="required" class="form-control col-md-7 col-xs-12" value="">
          </div>
        </div>
        
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
