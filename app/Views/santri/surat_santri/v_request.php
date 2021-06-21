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
            <li class="active">Data Permintaan Surat</li>
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
                                        <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;">Data Pengajuan Surat</h4>
                                        &emsp;&emsp;&emsp;
                                        <h2 class="page-header"></h2>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <div class="table-responsive">
                                     <table id="example2" class="table table-bordered table-striped">
                                         <thead>
                                             <tr>
                                                 <th class="text-center">No.</th>
                                                 <th class="text-center">NIS</th>
                                                 <th class="text-center">Nama</th>
                                                 <th  class="text-center">Tahun Ajaran</th>
                                                 <th class="text-center" >Jenis Suratt</th>
                                                 <th  class="text-center">Status</th>
                                             </tr>
                                    
                                         </thead>
                                         <tbody>
                                             <?php $no = 1;
                                                foreach ($pengajuan as $key => $value) { ?>
                                                 <tr>
                                                     <td class="text-center"><?= $no++; ?></td>
                                                     <td class="text-center"><?= $value['NIS']; ?></td>
                                                     <td><?= $value['nama_santri']; ?></td>
                                                     <td class="text-center"><?= $value['tahun_ajaran'] ?></td>
                                                     <td class="text-center"><?= $value['jenis_surat'] ?></td>
                                                     <td class="text-center"><?= $value['status'] ?></td>
                                                 </tr>
                                             <?php } ?>
                                         </tbody>
                                     </table>
                                 </div>
                                            </tbody>
                                        </table>
                                        <a href="<?= base_url('santri/pengajuan_surat') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
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