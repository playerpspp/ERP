<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
      <h2>
        <?php if ($kunci=='view_b') {
          echo "Laporan Barang";
        }else if ($kunci=='view_bm') {
          echo "Laporan Barang Masuk";
        }else{
          echo "Laporan Transaksi";
        }
        ?>
      </h2>
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
      <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_b') {
        echo base_url('home/cari_b');
      }else if ($kunci=='view_bm') {
        echo base_url('home/cari_bm');
      }else{
        echo base_url('home/cari_p');
      }
    ?>" method="post">

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal awal 
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal akhir
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-warning"><i class="fa fa-print"></i></button>
      </div>
    </div>
  </form>
      <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->

  <div class="ln_solid"></div>
      <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->

  <form class="form-horizontal form-label-left" novalidate

  action="
  <?php if ($kunci=='view_b') {
    echo base_url('home/pdf_b');
  }else if ($kunci=='view_bm') {
    echo base_url('home/pdf_bm');
  }else{
    echo base_url('home/pdf_p');
  }
?>" method="post">

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal awal 
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
  </div>
</div>
<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal akhir
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-3">
    <button type="submit" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>
  </div>
</div>
</form>
      <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->

<div class="ln_solid"></div>
      <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->

<form class="form-horizontal form-label-left" novalidate

action="
<?php if ($kunci=='view_b') {
  echo base_url('home/excel_b');
}else if ($kunci=='view_bm') {
  echo base_url('home/excel_bm');
}else{
  echo base_url('home/excel_p');
}
?>" method="post">

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal awal 
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
  </div>
</div>
<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal akhir
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-3">
    <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o"></i></button>
  </div>
</div>
</form>
<div class="ln_solid"></div>

<button onclick="history.back()" class="btn btn-primary"><i class="fa fa-undo"></i> </button>

<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
</div>
</div>
</div>