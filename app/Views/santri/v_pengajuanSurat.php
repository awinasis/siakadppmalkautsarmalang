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
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Nama Surat</th>
                                    <th class="text-center">File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($surat as $key => $value) { ?>
                                    <tr>
                                    <td><?= $value['nama_surat'] ?></td>
                                        <td class="text-center">
                                             <a href="<?= base_url('file_surat/viewpdf/' . $value['id_surat']) ?>">
                                                 <i class="fa fa-file-pdf-o fa-4x label-danger"></i></a><br>
                                             <?= number_format($value['ukuran_file']); ?> Byte
                                         </td>
                                         <td class="text-center"><?= $value['periode_pembayaran'] ?></td>
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