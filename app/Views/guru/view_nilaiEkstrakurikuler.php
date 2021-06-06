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
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <!-- <div class="box-tools pull-left"> -->
                     <a href="<?= base_url('data_nilai/tambahNilaiEkstrakurikuler/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
                 </div>
                 <h4 style="font-family:timesnewrohman;">&ensp;Tahun Ajaran : <b><?= $ta_aktif['tahun_akademik']; ?></b></h4>
                 <div class="box-body">
                     <?php
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                        ?>
                     <div class="table-responsive">
                         <table id="example2" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="text-center">No.</th>
                                     <th class="text-center">NIS</th>
                                     <th class="text-center">Nama</th>
                                     <th class="text-center">L/P</th>
                                     <th class="text-center">Pencak Silat</th>
                                     <th class="text-center">Sepakbola/Futsal</th>
                                     <th class="text-center">Senam Pagi</th>
                                     <th class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($nilai as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td class="text-center"><?= $value['NIS'] ?></td>
                                         <td><?= $value['nama_santri'] ?></td>
                                         <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                         <td class="text-center"><?= $value['nilai_1'] ?></td>
                                         <td class="text-center"><?= $value['nilai_2'] ?></td>
                                         <td class="text-center"><?= $value['nilai_3'] ?></td>

                                         <td class="text-center">
                                             <a href="<?= base_url('data_nilai/ubahNilaiEkstrakurikuler/' . $value['id_ne']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_ne'] ?>"><i class="fa fa-trash"></i></button>
                                         </td>
                                     </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- modal delete -->
     <?php foreach ($nilai as $key => $value) { ?>
         <div class="modal fade" id="delete<?= $value['id_ne'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Nilai Ekstrakurikuler</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b><?= $title ?>&nbsp;<?= $value['nama_santri'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_nilai/delete4/' . $value['id_ne']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>
 </div>