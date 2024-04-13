<div class="row">

    <div class="col-lg-12">
        <div class="card">
        <div class="card-title">
      <p>Barang Masuk</p>
      
      </div>

<div class="card-body">
        <?php if(session()->get('role')== "admin") { ?>
      <a href="<?= base_url('/Koperasi/tambah_bm/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
       <?php }else{} ?>
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th style="text-align: center;" width="1000px">No</th>
            <th style="text-align: center;" width="1000px">Nama Barang</th>
            <th style="text-align: center;" width="1000px">Jumlah</th>
            <th style="text-align: center;" width="1000px">Harga</th>
            <th style="text-align: center;" width="1000px">Nama Supplier</th>
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
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->jumlah?></td>
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->harga?></td>
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->nama_supp?></td>
              <td style="text-align: center;" class="text-capitalize"><?php echo $gas->tanggal?></td>
               <?php if(session()->get('role')== "admin") { ?>
              <td style="text-align: center;" class="text-capitalize">
                <a href="<?= base_url('/Koperasi/hapus_bm/'.$gas->id_msk)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
              </td>
              <?php }else{} ?>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
