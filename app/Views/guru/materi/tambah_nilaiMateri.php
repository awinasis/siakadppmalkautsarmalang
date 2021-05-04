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
                                         <th rowspan='2'>Bacaan Surah Al-Baqarah</th>
                                         <th rowspan='2'>Bacaan Surah Al-Mulk s/d Al-Nas</th>
                                         <th rowspan='2'>Thaharah</th>
                                         <th rowspan='2'>Tajwid</th>
                                         <th rowspan='2'>Adab Pencari Ilmu</th>
                                         <th rowspan='2'>Huruf Hijaiyah</th>
                                         <th rowspan='2'>Khat wa Imla'</th>
                                         <th rowspan='2'>Kitabah Pegon</th>
                                         <th rowspan='2'>Tuntunan Tata Krama</th>
                                         <th rowspan='2'>Makna Al-Quran Juz 1 s.d 30</th>
                                         <th rowspan='2'>Bacaan Al-Quran</th>
                                         <th rowspan='2'>Kitab Al-Shalat</th>
                                         <th rowspan='2'>Kitab Al-Adab</th>
                                         <th rowspan='2'>Kitab Al-Adillah</th>
                                         <th rowspan='2'>Kitab Al-Shaum</th>
                                         <th rowspan='2'>Kitab Manasik wa Al-Jihad</th>
                                         <th rowspan='2'>Kitab Shifat Al-Jannah wa Al-Nar</th>
                                         <th rowspan='2'>Kitab Al-Da'awat</th>
                                         <th rowspan='2'>Kitab Al-Janaiz</th>
                                         <th rowspan='2'>Kitab Al-Shalat Al-Nawafil</th>
                                         <th rowspan='2'>Kitab Al-Ahkam</th>
                                         <th rowspan='2'>Kitab Al-Imarah</th>
                                         <th rowspan='2'>Kitab Al-Haji</th>
                                         <th rowspan='2'>Kitab Manasik Al-Haji</th>
                                         <th rowspan='2'>Kitab Al-Jihad</th>
                                         <th rowspan='2'>Kitab Al-Imarah min Kanzil Al-'ummal</th>
                                         <th rowspan='2'>Kumpulan Khutbah</th>
                                         <th rowspan='2'>Kitab Al-Faraidl</th>
                                         <th rowspan='2'>Kitab Hidayah Al-Mustafidz fi Al-Tajwid</th>
                                         <th rowspan='2'>Kitab Mabadi Fi al-Sharfi wa al-Nahwi</th>
                                         <th rowspan='2'>Kitab Wujubu Luzumu Al-Jama'ah</th>
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
                                             <td><input name="nilai1" class="form-control" required>%</td>
                                             <td><input name="nilai2" class="form-control" required>%</td>
                                             <td><input name="nilai3" class="form-control" required>%</td>
                                             <td><input name="nilai4" class="form-control" required>%</td>
                                             <td><input name="nilai5" class="form-control" required>%</td>
                                             <td><input name="nilai6" class="form-control" required>%</td>
                                             <td><input name="nilai7" class="form-control" required>%</td>
                                             <td><input name="nilai8" class="form-control" required>%</td>
                                             <td><input name="nilai9" class="form-control" required>%</td>
                                             <td><input name="nilai10" class="form-control" required>%</td>
                                             <td><input name="nilai11" class="form-control" required>%</td>
                                             <td><input name="nilai12" class="form-control" required>%</td>
                                             <td><input name="nilai13" class="form-control" required>%</td>
                                             <td><input name="nilai14" class="form-control" required>%</td>
                                             <td><input name="nilai15" class="form-control" required>%</td>
                                             <td><input name="nilai16" class="form-control" required>%</td>
                                             <td><input name="nilai17" class="form-control" required>%</td>
                                             <td><input name="nilai18" class="form-control" required>%</td>
                                             <td><input name="nilai19" class="form-control" required>%</td>
                                             <td><input name="nilai20" class="form-control" required>%</td>
                                             <td><input name="nilai21" class="form-control" required>%</td>
                                             <td><input name="nilai22" class="form-control" required>%</td>
                                             <td><input name="nilai23" class="form-control" required>%</td>
                                             <td><input name="nilai24" class="form-control" required>%</td>
                                             <td><input name="nilai25" class="form-control" required>%</td>
                                             <td><input name="nilai26" class="form-control" required>%</td>
                                             <td><input name="nilai27" class="form-control" required>%</td>
                                             <td><input name="nilai28" class="form-control" required>%</td>
                                             <td><input name="nilai29" class="form-control" required>%</td>
                                             <td><input name="nilai30" class="form-control" required>%</td>
                                             <td><input name="nilai31" class="form-control" required>%</td>
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