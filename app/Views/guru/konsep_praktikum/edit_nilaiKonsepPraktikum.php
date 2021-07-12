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
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/konsepPraktikum') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
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
                                             <?php echo form_open('data_nilai/editNilaiKonsepPraktikum/' . $value['id_kp']); ?>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td><input name="NIS" class="form-control text-center" type="number" value="<?= $value['NIS'] ?>" readonly></td>
                                             <td><input name="nama_santri" class="form-control" value="<?= $value['nama_santri'] ?>" readonly></td>
                                             <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                             <td class="text-center"><input name="n1" class="form-control" type="number" value="<?= $value['n1'] ?>"></td>
                                             <td class="text-center"><input name="n2" class="form-control" type="number" value="<?= $value['n2'] ?>"></td>
                                             <td class="text-center"><input name="n3" class="form-control" type="number" value="<?= $value['n3'] ?>"></td>
                                             <td class="text-center"><input name="n4" class="form-control" type="number" value="<?= $value['n4'] ?>"></td>
                                             <td class="text-center"><input name="n5" class="form-control" type="number" value="<?= $value['n5'] ?>"></td>
                                             <td class="text-center"><input name="n6" class="form-control" type="number" value="<?= $value['n6'] ?>"></td>
                                             <td class="text-center"><input name="n7" class="form-control" type="number" value="<?= $value['n7'] ?>"></td>
                                             <td class="text-center"><input name="n8" class="form-control" type="number" value="<?= $value['n8'] ?>"></td>
                                             <td class="text-center"><input name="n9" class="form-control" type="number" value="<?= $value['n9'] ?>"></td>
                                             <td class="text-center"><input name="n10" class="form-control" type="number" value="<?= $value['n10'] ?>"></td>
                                             <td class="text-center"><input name="n11" class="form-control" type="number" value="<?= $value['n11'] ?>"></td>
                                             <td class="text-center"><input name="n12" class="form-control" type="number" value="<?= $value['n12'] ?>"></td>
                                             <td class="text-center"><input name="n13" class="form-control" type="number" value="<?= $value['n13'] ?>"></td>
                                             <td class="text-center"><input name="n14" class="form-control" type="number" value="<?= $value['n14'] ?>"></td>
                                             <td class="text-center"><input name="n15" class="form-control" type="number" value="<?= $value['n15'] ?>"></td>
                                             <td class="text-center"><input name="n16" class="form-control" type="number" value="<?= $value['n16'] ?>"></td>
                                             <td class="text-center"><input name="n17" class="form-control" type="number" value="<?= $value['n17'] ?>"></td>
                                             <td class="text-center"><input name="n18" class="form-control" type="number" value="<?= $value['n18'] ?>"></td>
                                             <td class="text-center"><input name="n19" class="form-control" type="number" value="<?= $value['n19'] ?>"></td>
                                             <td class="text-center"><input name="n20" class="form-control" type="number" value="<?= $value['n20'] ?>"></td>
                                             <td class="text-center"><input name="n21" class="form-control" type="number" value="<?= $value['n21'] ?>"></td>
                                             <td class="text-center"><input name="n22" class="form-control" type="number" value="<?= $value['n22'] ?>"></td>
                                             <td class="text-center"><input name="n23" class="form-control" type="number" value="<?= $value['n23'] ?>"></td>
                                             <td class="text-center"><input name="n24" class="form-control" type="number" value="<?= $value['n24'] ?>"></td>

                                             <td class="text-center">
                                                 <button type="submit" class="btn btn-primary">Simpan</button>
                                             </td>
                                             <?php echo form_close() ?>
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