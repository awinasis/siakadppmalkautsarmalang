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
                     <a href="<?= base_url('data_nilai/tambahNilaiIP/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
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
                         <table id="example1" class="table table-bordered table-striped with-check">
                             <thead>
                                 <tr>
                                     <th class="text-center" rowspan='2'>No.</th>
                                     <th class="text-center" rowspan='2'>NIS</th>
                                     <th class="text-center" rowspan='2'>Nama</th>
                                     <th class="text-center" rowspan='2'>L/P</th>
                                     <th class="text-center" colspan=" 10">Nilai Indeks Prestasi (IP)</th>
                                     <th class="text-center" rowspan="2">Action</th>
                                 </tr>
                                 <tr>
                                     <th class="text-center">Smt 1</th>
                                     <th class="text-center">Smt 2</th>
                                     <th class="text-center">Smt 3</th>
                                     <th class="text-center">Smt 4</th>
                                     <th class="text-center">Smt 5</th>
                                     <th class="text-center">Smt 6</th>
                                     <th class="text-center">Smt 7</th>
                                     <th class="text-center">Smt 8</th>
                                     <th class="text-center">Smt 9</th>
                                     <th class="text-center">Smt > 10</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($nilai as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td class="text-center"><?= $value['NIS'] ?></td>
                                         <td><?= $value['nama_santri'] ?></td>
                                         <td><?= $value['jenis_kelamin'] ?></td>
                                         <td><?= $value['nilai_IP1'] ?></td>
                                         <td><?= $value['nilai_IP2'] ?></td>
                                         <td><?= $value['nilai_IP3'] ?></td>
                                         <td><?= $value['nilai_IP4'] ?></td>
                                         <td><?= $value['nilai_IP5'] ?></td>
                                         <td><?= $value['nilai_IP6'] ?></td>
                                         <td><?= $value['nilai_IP7'] ?></td>
                                         <td><?= $value['nilai_IP8'] ?></td>
                                         <td><?= $value['nilai_IP9'] ?></td>
                                         <td><?= $value['nilai_IP10'] ?></td>

                                         <td class="text-center">
                                             <a href="<?= base_url('data_nilai/ubahNilaiIndeksPrestasi/' . $value['id_ip']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_ip'] ?>"><i class="fa fa-trash"></i></button>
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
         <div class="modal fade" id="delete<?= $value['id_ip'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Nilai Indeks Prestasi</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b><?= $title ?>&nbsp;<?= $value['nama_santri'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_nilai/delete6/' . $value['id_ip']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>
 </div>