<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
            <?= $title; ?>
        </h1>
        <br><br>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('guru') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Data Guru</li>
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
                                        <h2 class="page-header" style="color:MediumSeaGreen; font-family:timesnewrohman;"><b>Biodata Guru</b></h2>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($guru as $key => $value) { ?>
                                                    <tr>
                                                        <th width="100px">Nama Guru</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['nama_guru'] ?></td>
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
                                                        <th width="100px">Alamat Asal Daerah</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['alamat_asal_daerah'] ?></td>
                                                        <th width="120px">No Telp</th>
                                                        <th width="30px">:</th>
                                                        <td><?= $value['noTelp'] ?></td>
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
</div>