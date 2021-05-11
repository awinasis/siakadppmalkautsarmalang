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
            <li class="active">Data Santri</li>
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
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="page-header" style="color:MediumSeaGreen; font-family:timesnewrohman;"><b>Biodata Santri</b></h2>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($santri as $key => $value) { ?>
                                                    <tr>
                                                        <th width="100px">No</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $no++; ?></td>
                                                        <th width="120px">NIS</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['NIS'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th width="100px">Nama Santri</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['nama_santri'] ?></td>
                                                        <th width="120px">Jenis Kelamin</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['jenis_kelamin'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th width="100px">Tempat Lahir</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['tempat_lahir'] ?></td>
                                                        <th width="120px">Tanggal Lahir</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['tanggal_lahir'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th width="100px">Alamat</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['alamat'] ?></td>
                                                        <th width="120px">No Telp</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['noTelp'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th width="100px">Email</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['email'] ?></td>
                                                        <th width="120px">Kelas Santri</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['kelas_santri'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th width="100px">Angkatan Santri</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['angkatan_santri'] ?></td>
                                                        <th width="120px">Universitas</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['universitas'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th width="100px">Fakultas</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['fakultas'] ?></td>
                                                        <th width="120px">Jurusan/Prodi</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['jurusan_prodi'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th width="100px">Nama Ayah</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['nama_ayah'] ?></td>
                                                        <th width="120px">NoTelp Orang Tua</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['noTelp_ortu'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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