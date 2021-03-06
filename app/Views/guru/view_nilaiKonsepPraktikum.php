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
                     <a href="<?= base_url('data_nilai/tambahNilaiKonsepPraktikum/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
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
                         <table id="example1" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="text-center">No.</th>
                                     <th class="text-center">NIS</th>
                                     <th class="text-center">Nama</th>
                                     <th class="text-center">L/P</th>
                                     <th class="text-center">Qira'ah Al-Quran</th>
                                     <th class="text-center">Hafalan Surat-surat Pendek</th>
                                     <th class="text-center">Hafalan Do'a</th>
                                     <th class="text-center">Kitabah</th>
                                     <th class="text-center">Hafalan Surat-surat Pendek</th>
                                     <th class="text-center">Hafalan Do'a</th>
                                     <th class="text-center">Bacaan Al-Quran</th>
                                     <th class="text-center">Makna dan Keterangan</th>
                                     <th class="text-center">Hafalan Surat-surat Pendek</th>
                                     <th class="text-center">Hafalan Do'a</th>
                                     <th class="text-center">Hafalan Dalil-dalil</th>
                                     <th class="text-center">Bacaan Al-Quran</th>
                                     <th class="text-center">Makna dan Keterangan</th>
                                     <th class="text-center">Hafalan Surat-surat Pendek</th>
                                     <th class="text-center">Hafalan Do'a</th>
                                     <th class="text-center">Hafalan Dalil-dalil</th>
                                     <th class="text-center">Bacaan Al-Quran</th>
                                     <th class="text-center">Makna dan Keterangan</th>
                                     <th class="text-center">Hafalan Surat-surat Pendek</th>
                                     <th class="text-center">Hafalan Do'a</th>
                                     <th class="text-center">Hafalan Dalil-dalil</th>
                                     <th class="text-center">Khutbah/Ceramah</th>
                                     <th class="text-center">Adzan dan Iqamah</th>
                                     <th class="text-center">Latihan Mengajar</th>
                                     <th class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($nilai as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td class="text-center"><?= $value['NIS'] ?></td>
                                         <td class="text-center"><?= $value['nama_santri'] ?></td>
                                         <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                         <td class="text-center"><?= $value['n1'] ?></td>
                                         <td class="text-center"><?= $value['n2'] ?></td>
                                         <td class="text-center"><?= $value['n3'] ?></td>
                                         <td class="text-center"><?= $value['n4'] ?></td>
                                         <td class="text-center"><?= $value['n5'] ?></td>
                                         <td class="text-center"><?= $value['n6'] ?></td>
                                         <td class="text-center"><?= $value['n7'] ?></td>
                                         <td class="text-center"><?= $value['n8'] ?></td>
                                         <td class="text-center"><?= $value['n9'] ?></td>
                                         <td class="text-center"><?= $value['n10'] ?></td>
                                         <td class="text-center"><?= $value['n11'] ?></td>
                                         <td class="text-center"><?= $value['n12'] ?></td>
                                         <td class="text-center"><?= $value['n13'] ?></td>
                                         <td class="text-center"><?= $value['n14'] ?></td>
                                         <td class="text-center"><?= $value['n15'] ?></td>
                                         <td class="text-center"><?= $value['n16'] ?></td>
                                         <td class="text-center"><?= $value['n17'] ?></td>
                                         <td class="text-center"><?= $value['n18'] ?></td>
                                         <td class="text-center"><?= $value['n19'] ?></td>
                                         <td class="text-center"><?= $value['n20'] ?></td>
                                         <td class="text-center"><?= $value['n21'] ?></td>
                                         <td class="text-center"><?= $value['n22'] ?></td>
                                         <td class="text-center"><?= $value['n23'] ?></td>
                                         <td class="text-center"><?= $value['n24'] ?></td>

                                         <td class="text-center">
                                             <a href="<?= base_url('data_nilai/ubahNilaiKonsepPraktikum/' . $value['id_kp']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_kp'] ?>"><i class="fa fa-trash"></i></button>
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
         <div class="modal fade" id="delete<?= $value['id_kp'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Nilai Konsep & Praktikum</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b><?= $title ?>&nbsp;<?= $value['nama_santri'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_nilai/delete1/' . $value['id_kp']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>
 </div>