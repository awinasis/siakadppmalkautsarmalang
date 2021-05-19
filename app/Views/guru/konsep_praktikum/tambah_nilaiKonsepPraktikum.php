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
                     <a href="<?= base_url('data_nilai/index') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <?php
                            echo form_open('data_nilai/addNilaiKonsepPraktikum');
                            ?>
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
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
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-center"><input name="NIS" class="form-control" type="number" required></td>
                                         <td><input name="nama_santri" class="form-control" required></td>
                                         <td>
                                             <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                                 <option value="#">-- Pilih --</option>
                                                 <option value="L">L</option>
                                                 <option value="P">P</option>
                                             </select>
                                         </td>
                                         <td><input name="n1" class="form-control" type="number" required></td>
                                         <td><input name="n2" class="form-control" type="number" required></td>
                                         <td><input name="n3" class="form-control" type="number" required></td>
                                         <td><input name="n4" class="form-control" type="number" required></td>
                                         <td><input name="n5" class="form-control" type="number" required></td>
                                         <td><input name="n6" class="form-control" type="number" required></td>
                                         <td><input name="n7" class="form-control" type="number" required></td>
                                         <td><input name="n8" class="form-control" type="number" required></td>
                                         <td><input name="n9" class="form-control" type="number" required></td>
                                         <td><input name="n10" class="form-control" type="number" required></td>
                                         <td><input name="n11" class="form-control" type="number" required></td>
                                         <td><input name="n12" class="form-control" type="number" required></td>
                                         <td><input name="n13" class="form-control" type="number" required></td>
                                         <td><input name="n14" class="form-control" type="number" required></td>
                                         <td><input name="n15" class="form-control" type="number" required></td>
                                         <td><input name="n16" class="form-control" type="number" required></td>
                                         <td><input name="n17" class="form-control" type="number" required></td>
                                         <td><input name="n18" class="form-control" type="number" required></td>
                                         <td><input name="n19" class="form-control" type="number" required></td>
                                         <td><input name="n20" class="form-control" type="number" required></td>
                                         <td><input name="n21" class="form-control" type="number" required></td>
                                         <td><input name="n22" class="form-control" type="number" required></td>
                                         <td><input name="n23" class="form-control" type="number" required></td>
                                         <td><input name="n24" class="form-control" type="number" required></td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <div class="modal-footer">
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                         <?php echo form_close() ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>