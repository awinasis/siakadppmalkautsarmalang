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
                                             <td><?= $value['nilai1'] ?>%</td>
                                             <td><?= $value['nilai2'] ?>%</td>
                                             <td><?= $value['nilai3'] ?>%</td>
                                             <td><?= $value['nilai4'] ?>%</td>
                                             <td><?= $value['nilai5'] ?>%</td>
                                             <td><?= $value['nilai6'] ?>%</td>
                                             <td><?= $value['nilai7'] ?>%</td>
                                             <td><?= $value['nilai8'] ?>%</td>
                                             <td><?= $value['nilai9'] ?>%</td>
                                             <td><?= $value['nilai10'] ?>%</td>
                                             <td><?= $value['nilai11'] ?>%</td>
                                             <td><?= $value['nilai12'] ?>%</td>
                                             <td><?= $value['nilai13'] ?>%</td>
                                             <td><?= $value['nilai14'] ?>%</td>
                                             <td><?= $value['nilai15'] ?>%</td>
                                             <td><?= $value['nilai16'] ?>%</td>
                                             <td><?= $value['nilai17'] ?>%</td>
                                             <td><?= $value['nilai18'] ?>%</td>
                                             <td><?= $value['nilai19'] ?>%</td>
                                             <td><?= $value['nilai20'] ?>%</td>
                                             <td><?= $value['nilai21'] ?>%</td>
                                             <td><?= $value['nilai22'] ?>%</td>
                                             <td><?= $value['nilai23'] ?>%</td>
                                             <td><?= $value['nilai24'] ?>%</td>
                                             <td><?= $value['nilai25'] ?>%</td>
                                             <td><?= $value['nilai26'] ?>%</td>
                                             <td><?= $value['nilai27'] ?>%</td>
                                             <td><?= $value['nilai28'] ?>%</td>
                                             <td><?= $value['nilai29'] ?>%</td>
                                             <td><?= $value['nilai30'] ?>%</td>
                                             <td><?= $value['nilai31'] ?>%</td>
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