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
            <li class="active">Data Pembayaran</li>
        </ol>
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-success box-solid">
                <div class="with-border"></div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">NIS</th>
                                    <th class="text-center">Nama Santri</th>
                                    <th class="text-center">Periode Pembayaran</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Tagihan</th>
                                    <th class="text-center">Terbayar</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pembayaran as $key => $value) { ?>
                                    <tr>
                                        <td><?= $value['NIS'] ?></td>
                                        <td><?= $value['nama_santri'] ?></td>
                                        <td class="text-center"><?= $value['periode_pembayaran'] ?></td>
                                        <td><?= $value['keterangan'] ?></td>
                                        <td class="text-center"><?= $value['tagihan'] ?></td>
                                        <td class="text-center"><?= $value['terbayar'] ?></td>
                                        <td><?= $value['status'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>