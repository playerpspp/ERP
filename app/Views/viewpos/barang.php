<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Barang</h2>
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
       <?php if(session()->get('level')== 1) { ?>
      <a href="<?= base_url('/home/tambah_b/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
       <?php }else{} ?>
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Tanggal</th>
             <?php if(session()->get('level')== 1) { ?>
            <th>action</th>
             <?php }else{} ?>
          </tr>
        </thead>

<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
        <tbody>
          <?php
          $no=1;
          foreach ($duar as $gas){
            ?>
            <tr>
              <th><?php echo $no++ ?></th>
              <td><?php echo $gas->nama_brg?></td>
              <td><?php echo $gas->kode_brg?></td>
              <td><?php echo $gas->harga?></td>
              <td><?php echo $gas->stok?></td>
              <td><?php echo $gas->tanggal?></td>
               <?php if(session()->get('level')== 1) { ?>
              <td>
                <a href="<?= base_url('/home/edit_b/'.$gas->id_brg)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                <a href="<?= base_url('/home/hapus_b/'.$gas->id_brg)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
              </td>
              <?php }else{} ?>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->