<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
            <?= $title; ?>
        </h1>
        <br><br>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('santri') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Pengajuan Surat</li>
        </ol>
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-success box-solid">
                <div class="with-border"></div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Main content -->
                    <section class="invoice">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;">Data Pengajuan Surat</h4>
                                &emsp;&emsp;&emsp;
                                <h2 class="page-header"></h2>
                                <div class="col-sm-8">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <?php foreach ($surat as $key => $value) { ?>
                                                <tr>
                                                    <td width="100px">NIS</td>
                                                    <td width="30px">:</td>
                                                    <td><?= $value['NIS']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="100px">Nama Santri</td>
                                                    <td width="30px">:</td>
                                                    <td><?= $value['nama_santri']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="100px">Tahun Akademik</td>
                                                    <td width="30px">:</td>
                                                    <td><?= $ta_aktif['tahun_akademik']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="100px">Jenis Surat</td>
                                                    <td width="30px">:</td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-lg-6">
                                                                <select name="kategori" id="kategori" class="form-control" placeholder="kategori" required>
                                                                    <option value="">-- Pilih Jenis Surat --</option>
                                                                    <option value="Sertifikat">Sertifikat</option>
                                                                    <option value="Surat Pengajuan">Surat Pengajuan</option>
                                                                    <option value="Kartu Pembayaran">Bukti Pembayaran</option>
                                                                    <option value="Buku Pedoman">Buku Pedoman</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="<?= base_url('santri/request_surat') ?>" class="btn btn-primary btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
            </div>