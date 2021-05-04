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
                 <div class="box-body">
                     <div class="table-responsive">
                         <table class="table table-bordered table-striped with-check">
                             <thead>
                                 <tr>
                                     <th rowspan='2'>No.</th>
                                     <th rowspan='2'>NIS</th>
                                     <th rowspan='2'>Nama</th>
                                     <th rowspan='2'>L/P</th>
                                     <th rowspan='2'>Pencak Silat</th>
                                     <th rowspan='2'>Sepakbola/Futsal</th>
                                     <th rowspan='2'>Senam Pagi</th>
                                     <th rowspan="2">Action</th>
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
                                         <td><?= $value['nilai_1'] ?></td>
                                         <td><?= $value['nilai_2'] ?></td>
                                         <td><?= $value['nilai_3'] ?></td>

                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" <?= $value['id_ne'] ?>><i class="fa fa-edit"> Edit</i></button>
                                             <button class="btn btn-danger btn-sm" <?= $value['id_ne'] ?>><i class="fa fa-trash"> Delete</i></button>
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
 </div>
 </div>