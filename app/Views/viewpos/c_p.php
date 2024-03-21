<div align="center">

<img align="center" src="data:image/jpg;base64,<?= $foto?>" width="82%" height="18%" >
<div>
  <br>
  <br>
</div>

 <table id="datatable-buttons" align="center" border="1" align="center" width="80%" class="table table-striped table-bordered">
  <!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Tanggal</th>
      <th>Nama Karyawan</th>
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
        <td><?php echo $gas->jumlah?></td>
        <td><?php echo $gas->harga?></td>
        <td><?php echo $gas->tanggal?></td>
        <td><?php echo $gas->nama?></td>
      </tr>
    <?php }?>
  </tbody>
</table>
</div>
<!-- //Copyrighted by @playerpspp (Octarianto Lika NG) -->
<script>
  window.print();
</script>