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
                     <a href="<?= base_url('data_nilai/tambahNilaiMateri2/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
                 </div>
                 <br>
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
                                     <th rowspan="2" class="text-center">No.</th>
                                     <th rowspan="2" class="text-center">NIS</th>
                                     <th rowspan="2" class="text-center">Nama</th>
                                     <th rowspan="2" class="text-center">L/P</th>
                                     <th class="text-center" colspan=" 17">Pencapaian Materi</th>
                                     <th rowspan="2" class="text-center">Action</th>
                                 </tr>
                                 <tr>
                                     <th>Hafalan Juz 1-5</th>
                                     <th>Hafalan Juz 6-10</th>
                                     <th>Hafalan Juz 11-15</th>
                                     <th>Hafalan Juz 16-20</th>
                                     <th>Hafalan Juz 21-25</th>
                                     <th>Hafalan Juz 26-30</th>
                                     <th>Shahih Bukhari Juz 1</th>
                                     <th>Shahih Bukhari Juz 2</th>
                                     <th>Shahih Bukhari Juz 3</th>
                                     <th>Shahih Bukhari Juz 4</th>
                                     <th>Shahih Bukhari Juz 5</th>
                                     <th>Shahih Bukhari Juz 6</th>
                                     <th>Shahih Bukhari Juz 7</th>
                                     <th>Shahih Bukhari Juz 8</th>
                                     <th>Musthalah Hadits</th>
                                     <th>Syarah al-Asma' al-Husna</th>
                                     <th>Syarah Do'a ASAD</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($nilai as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td class="text-center"><?= $value['NIS']; ?></td>
                                         <td><?= $value['nama_santri']; ?></td>
                                         <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                         <td class="text-center"><?= $value['n_A'] ?>%</td>
                                         <td class="text-center"><?= $value['n_B'] ?>%</td>
                                         <td class="text-center"><?= $value['n_C'] ?>%</td>
                                         <td class="text-center"><?= $value['n_D'] ?>%</td>
                                         <td class="text-center"><?= $value['n_E'] ?>%</td>
                                         <td class="text-center"><?= $value['n_F'] ?>%</td>
                                         <td class="text-center"><?= $value['n_G'] ?>%</td>
                                         <td class="text-center"><?= $value['n_H'] ?>%</td>
                                         <td class="text-center"><?= $value['n_I'] ?>%</td>
                                         <td class="text-center"><?= $value['n_J'] ?>%</td>
                                         <td class="text-center"><?= $value['n_K'] ?>%</td>
                                         <td class="text-center"><?= $value['n_L'] ?>%</td>
                                         <td class="text-center"><?= $value['n_M'] ?>%</td>
                                         <td class="text-center"><?= $value['n_N'] ?>%</td>
                                         <td class="text-center"><?= $value['n_O'] ?>%</td>
                                         <td class="text-center"><?= $value['n_P'] ?>%</td>
                                         <td class="text-center"><?= $value['n_Q'] ?>%</td>

                                         <td class="text-center">
                                             <a href="<?= base_url('data_nilai/ubahNilaiMateri2/' . $value['id_nm2']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_nm2'] ?>"><i class="fa fa-trash"></i></button>
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
         <div class="modal fade" id="delete<?= $value['id_nm2'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Nilai Materi</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b><?= $title ?>&nbsp;<?= $value['nama_santri'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_nilai/delete/' . $value['id_nm2']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>
 </div>