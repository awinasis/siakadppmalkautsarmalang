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
             <li><a href="<?= base_url('data_nilai/index') ?>">Nilai Materi</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/index') ?>" class="right"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No.</th>
                                         <th>NIS</th>
                                         <th>Nama</th>
                                         <th>L/P</th>
                                         <th>Bacaan Surah Al-Baqarah</th>
                                         <th>Bacaan Surah Al-Mulk s/d Al-Nas</th>
                                         <th>Thaharah</th>
                                         <th>Tajwid</th>
                                         <th>Adab Pencari Ilmu</th>
                                         <th>Huruf Hijaiyah</th>
                                         <th>Khat wa Imla'</th>
                                         <th>Kitabah Pegon</th>
                                         <th>Tuntunan Tata Krama</th>
                                         <th>Makna Al-Quran Juz 1 s.d 30</th>
                                         <th>Bacaan Al-Quran</th>
                                         <th>Kitab Al-Shalat</th>
                                         <th>Kitab Al-Adab</th>
                                         <th>Kitab Al-Adillah</th>
                                         <th>Kitab Al-Shaum</th>
                                         <th>Kitab Manasik wa Al-Jihad</th>
                                         <th>Kitab Shifat Al-Jannah wa Al-Nar</th>
                                         <th>Kitab Al-Da'awat</th>
                                         <th>Kitab Al-Janaiz</th>
                                         <th>Kitab Al-Shalat Al-Nawafil</th>
                                         <th>Kitab Al-Ahkam</th>
                                         <th>Kitab Al-Imarah</th>
                                         <th>Kitab Al-Haji</th>
                                         <th>Kitab Manasik Al-Haji</th>
                                         <th>Kitab Al-Jihad</th>
                                         <th>Kitab Al-Imarah min Kanzil Al-'ummal</th>
                                         <th>Kumpulan Khutbah</th>
                                         <th>Kitab Al-Faraidl</th>
                                         <th>Kitab Hidayah Al-Mustafidz fi Al-Tajwid</th>
                                         <th>Kitab Mabadi Fi al-Sharfi wa al-Nahwi</th>
                                         <th>Kitab Wujubu Luzumu Al-Jama'ah</th>
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
                                             <td><input name="nilai1" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai2" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai3" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai4" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai5" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai6" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai7" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai8" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai9" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai10" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai11" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai12" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai13" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai14" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai15" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai16" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai17" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai18" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai19" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai20" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai21" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai22" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai23" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai24" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai25" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai26" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai27" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai28" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai29" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai30" class="form-control" type="number" required>%</td>
                                             <td><input name="nilai31" class="form-control" type="number" required>%</td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                         <div class="modal-footer">
                             <a href="<?= base_url('data_nilai/index') ?>" type="submit" class="btn btn-primary">Simpan</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>