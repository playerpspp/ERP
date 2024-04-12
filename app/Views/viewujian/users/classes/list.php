<?= view('viewerp/layout/header'); ?>

<?= view('viewerp/layout/nav'); ?>
<head>
    <title>Class List: <?= $class->class_name ?></title>
</head>

<section id="main-content">
    <div class="row">

        <!-- /# column -->
        <div class="col-lg-12">
            <a onclick="history.back()"><button class="btn btn-primary">
                Back
            </button></a>
            <div class="card">
                <div class="card-title pr">

                    <h4>Students that is in this class</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;" width="1000px">Student Name</th>
                                    <th style="text-align: center;" width="1000px">NISN</th>
                                    <td style="text-align: center;" width="1000px">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($students as $student) { ?>
                                    <tr>
                                        <td style="text-align: center;" class="text-capitalize"><?= $student->student_name ?></td>
                                        <td style="text-align: center;" class="text-capitalize"><?= $student->NISN ?></td>
                                        <td style="text-align: center;" class="text-capitalize">
                                            <a href="<?= base_url('/classes/remove/'. $student->student_id .'/' . $class->class_id) ?>"><button class="btn btn-danger" title="detail"><i class="ti-trash"></i></button></a>
                                        </td>
                                   </tr>
                               <?php } ?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
       <!-- /# column -->
   </div>
   <!-- /# row -->

   <!-- /# column -->
</div>


<?= view('viewerp/layout/footer'); ?>