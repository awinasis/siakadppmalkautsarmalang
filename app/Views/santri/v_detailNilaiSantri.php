<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
            <?= $title; ?>
        </h1>
        <br><br>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('santri') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Nilai Santri</li>
        </ol>
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-success box-solid">
                <div class="with-border"></div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Main content -->
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;">Data Transkrip Nilai Tahun Ajaran <?php echo $tahun_ajaran ?></h4>
                                        &emsp;&emsp;&emsp;
                                        <h3>Nilai Materi</h3>
                                        <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                             <tr>
                                                 <th rowspan="2" class="text-center">No.</th>
                                                 <th rowspan="2" class="text-center">NIS</th>
                                                 <th rowspan="2" class="text-center">Nama</th>
                                                 <th rowspan="2" class="text-center">L/P</th>
                                             </tr>
                                             <tr>
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
                                                     <td class="text-center"><?= $value['NIS']; ?></td>
                                                     <td><?= $value['nama_santri']; ?></td>
                                                     <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
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
                                                 </tr>
                                             <?php } ?>
                                         </tbody>
                                     </table>
                                 </div>
                                 <h3>Nilai Konsep Praktikum</h3>
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
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($nilaiKonsep as $key => $value) { ?>
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
                                     </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</div>