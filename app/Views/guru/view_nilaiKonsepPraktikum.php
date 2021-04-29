 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             <?= $title; ?>
         </h1>
         <br><br>

         <ol class="breadcrumb">
             <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> <?= $title; ?></h3>
                     <div class="box-body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped with-check">
                                 <thead>
                                     <tr>
                                         <th rowspan='2'>No.</th>
                                         <th rowspan='2'>NIS</th>
                                         <th rowspan='2'>Nama</th>
                                         <th rowspan='2'>L/P</th>
                                         <th rowspan='2'>Qira'ah Al-Quran</th>
                                         <th rowspan='2'>Hafalan Surat-surat Pendek</th>
                                         <th rowspan='2'>Hafalan Do'a</th>
                                         <th rowspan='2'>Kitabah</th>
                                         <th rowspan='2'>Hafalan Surat-surat Pendek</th>
                                         <th rowspan='2'>Hafalan Do'a</th>
                                         <th rowspan='2'>Bacaan Al-Quran</th>
                                         <th rowspan='2'>Makna dan Keterangan</th>
                                         <th rowspan='2'>Hafalan Surat-surat Pendek</th>
                                         <th rowspan='2'>Hafalan Do'a</th>
                                         <th rowspan='2'>Hafalan Dalil-dalil</th>
                                         <th rowspan='2'>Bacaan Al-Quran</th>
                                         <th rowspan='2'>Makna dan Keterangan</th>
                                         <th rowspan='2'>Hafalan Surat-surat Pendek</th>
                                         <th rowspan='2'>Hafalan Do'a</th>
                                         <th rowspan='2'>Hafalan Dalil-dalil</th>
                                         <th rowspan='2'>Bacaan Al-Quran</th>
                                         <th rowspan='2'>Makna dan Keterangan</th>
                                         <th rowspan='2'>Hafalan Surat-surat Pendek</th>
                                         <th rowspan='2'>Hafalan Do'a</th>
                                         <th rowspan='2'>Hafalan Dalil-dalil</th>
                                         <th rowspan='2'>Khutbah/Ceramah</th>
                                         <th rowspan='2'>Adzan dan Iqamah</th>
                                         <th rowspan='2'>Latihan Mengajar</th>
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
                                             <td><?= $value['n1'] ?></td>
                                             <td><?= $value['n2'] ?></td>
                                             <td><?= $value['n3'] ?></td>
                                             <td><?= $value['n4'] ?></td>
                                             <td><?= $value['n5'] ?></td>
                                             <td><?= $value['n6'] ?></td>
                                             <td><?= $value['n7'] ?></td>
                                             <td><?= $value['n8'] ?></td>
                                             <td><?= $value['n9'] ?></td>
                                             <td><?= $value['n10'] ?></td>
                                             <td><?= $value['n11'] ?></td>
                                             <td><?= $value['n12'] ?></td>
                                             <td><?= $value['n13'] ?></td>
                                             <td><?= $value['n14'] ?></td>
                                             <td><?= $value['n15'] ?></td>
                                             <td><?= $value['n16'] ?></td>
                                             <td><?= $value['n17'] ?></td>
                                             <td><?= $value['n18'] ?></td>
                                             <td><?= $value['n19'] ?></td>
                                             <td><?= $value['n20'] ?></td>
                                             <td><?= $value['n21'] ?></td>
                                             <td><?= $value['n22'] ?></td>
                                             <td><?= $value['n23'] ?></td>
                                             <td><?= $value['n24'] ?></td>
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