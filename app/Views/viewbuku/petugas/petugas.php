<?= view('viewerp/layout/header')?>

<?= view('viewerp/layout/nav')?>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
        <div class="card-title">
            <p>Tabel petugas</p>
            </div>

        <div class="card-body">
        <a href="<?= base_url('/petugas/input_petugas')?>"> <button type="button" class="btn btn-success" >
										Tambah petugas
									</button> </a>
        <table id="bootstrap-data-table" class="table table-striped table-bordered">					<thead>
						<tr>
							<th style="text-align: center;" width="1000px">No.</th>
							<th style="text-align: center;" width="1000px">Nama Lengkap</th>
							<th style="text-align: center;" width="1000px">Email</th>
							<th style="text-align: center;" width="1000px">NIK</th>
							<th style="text-align: center;" width="1000px">Username</th>
							<th style="text-align: center;" width="1000px">Level</th>
							<th style="text-align: center;" width="1300px">Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
                    $no=1;
                    foreach ($data as $dataa){?>
						<tr>
							<td style="text-align: center;" class="text-capitalize"><?php echo $no++ ?></td>
							<td style="text-align: center;" class="text-capitalize"><?php echo $dataa->nama ?></td>
							<td style="text-align: center;" class="text-capitalize"><?php echo $dataa->email ?></td>
							<td style="text-align: center;" class="text-capitalize"><?php echo $dataa->NIK ?></td>
							<td style="text-align: center;" class="text-capitalize"><?php echo $dataa->username ?></td>
							<td style="text-align: center;" class="text-capitalize"><?php echo $dataa->role ?></td>
							<td>
							<div class="text-center mb-1">
                               <a href="<?= base_url('/petugas/reset_password/'.$dataa->id_user)?>"> <button type="button" class="btn btn-info" >
										Reset Password
									</button> </a>
									<a href="<?= base_url('/petugas/edit/'.$dataa->id_user) ?>" class="btn btn-warning">
										Edit
									</a>
									<a href="<?= base_url('/petugas/hapus/'.$dataa->id_user)?>"><button type="button" class="btn btn-danger" >
										Delete
									</button> </a>
							</div>
                            </td>

                           
							
						</tr>
                    <?php }?>
					</tbody>
				</table>
          
            </div>
        </div>

    </div>

   







</div>


<?= view('viewerp/layout/footer')?>

