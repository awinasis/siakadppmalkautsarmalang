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
                     <a href="<?= base_url('data_nilai/tambahNilaiMateri/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
                 </div>
                 <br>

                 <div class="box-body">
                     <div class="table-responsive">
                         <table class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th rowspan="2">No.</th>
                                     <th rowspan="2">NIS</th>
                                     <th rowspan="2">Nama</th>
                                     <th rowspan="2">L/P</th>
                                     <th class="text-center" colspan=" 31">Pencapaian Materi</th>
                                     <th rowspan="2" class="text-center">Action</th>
                                 </tr>
                                 <tr>
                                     <th rowspan="2">Bacaan Surah Al-Baqarah</th>
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
                                 <?php
                                    foreach ($nilai as $key => $value) { ?>
                                     <?php
                                        $konek = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");

                                        $no = 1;
                                        $jumlah = null;
                                        $data = mysqli_query($konek, "SELECT * FROM tbl_santri");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                         <tr>
                                             <td class="text-center"><?php echo $no++; ?></td>
                                             <td class="text-center"><?php echo $d['NIS']; ?></td>
                                             <td><?php echo $d['nama_santri']; ?></td>
                                             <td class="text-center"><?php echo $d['jenis_kelamin'] ?></td>
                                             <td class="text-center"><?= $value['nilai1'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai2'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai3'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai4'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai5'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai6'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai7'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai8'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai9'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai10'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai11'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai12'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai13'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai14'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai15'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai16'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai17'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai18'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai19'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai20'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai21'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai22'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai23'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai24'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai25'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai26'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai27'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai28'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai29'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai30'] ?>%</td>
                                             <td class="text-center"><?= $value['nilai31'] ?>%</td>

                                             <td class="text-center">
                                                 <button class="btn btn-warning btn-sm" <?= $value['id_nm'] ?>><i class="fa fa-edit"></i></button>
                                                 <button class="btn btn-danger btn-sm" <?= $value['id_nm'] ?>><i class="fa fa-trash"></i></button>
                                             </td>
                                         </tr>
                                     <?php } ?>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>