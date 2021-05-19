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
                 <br>
                 <div class="box-body">
                     <div class="table-responsive">
                         <table id="example2" class="table table-bordered table-striped">
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
                                             <button class="btn btn-warning btn-sm" <?= $value['id_kp'] ?>><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" <?= $value['id_kp'] ?>><i class="fa fa-trash"></i></button>
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