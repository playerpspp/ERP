<div class="row">

    <div class="col-lg-12">
    <a href="javascript:history.back()" class="btn btn-primary">Kembali</a></button>
        <div class="card">
        <div class="card-title">
      <p>Tambah Barang Masuk</p>
      
      </div>

<div class="card-body">

      <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('Koperasi/aksi_tambah_bm')?>" method="post">

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
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="jumlah" name="jumlah" required="required" placeholder="Jumlah" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="harga" name="harga" placeholder="Harga" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Supplier <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="supp" name="supp" placeholder="Nama Supplier" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
