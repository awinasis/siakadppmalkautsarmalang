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
                     <a href="<?= base_url('data_nilai/index') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th rowspan="2" class="text-center">No</th>
                                         <th rowspan="2" class="text-center">NIS</th>
                                         <th rowspan="2" class="text-center">Nama</th>
                                         <th rowspan="2" class="text-center">L/P</th>
                                         <th class="text-center" colspan=" 31">Pencapaian Materi</th>
                                         <th rowspan="2" class="text-center">Action</th>
                                     </tr>
                                     <tr>
                                         <th class="text-center">Bacaan Surah Al-Baqarah</th>
                                         <th class="text-center">Bacaan Surah Al-Mulk s/d Al-Nas</th>
                                         <th class="text-center">Thaharah</th>
                                         <th class="text-center">Tajwid</th>
                                         <th class="text-center">Adab Pencari Ilmu</th>
                                         <th class="text-center">Huruf Hijaiyah</th>
                                         <th class="text-center">Khat wa Imla'</th>
                                         <th class="text-center">Kitabah Pegon</th>
                                         <th class="text-center">Tuntunan Tata Krama</th>
                                         <th class="text-center">Makna Al-Quran Juz 1 s.d 30</th>
                                         <th class="text-center">Bacaan Al-Quran</th>
                                         <th class="text-center">Kitab Al-Shalat</th>
                                         <th class="text-center">Kitab Al-Adab</th>
                                         <th class="text-center">Kitab Al-Adillah</th>
                                         <th class="text-center">Kitab Al-Shaum</th>
                                         <th class="text-center">Kitab Manasik wa Al-Jihad</th>
                                         <th class="text-center">Kitab Shifat Al-Jannah wa Al-Nar</th>
                                         <th class="text-center">Kitab Al-Da'awat</th>
                                         <th class="text-center">Kitab Al-Janaiz</th>
                                         <th class="text-center">Kitab Al-Shalat Al-Nawafil</th>
                                         <th class="text-center">Kitab Al-Ahkam</th>
                                         <th class="text-center">Kitab Al-Imarah</th>
                                         <th class="text-center">Kitab Al-Haji</th>
                                         <th class="text-center">Kitab Manasik Al-Haji</th>
                                         <th class="text-center">Kitab Al-Jihad</th>
                                         <th class="text-center">Kitab Al-Imarah min Kanzil Al-'ummal</th>
                                         <th class="text-center">Kumpulan Khutbah</th>
                                         <th class="text-center">Kitab Al-Faraidl</th>
                                         <th class="text-center">Kitab Hidayah Al-Mustafidz fi Al-Tajwid</th>
                                         <th class="text-center">Kitab Mabadi Fi al-Sharfi wa al-Nahwi</th>
                                         <th class="text-center">Kitab Wujubu Luzumu Al-Jama'ah</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($nilai as $key => $value) { ?>
                                         <tr>
                                             <?php echo form_open('data_nilai/editNilaiMateri/' . $value['id_nm']); ?>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td class="text-center"><input name="NIS" class="form-control" type="number" value="<?= $value['NIS'] ?>" readonly></td>
                                             <td><input name="nama_santri" class="form-control" value="<?= $value['nama_santri'] ?>" readonly></td>
                                             <td>
                                                 <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?= $value['jenis_kelamin'] ?>">
                                                     <option value="L" <?= $value['jenis_kelamin'] == "L" ? "selected" : ""; ?>>L</option>
                                                     <option value="P" <?= $value['jenis_kelamin'] == "P" ? "selected" : ""; ?>>P</option>
                                                 </select>
                                             </td>
                                             <td><input name="nilai1" class="form-control" type="number" value="<?= $value['nilai1'] ?>">%</td>
                                             <td><input name="nilai2" class="form-control" type="number" value="<?= $value['nilai2'] ?>">%</td>
                                             <td><input name="nilai3" class="form-control" type="number" value="<?= $value['nilai3'] ?>">%</td>
                                             <td><input name="nilai4" class="form-control" type="number" value="<?= $value['nilai4'] ?>">%</td>
                                             <td><input name="nilai5" class="form-control" type="number" value="<?= $value['nilai5'] ?>">%</td>
                                             <td><input name="nilai6" class="form-control" type="number" value="<?= $value['nilai6'] ?>">%</td>
                                             <td><input name="nilai7" class="form-control" type="number" value="<?= $value['nilai7'] ?>">%</td>
                                             <td><input name="nilai8" class="form-control" type="number" value="<?= $value['nilai8'] ?>">%</td>
                                             <td><input name="nilai9" class="form-control" type="number" value="<?= $value['nilai9'] ?>">%</td>
                                             <td><input name="nilai10" class="form-control" type="number" value="<?= $value['nilai10'] ?>">%</td>
                                             <td><input name="nilai11" class="form-control" type="number" value="<?= $value['nilai11'] ?>">%</td>
                                             <td><input name="nilai12" class="form-control" type="number" value="<?= $value['nilai12'] ?>">%</td>
                                             <td><input name="nilai13" class="form-control" type="number" value="<?= $value['nilai13'] ?>">%</td>
                                             <td><input name="nilai14" class="form-control" type="number" value="<?= $value['nilai14'] ?>">%</td>
                                             <td><input name="nilai15" class="form-control" type="number" value="<?= $value['nilai15'] ?>">%</td>
                                             <td><input name="nilai16" class="form-control" type="number" value="<?= $value['nilai16'] ?>">%</td>
                                             <td><input name="nilai17" class="form-control" type="number" value="<?= $value['nilai17'] ?>">%</td>
                                             <td><input name="nilai18" class="form-control" type="number" value="<?= $value['nilai18'] ?>">%</td>
                                             <td><input name="nilai19" class="form-control" type="number" value="<?= $value['nilai19'] ?>">%</td>
                                             <td><input name="nilai20" class="form-control" type="number" value="<?= $value['nilai20'] ?>">%</td>
                                             <td><input name="nilai21" class="form-control" type="number" value="<?= $value['nilai21'] ?>">%</td>
                                             <td><input name="nilai22" class="form-control" type="number" value="<?= $value['nilai22'] ?>">%</td>
                                             <td><input name="nilai23" class="form-control" type="number" value="<?= $value['nilai23'] ?>">%</td>
                                             <td><input name="nilai24" class="form-control" type="number" value="<?= $value['nilai24'] ?>">%</td>
                                             <td><input name="nilai25" class="form-control" type="number" value="<?= $value['nilai25'] ?>">%</td>
                                             <td><input name="nilai26" class="form-control" type="number" value="<?= $value['nilai26'] ?>">%</td>
                                             <td><input name="nilai27" class="form-control" type="number" value="<?= $value['nilai27'] ?>">%</td>
                                             <td><input name="nilai28" class="form-control" type="number" value="<?= $value['nilai28'] ?>">%</td>
                                             <td><input name="nilai29" class="form-control" type="number" value="<?= $value['nilai29'] ?>">%</td>
                                             <td><input name="nilai30" class="form-control" type="number" value="<?= $value['nilai30'] ?>">%</td>
                                             <td><input name="nilai31" class="form-control" type="number" value="<?= $value['nilai31'] ?>">%</td>
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