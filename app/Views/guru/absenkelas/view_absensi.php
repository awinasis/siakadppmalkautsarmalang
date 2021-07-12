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
             <li><a href="<?= base_url('data_absensi/detailAbsensi') ?>"> Based on date</a></li>
             <li class="active">Data Absensi</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <a href="<?= base_url('data_absensi/rekapAbsensi/') ?>" class="btn btn-warning btn-sm"><i class="fa fa-file"></i> Rekap Absensi</a>
                 </div>
                 <div class="box-body">
                     <?php
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                        ?>

                     <?php
                        echo form_open('data_absensi/SimpanAbsen');
                        ?>
                     <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="text-center">NIS</th>
                                     <th class="text-center">Santri</th>
                                     <th class="text-center">Keterangan</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($absensi as $key => $value) {
                                        echo form_hidden($value['id_absensi'] . 'id_absensi', $value['id_absensi']);

                                    ?>

                                     <tr>
                                         <td class="text-center"><?= $value['NIS'] ?></td>
                                         <td><?= $value['nama_santri'] ?></td>
                                         <td class="text-center">
                                             <input type="radio" name="<?= $value['id_absensi'] ?>keterangan" value="Hadir">&emsp;Hadir&emsp;
                                             <input type="radio" name="<?= $value['id_absensi'] ?>keterangan" value="Izin">&emsp;Izin&emsp;
                                             <input type="radio" name="<?= $value['id_absensi'] ?>keterangan" value="Sakit">&emsp;Sakit&emsp;
                                             <input type="radio" name="<?= $value['id_absensi'] ?>keterangan" value="Alpha">&emsp;Alpha&emsp;
                                         </td>
                                     </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                         <td class="text-center">
                             <div class="pull-right">
                                 <button type="submit" class="btn btn-primary">Simpan</button>
                             </div>
                         </td>
                         <?php echo form_close() ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>