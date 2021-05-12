<div class="row">
    <div class="col-sm-12">
        <div class="box box-success box-solid">
            <div class="with-border"></div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- Main content -->
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="page-header" style="color:MediumSeaGreen; font-family:timesnewrohman;"><i class="fa fa-check-square-o"></i><b>Absen</b></h2>
                                    &emsp;&emsp;&emsp;
                                    <table class="table table-bordered">
                                        <tbody>
                                            <div class="form-group row">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <input type="radio" name="absen" id="absen" value="Hadir" required>&nbsp; Hadir &emsp;
                                                        <input type="radio" name="absen" id="absen" value="Alpha" required>&nbsp; Alpha &emsp;
                                                        <input type="radio" name="absen" id="absen" value="Belajar" required>&nbsp; Belajar &emsp;
                                                        <input type="radio" name="absen" id="absen" value="Izin" required>&nbsp; Izin &emsp;
                                                        <input type="radio" name="absen" id="absen" value="Izin Terlambat" required>&nbsp; Izin Terlambat &emsp;
                                                        <input type="radio" name="absen" id="absen" value="Nugas" required>&nbsp; Nugas &emsp;
                                                        <input type="radio" name="absen" id="absen" value="Sakit" required>&nbsp; Sakit &emsp;
                                                        <input type="radio" name="absen" id="absen" value="Terlambat" required>&nbsp; Terlambat &emsp;
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                    </table>
                                    <div class="form-group" align="center">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="<?= base_url('santri/absen_kbm') ?>" class="btn btn-danger">Batalkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>