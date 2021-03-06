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
                                    <th class="text-center">NO</th>
                                    <th class="text-center">PERIODE PEMBAYARAN</th>
                                    <th class="text-center">KETERANGAN</th>
                                    <th class="text-center">TAGIHAN</th>
                                    <th class="text-center">TERBAYAR</th>
                                    <th class="text-center">STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $no = 1;
                                    foreach ($pembayaran as $key => $value) { ?>
                                   <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td class="text-center"><?= $value['periode_pembayaran'] ?></td>
                                        <td class="text-center"><?= $value['keterangan'] ?></td>
                                        <td class="text-center"><?= $value['tagihan'] ?></td>
                                        <td class="text-center"><?= $value['terbayar'] ?></td>
                                        <td class="text-center"><?= $value['status_pembayaran'] ?></td>
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
</div>