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
                     <a href="<?= base_url('data_nilai/tambahNilaiLimaSuksesSantri/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
                 </div>
                 <br>
                 <div class="box-body">
                     <div class="table-responsive">
                         <table id="example2" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th>No.</th>
                                     <th>NIS</th>
                                     <th>Nama Santri</th>
                                     <th>L/P</th>
                                     <th>Faham Jamaah</th>
                                     <th>Mandiri Ibadah</th>
                                     <th>Akhlaqul Karimah</th>
                                     <th>Entengan dalam sabilillah</th>
                                     <th>Sukses keilmuan</th>
                                     <th>Action</th>
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
                                         <td class="text-center"><?= $value['nilai_A'] ?></td>
                                         <td class="text-center"><?= $value['nilai_B'] ?></td>
                                         <td class="text-center"><?= $value['nilai_C'] ?></td>
                                         <td class="text-center"><?= $value['nilai_D'] ?></td>
                                         <td class="text-center"><?= $value['nilai_E'] ?></td>

                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" <?= $value['id_lss'] ?>><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" <?= $value['id_lss'] ?>><i class="fa fa-trash"></i></button>
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