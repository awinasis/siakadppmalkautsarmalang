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
             <li><a href="<?= base_url('data_nilai/konsepPraktikum') ?>">Nilai Konsep & Praktikum</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>
     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>
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
                                             <td><input name="n1" class="form-control" required></td>
                                             <td><input name="n2" class="form-control" required></td>
                                             <td><input name="n3" class="form-control" required></td>
                                             <td><input name="n4" class="form-control" required></td>
                                             <td><input name="n5" class="form-control" required></td>
                                             <td><input name="n6" class="form-control" required></td>
                                             <td><input name="n7" class="form-control" required></td>
                                             <td><input name="n8" class="form-control" required></td>
                                             <td><input name="n9" class="form-control" required></td>
                                             <td><input name="n10" class="form-control" required></td>
                                             <td><input name="n11" class="form-control" required></td>
                                             <td><input name="n12" class="form-control" required></td>
                                             <td><input name="n13" class="form-control" required></td>
                                             <td><input name="n14" class="form-control" required></td>
                                             <td><input name="n15" class="form-control" required></td>
                                             <td><input name="n16" class="form-control" required></td>
                                             <td><input name="n17" class="form-control" required></td>
                                             <td><input name="n18" class="form-control" required></td>
                                             <td><input name="n19" class="form-control" required></td>
                                             <td><input name="n20" class="form-control" required></td>
                                             <td><input name="n21" class="form-control" required></td>
                                             <td><input name="n22" class="form-control" required></td>
                                             <td><input name="n23" class="form-control" required></td>
                                             <td><input name="n24" class="form-control" required></td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                         <div class="modal-footer">
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>