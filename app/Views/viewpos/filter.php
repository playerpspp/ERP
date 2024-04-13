<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h4>Laporan Barang</h4>

                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form id="Laporanbuku" method="post" target="_blank">

                                    <?php if(session()->has('error')): ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <label>Tanggal awal</label>
                                        <input required type="date" id="awal" name="awal"  class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal akhir</label>
                                        <input required type="date" id="akhir" name="akhir"  class="form-control" >
                                    </div>
                                    
                                        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                                    <a href="javascript:void(0);" onclick="generatePrintBarang()" class="btn btn-box btn-warning" title="Print"> <i class="fa fa-print"></i> Print</a>

                                    <a href="javascript:void(0);" onclick="generatePDFBarang()" class="btn btn-box btn-danger" title="PDF"> <i class="fa fa-file-pdf-o"></i> PDF</a>

                                    <a href="javascript:void(0);" onclick="generateExcelBarang()" class="btn btn-box btn-success" title="Excel"> <i class="fa fa-file-excel-o"></i> Excel</a>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-title">
                            <h4>Laporan Barang Masuk</h4>

                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form id="Laporanbuku" method="post" target="_blank">

                                    <?php if(session()->has('error')): ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <label>Tanggal awal</label>
                                        <input required type="date" id="awal" name="awal"  class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal akhir</label>
                                        <input required type="date" id="akhir" name="akhir"  class="form-control" >
                                    </div>
                                    
                                        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                                    <a href="javascript:void(0);" onclick="generatePrintBarang_masuk()" class="btn btn-box btn-warning" title="Print"> <i class="fa fa-print"></i> Print</a>

                                    <a href="javascript:void(0);" onclick="generatePDFBarang_masuk()" class="btn btn-box btn-danger" title="PDF"> <i class="fa fa-file-pdf-o"></i> PDF</a>

                                    <a href="javascript:void(0);" onclick="generateExcelBarang_masuk()" class="btn btn-box btn-success" title="Excel"> <i class="fa fa-file-excel-o"></i> Excel</a>

                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-title">
                            <h4>Laporan Barang Keluar</h4>

                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form id="Laporanbuku" method="post" target="_blank">

                                    <?php if(session()->has('error')): ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <label>Tanggal awal</label>
                                        <input required type="date" id="awal" name="awal"  class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal akhir</label>
                                        <input required type="date" id="akhir" name="akhir"  class="form-control" >
                                    </div>
                                    
                                        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                                    <a href="javascript:void(0);" onclick="generatePrintBarang_keluar()" class="btn btn-box btn-warning" title="Print"> <i class="fa fa-print"></i> Print</a>

                                    <a href="javascript:void(0);" onclick="generatePDFBarang_keluar()" class="btn btn-box btn-danger" title="PDF"> <i class="fa fa-file-pdf-o"></i> PDF</a>

                                    <a href="javascript:void(0);" onclick="generateExcelBarang_keluar()" class="btn btn-box btn-success" title="Excel"> <i class="fa fa-file-excel-o"></i> Excel</a>

                                </form>
                            </div>
                        </div>
                    </div>
		</div>
                </div>
            </div>
        </div>
    </div>

    <script>

function generatePrintBarang() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/cari_b";
    form.submit();
}

  function generatePDFBarang() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/pdf_b";
    form.submit();
}

function generateExcelBarang() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/excel_b";
    form.submit();
}

function generatePrintBarang_masuk() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/cari_bm";
    form.submit();
}

  function generatePDFBarang_masuk() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/pdf_bm";
    form.submit();
}

function generateExcelBarang_masuk() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/excel_bm";
    form.submit();
}

function generatePrintBarang_keluar() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/cari_p";
    form.submit();
}

  function generatePDFBarang_keluar() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/pdf_p";
    form.submit();
}

function generateExcelBarang_keluar() {
    var form = document.getElementById("Laporanbuku");
    form.action = "/koperasi/excel_p";
    form.submit();
}



</script>