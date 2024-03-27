<div align="center">

<img align="center" src="data:image/jpg;base64,<?= $foto?>" width="82%" height="18%" >
<div>
  <br>
  <br>
</div>

 <table id="datatable-buttons" align="center" border="1" align="center" width="80%" class="table table-striped table-bordered">
  
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Nama Supplier</th>
      <th>Tanggal</th>
      <th>Nama Karyawan</th>
    </tr>
  </thead>


  <tbody>
    <?php
    $no=1;
    foreach ($duar as $gas){
      ?>
      <tr>
        <th><?php echo $no++ ?></th>
        <td><?php echo $gas->nama_brg?></td>
        <td><?php echo $gas->jumlah?></td>
        <td><?php echo $gas->harga?></td>
        <td><?php echo $gas->nama_supp?></td>
        <td><?php echo $gas->tanggal?></td>
        <td><?php echo $gas->nama?></td>
      </tr>
    <?php }?>
  </tbody>
</table>
</div>

<script>
  window.print();
</script>