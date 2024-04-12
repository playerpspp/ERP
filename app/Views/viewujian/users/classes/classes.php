<?= view('viewerp/layout/header'); ?>

<?= view('viewerp/layout/nav'); ?>

<head>
	<title>Classes Table</title>
	<link href="/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
	<link href="/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
</head>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">

				<div class="card-title">
					<h4 style="margin-left: 3px;">Classes Table </h4>

				</div>

				<a style="margin-left: 5px;" href="<?= base_url('/classes/input') ?>"><button class="btn btn-box" title="Add new"><i class="ti-plus"></i></button></a>
				<br>

				<div class="card-body">
					<div class="table-responsive">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="text-align: center;" width="1000px">#</th>
									<th style="text-align: center;" width="1000px">Class Name</th>
									<th style="text-align: center;" width="1000px">Teacher Name</th>
									<th style="text-align: center;" width="1000px">Total Student</th>
									<th style="text-align: center;" width="1000px">Lists</th>
									<th style="text-align: center;" width="1000px">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no=1;
								foreach ($classes as $class) { ?>
									<tr>
										<th scope="row"><?= $no++ ?></th>
										<td style="text-align: center;" class="text-capitalize"><?= $class->class_name ?></td>
										<td style="text-align: center;" class="text-capitalize"><?= $class->teacher_name ?></td>
										<?php if (isset($count[$class->class_id])) { ?>
											<td style="text-align: center;" class="text-capitalize"><?= $count[$class->class_id]->total_students ?></td>
										<?php } else { ?>
											<td style="text-align: center;" class="text-capitalize">0</td>
										<?php } ?>
										<td style="text-align: center;" class="text-capitalize">
											<a href="<?= base_url('/classes/list/'. $class->class_id) ?>"><button class="btn btn-box" title=" Student list"><i class="ti-list"></i></button></a>
											<a href="<?= base_url('/classes/exams/'. $class->class_id) ?>"><button class="btn btn-box" title="exams list"><i class="ti-clipboard"></i></button></a>
										</td>
										<td style="text-align: center;" class="text-capitalize">
											<a href="<?= base_url('/classes/edit/'. $class->class_id) ?>"><button class="btn btn-box " title="Edit"><i class="ti-pencil-alt"></i></button></a>

											<a href="<?= base_url('/classes/delete/'. $class->class_id) ?>"><button class="btn btn-box " title="Delete"><i class=" ti-trash"></i></button></a>
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