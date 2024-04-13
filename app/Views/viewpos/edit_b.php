<div class="row">

    <div class="col-lg-12">
    <a href="javascript:history.back()" class="btn btn-primary">Kembali</a></button>
        <div class="card">
        <div class="card-title">
      <p>Edit Barang</p>
      
      </div>

<div class="card-body">

      <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('Koperasi/aksi_edit_b')?>" method="post">

        <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
        </p>
        <span class="section">Personal Info</span>
        <input type="hidden" name="id" value="<?= $gas->id_brg ?>">

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Barang <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Nama Barang" required="required" type="text" value="<?= $gas->nama_brg?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Barang <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="kode" name="kode" required="required" placeholder="Kode" class="form-control col-md-7 col-xs-12" value="<?= $gas->kode_brg?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="harga" name="harga" placeholder="Harga" required="required" class="form-control col-md-7 col-xs-12" value="<?= $gas->harga?>">
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