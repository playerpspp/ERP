
<div class="row">

    <div class="col-lg-12">
        <div class="card">
        <div class="card-title">
      <p>Barang</p>
      
      </div>

<div class="card-body">
       <?php if(session()->get('role')== "admin") { ?>
      <a href="<?= base_url('/Koperasi/tambah_b/')?>"><button class="btn btn-box btn-success"><i class="fa fa-plus"></i></button></a>
       <?php }else{} ?>
       <table id="bootstrap-data-table" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th style="text-align: center;" width="1000px">No</th>
            <th style="text-align: center;" width="1000px">Nama Barang</th>
            <th style="text-align: center;" width="1000px">Kode Barang</th>
            <th style="text-align: center;" width="1000px">Harga</th>
            <th style="text-align: center;" width="1000px">Stok</th>
            <th style="text-align: center;" width="1000px">Tanggal</th>
             <?php if(session()->get('role')== "admin") { ?>
            <th style="text-align: center;" width="1000px">action</th>
             <?php }else{} ?>
          </tr>
        </thead>


        <tbody>
          <?php
          $no=1;
          foreach ($duar as $gas){
            ?>
            <tr>
              <th style="text-align: center;" class="text-capitalize"><?php echo $no++ ?></th>
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->nama_brg?></td>
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->kode_brg?></td>
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->harga?></td>
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->stok?></td>
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->tanggal?></td>
               <?php if(session()->get('role')== "admin") { ?>
              <td style="text-align: center;" class="text-capitalize">
                <a href="<?= base_url('/Koperasi/edit_b/'.$gas->id_brg)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                <a href="<?= base_url('/Koperasi/hapus_b/'.$gas->id_brg)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
              </td>
              <?php }else{} ?>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
