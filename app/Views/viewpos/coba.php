<form class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="<?= base_url('/home/aksi_coba')?>">
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto Profil Baru 
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="form-control col-md-3 col-xs-12" type="file" name="foto">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
          </div>
        </div>      
      <div class="ln_solid"></div>
        <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Password Baru 
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="pswd" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="pswd" placeholder="Password"  type="text">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
          </div>
        </div>
      <div class="ln_solid"></div>
      <div class="item form-group"><!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
          <label class="control-label col-md-3 col-sm-3 col-xs-12" >Jenis Kelamin 
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select id="jk" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="jk" >
              <option value=''s>Pilih</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>