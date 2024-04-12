<?= view('viewerp/layout/header'); ?>

<?= view('viewerp/layout/nav'); ?>

<head>
	<title>Students Table</title>
	<link href="/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
	<link href="/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
</head>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">

				<div class="card-title">
					<h4 style="margin-left: 3px;">Students Table </h4>

				</div>

				<a style="margin-left: 5px;" href="<?= base_url('/students/input') ?>"><button class="btn btn-box" title="Add new"><i class="ti-plus"></i></button></a>
				<br>

				<div class="card-body">
					<div class="table-responsive">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="text-align: center;" width="1000px">#</th>
									<th style="text-align: center;" width="1000px">Name</th>
									<th style="text-align: center;" width="1000px">NISN</th>
									<th style="text-align: center;" width="1000px">Email</th>
									<th style="text-align: center;" width="1000px">Username</th>
									<th style="text-align: center;" width="1000px">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no=1;
								
								foreach ($students as $student) { ?>
									<tr>
										<th style="text-align: center;" class="text-capitalize"><?= $no++ ?></th>
										<td style="text-align: center;" class="text-capitalize"><?= $student->student_name ?></td>
										<td style="text-align: center;" class="text-capitalize"><?= $student->NISN ?></td>
										<td style="text-align: center;" class="text-capitalize"><?= $student->email ?></td>
										<td style="text-align: center;" class="text-capitalize"><?= $student->username ?></td>
										<td style="text-align: center;" class="text-capitalize">
											<a href="<?= base_url('/students/edit/'. $student->id_user) ?>"><button class="btn btn-box btn-warning" title="Edit"><i class="ti-pencil-alt"></i></button></a>

											<a href="<?= base_url('/students/delete/'. $student->id_user) ?>"><button class="btn btn-box btn-danger" title="Delete"><i class="ti-trash"></i></button></a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>






	<?= view('viewerp/layout/footer'); ?>