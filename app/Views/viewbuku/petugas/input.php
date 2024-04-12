<?= view('viewerp/layout/header')?>

<?= view('viewerp/layout/nav')?>


<div class="col-md-12 col-sm-12 col-xs-12">


    <div class="card">
        <div class="card-body">
        <a href="<?= base_url('/petugas')?>" class="btn btn-primary">Kembali</a></button>
            <div class="basic-form">
                <form id="userForm" class="form-horizontal form-label-left" novalidate  action="<?= base_url('petugas/aksi_input')?>" method="post">

                 <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Nama karyawan<span style="color: red;">*</span></label>
                        <input type="text" id="nama_karyawan" name="nama_karyawan" 
                        class="form-control text-capitalize" placeholder="Nama karyawan" >
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">NIK<span style="color: red;">*</span></label>
                        <input type="number" id="NIK" name="NIK" 
                        class="form-control text-capitalize" placeholder="NIK" autocomplete="on" >
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">email<span style="color: red;">*</span></label>
                        <input type="email" id="email" name="email" 
                        class="form-control text-capitalize" placeholder="Email" autocomplete="on" >
                    </div>
                   
                    <div class="mb-3 col-md-6">
                    <label class="form-label     ">Username<span style="color: red;">*</span></label>
                    <input type="text" id="username" name="username" 
                    class="form-control text-capitalize" placeholder="Username" >
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Level<span style="color: red;">*</span></label>
                    <div class="col-12">
                        <select id="role" class="form-control col-12" name="role" required="required">
                            <option value="admin" >Admin</option>
                            <option value="petugas" selected>Petugas</option>
                      </select>
                  </div>
              </div>

              <div class="mb-3 col-md-6">
                    <label class="form-label">Jenis Kelamin<span style="color: red;">*</span></label>
                    <div class="col-12">
                        <select id="jk" class="form-control col-12" name="jk" required="required">
                            <option value="Laki-laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                      </select>
                  </div>
              </div>
          </div>
         
          <button type="submit" id="updateButton" class="btn btn-success">input Data</button>
      </form>
  </div>
</div>
</div>
</div>

<?= view('viewerp/layout/footer')?>
