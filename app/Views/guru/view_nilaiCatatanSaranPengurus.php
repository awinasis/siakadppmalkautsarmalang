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
                     <a href="<?= base_url('data_nilai/tambahCatatanSaran/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
                 </div>
                 <br>
                 <div class="box-body">
                     <div class="table-responsive">
                         <table id="example2" class="table table-bordered table-striped with-check">
                             <thead>
                                 <tr>
                                     <th rowspan='2' class="text-center">No.</th>
                                     <th rowspan='2' class="text-center">NIS</th>
                                     <th rowspan='2' class="text-center">Nama</th>
                                     <th rowspan='2' class="text-center">L/P</th>
                                     <th class="text-center">Catatan & Saran Pengurus</th>
                                     <th rowspan="2" class="text-center">Action</th>
                                 </tr>
                                 <tr>
                                     <th class="text-center">Deskripsi</th>
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
                                         <td><?= $value['catatan_saran'] ?></td>
                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" <?= $value['id_cs'] ?>><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" <?= $value['id_cs'] ?>><i class="fa fa-trash"></i></button>
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