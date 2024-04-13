<?= view('viewerp/layout/header')?>

<?= view('viewerp/layout/nav')?>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
        <div class="card-title">
            <p>Selamat Datang di dashboard ERP. Situs manakah yang anda ingin buka?</p>
            </div>

        <div class="card-body">
        <?php  if(session()->get('role')== "admin" || session()->get('role')== "petugas"){ ?>
            <a href="<?= base_url('/Koperasi')?>">        <button class="btn btn-primary">Koperasi</button></a>
            <?php }?>

            <?php  if(session()->get('role')!= "teacher" ){ ?>
                <a href="<?= base_url('/BukuController/dashboard')?>">     <button class="btn btn-warning">Perpustakaan Digital</button></a>
            <?php }?>

            <?php  if(session()->get('role') != "petugas"){ ?>
                <a href="<?= base_url('/user')?>">  <button class="btn btn-danger">Ujian Online</button></a>
            <?php } ?>

            </div>
        </div>

    </div>

   







</div>


<?= view('viewerp/layout/footer')?>

