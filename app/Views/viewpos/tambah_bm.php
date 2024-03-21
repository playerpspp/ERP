<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Barang Masuk </h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
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
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
      <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_bm')?>" method="post">
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Barang <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
              <option>Pilih Barang</option>
              <?php foreach ($duar as $gas){ ?>
                <option value="<?= $gas->id_brg; ?>"><?= $gas->nama_brg; ?></option>
              <?php } ?>
            </select>
          </div>
        </div><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="jumlah" name="jumlah" required="required" placeholder="Jumlah" class="form-control col-md-7 col-xs-12">
          </div>
        </div><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="harga" name="harga" placeholder="Harga" required="required" class="form-control col-md-7 col-xs-12">
          </div><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        </div>
        <div class="item form-group"><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Supplier <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="supp" name="supp" placeholder="Nama Supplier" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button type="submit" class="btn btn-primary">Cancel</button>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
    </form>
  </div>
</div>
</div>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->