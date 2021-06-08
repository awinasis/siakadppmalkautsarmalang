<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal Tabel HTML</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            background-color: #bebebe;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        @media print {

            .btn,
            footer {
                display: none;
            }
        }

        section {
            /*width: 210mm;*/
            /* height: 330mm; */
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <script type="text/javascript">
        window.print();
        window.onfocus = function() {
            window.close();
        }
    </script>
</head>

</html>

<section class="invoice">
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10">
            <table class="table table-bordered">
                <tr>
                    <td rowspan="3" class="text-center"><img src="<?= base_url('/uploads/LogoPPM_Hitam.png') ?>" height="120px"></td>
                    <td colspan="3" class="text-center">
                        <h4><b>PONDOK PESANTREN MAHASISWA MALANG RAYA</b></h4>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">
                        <h5>Jl. Bend. Nawangan 13 Karang Besuki Sukun Telp. 0341 (553884) Kota Malang</h5>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">
                        <h5>E-mail: ppm_malangraya@yahoo.com Kode Pos 65145</h5>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <h2 class="page-header"></h2>
    <tr>
        <th width="100px" class="text-center">
            <h3 class="text-center"><b>LAPORAN HASIL BELAJAR</b></h3>
        </th>
    </tr>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <table class="table table-bordered">
                <tr>
                    <td width="100px">Tahun Akademik :</td>
                    <td width="30px">:</td>
                    <td><?= $ta_aktif['tahun_akademik']; ?></td>
                </tr>
                <tr>
                    <td width="100px">NIS</td>
                    <td width="30px">:</td>
                    <td><?= $rapor['NIS']; ?></td>
                </tr>

                <tr>
                    <td width="100px">Nama Santri</td>
                    <td width="30px">:</td>
                    <td><?= $rapor['nama_santri']; ?></td>
                </tr>

                <tr>
                    <td width="100px">Tgl. Masuk PPM</td>
                    <td width="30px">:</td>
                    <td>
                        <input class="col-lg-8" name="tanggal" type="date" class="form-control" placeholder="date" required>
                    </td>
                </tr>

                <tr>
                    <td width="100px">Semester/Angkatan</td>
                    <td width="30px">:</td>
                    <td><input class="col-lg-8" name="smt_angkatan" class="form-control" placeholder="Ex: Dua/2019" required></td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <h4><b>1. Materi Pokok</b></h4>
    <table>
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Materi</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>Bacaan Surah Al-Baqarah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai1']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td>Bacaan Surah Al-Mulk s/d Al-Nas</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai2']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td>Thaharah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai3']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td>Tajwid</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai4']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td>Adab Pencari Ilmu</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai5']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td>Huruf Hijaiyah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai6']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">7</td>
                <td>Khat wa Imla'</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai7']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">8</td>
                <td>Kitabah Pegon</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai8']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">9</td>
                <td>Tuntunan Tata Krama</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai9']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">10</td>
                <td>Makna Al-Qur'an Juz 1 s.d 30</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai10']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">11</td>
                <td>Bacaan Al-Qur'an</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai11']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">12</td>
                <td>Kitab Al-Shalat</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai12']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">13</td>
                <td>Kitab Al-Adab</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai13']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">14</td>
                <td>Kitab Al-Adillah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai14']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">15</td>
                <td>Kitab Al-Shaum</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai15']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">16</td>
                <td>Kitab Manasik wa Al-Jihad</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai16']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">17</td>
                <td>Kitab Shifat Al-Jannah wa Al-Nar</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai17']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">18</td>
                <td>Kitab Al-Da'awat</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai18']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">19</td>
                <td>Kitab Al-Janaiz</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai19']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">20</td>
                <td>Kitab Al-Shalat Al-Nawafil</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai20']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">21</td>
                <td>Kitab Al-Ahkam</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai21']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">22</td>
                <td>Kitab Al-Imarah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai22']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">23</td>
                <td>Kitab Al-Haji</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai23']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">24</td>
                <td>Kitab Manasik Al-Haji</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai24']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">25</td>
                <td>Kitab Al-Jihad</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai25']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">26</td>
                <td>Kitab Al-Imarah min Kanzil Al-'ummal</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai26']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">27</td>
                <td>Kumpulan Khutbah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai27']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">28</td>
                <td>Kitab Al-Faraidl</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai28']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">29</td>
                <td>Kitab Hidayah Al-Mustafidz fi Al-Tajwid</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai29']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">30</td>
                <td>Kitab Mabadi Fi Al-Sharfi wa Al-Nahwi</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai30']; ?>%</td>
            </tr>
            <tr>
                <td class="text-center">31</td>
                <td>Kitab Wujubu Luzumu Al-Jama'ah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['nilai31']; ?>%</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-center">&emsp; Prosentase Materi Klasikal</th>
                <td class="text-center">%</td>
            </tr>
            <tr>
                <th colspan="3" class="text-center">&emsp; Prosentase Materi yang Wajib di Khatamkan</th>
                <td class="text-center">%</td>
            </tr>
        </tfoot>
    </table>
    <br><br>
    <h4><b>2. Pemahaman Konsep & Praktikum</b></h4>
    <table>
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>No.</th>
                <th class="text-center" rowspan='2'>Materi</th>
                <th class="text-center" rowspan='2'>Kelas</th>
                <th class="text-center" colspan="9">Nilai</th>
            </tr>
            <tr>
                <th class="text-center">Angka</th>
                <th class="text-center">Huruf</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">Qira'ah Al-quran</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n1']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="text-center">Hafalan surat-surat pendek</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n2']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td class="text-center">Hafalan do'a</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n3']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td class="text-center">Kitabah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n4']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td class="text-center">Hafalan surat-surat pendek</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n5']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td class="text-center">Hafalan do'a</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n6']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">7</td>
                <td class="text-center">Bacaan Al-qur'an</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n7']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">8</td>
                <td class="text-center">Makna dan keterangan</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n8']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">9</td>
                <td class="text-center">Hafalan surat-surat pendek</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n9']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">10</td>
                <td class="text-center">Hafalan do'a</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n10']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">11</td>
                <td class="text-center">Hafalan dalil-dalil</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n11']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">12</td>
                <td class="text-center">Bacaan Al-qur'an</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n12']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">13</td>
                <td class="text-center">Makna dan keterangan</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n13']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">14</td>
                <td class="text-center">Hafalan surat-surat pendek</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n14']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">15</td>
                <td class="text-center">Hafalan do'a</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n15']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">16</td>
                <td class="text-center">Hafalan dalil-dalil</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n16']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">17</td>
                <td class="text-center">Bacaan Al-qur'an</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n17']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">18</td>
                <td class="text-center">Makna dan keterangan</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n18']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">19</td>
                <td class="text-center">Hafalan surat-surat pendek</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n19']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">20</td>
                <td class="text-center">Hafalan do'a</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n20']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">21</td>
                <td class="text-center">Hafalan dalil-dalil</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n21']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">22</td>
                <td class="text-center">Khutbah/ceramah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n22']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">23</td>
                <td class="text-center">Adzan dan iqamah</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n23']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">24</td>
                <td class="text-center">Latihan mengajar</td>
                <td class="text-center"></td>
                <td class="text-center"><?= $rapor['n24']; ?></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-center">&emsp; Jumlah</th>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>1
            <tr>
                <th colspan="3" class="text-center">&emsp; Rata-rata</th>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tfoot>
    </table>
    <br><br>
    <h4><b>3. Sikap & Perilaku</b></h4>
    <table>
        <thead>
            <tr>
                <th class="text-center">Kegiatan</th>
                <th class="text-center">Penilaian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ketaatan</td>
                <td class="text-center"><?= $rapor['nl1']; ?></td>
            </tr>
            <tr>
                <td>Keta'dhiman</td>
                <td class="text-center"><?= $rapor['nl2']; ?></td>
            </tr>
            <tr>
                <td>Kedisiplinan</td>
                <td class="text-center"><?= $rapor['nl3']; ?></td>
            </tr>
            <tr>
                <td>Kerapian</td>
                <td class="text-center"><?= $rapor['nl4']; ?></td>
            </tr>
            <tr>
                <td>Kesemangatan</td>
                <td class="text-center"><?= $rapor['nl5']; ?></td>
            </tr>
            <tr>
                <td>Partisipasi dalam kegiatan pembelajaran</td>
                <td class="text-center"><?= $rapor['nl6']; ?></td>
            </tr>
            <tr>
                <td>Etika terhadap teman sejawat</td>
                <td class="text-center"><?= $rapor['nl7']; ?></td>
            </tr>
            <tr>
                <td>Kerjasama dalam kelompok</td>
                <td class="text-center"><?= $rapor['nl8']; ?></td>
            </tr>
            <tr>
                <td>Kelengkapan dan kerapian buku dan catatan</td>
                <td class="text-center"><?= $rapor['nl9']; ?></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>4. Lima Sukses Santri</b></h4>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Jenis</th>
                <th>Penilaian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>Faham Jama'ah</td>
                <td class="text-center"><?= $rapor['nilai_A']; ?></td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td>Mandiri Ibadah</td>
                <td class="text-center"><?= $rapor['nilai_B']; ?></td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td>Akhlaqul Karimah</td>
                <td class="text-center"><?= $rapor['nilai_C']; ?></td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td>Entengan dalam Sabilillah</td>
                <td class="text-center"><?= $rapor['nilai_D']; ?></td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td>Sukses Keilmuan</td>
                <td class="text-center"><?= $rapor['nilai_E']; ?></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>5. Kegiatan Ekstrakurikuler/Pengembangan Diri</b></h4>
    <table>
        <thead>
            <tr>
                <th class="text-center">Kegiatan</th>
                <th class="text-center">Penilaian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pencak Silat</td>
                <td class="text-center"><?= $rapor['nilai_1']; ?></td>
            </tr>
            <tr>
                <td>Sepakbola/Futsal</td>
                <td class="text-center"><?= $rapor['nilai_2']; ?></td>
            </tr>
            <tr>
                <td>Senam Pagi</td>
                <td class="text-center"><?= $rapor['nilai_3']; ?></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>6. Absensi/Keaktifan dalam Kegiatan</b></h4>
    <table>
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>Jumlah Kegiatan</th>
                <th class="text-center" colspan=" 4">Keterangan</th>
                <th class="text-center" rowspan='2'>Prosentase</th>
            </tr>
            <tr>
                <th class="text-center">Hadir</th>
                <th class="text-center">Alpha</th>
                <th class="text-center">Izin</th>
                <th class="text-center">Sakit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center">%</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>7. Prestasi Kuliah</b></h4>
    <table>
        <thead>
            <tr>
                <th class="text-center">Semester</th>
                <th class="text-center">Indeks Prestasi</th>
                <th class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">I</td>
                <td class="text-center"><?= $rapor['nilai_IP1']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">II</td>
                <td class="text-center"><?= $rapor['nilai_IP2']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">III</td>
                <td class="text-center"><?= $rapor['nilai_IP3']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">IV</td>
                <td class="text-center"><?= $rapor['nilai_IP4']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">V</td>
                <td class="text-center"><?= $rapor['nilai_IP5']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">VI</td>
                <td class="text-center"><?= $rapor['nilai_IP6']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">VII</td>
                <td class="text-center"><?= $rapor['nilai_IP7']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">VIII</td>
                <td class="text-center"><?= $rapor['nilai_IP8']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">IX</td>
                <td class="text-center"><?= $rapor['nilai_IP9']; ?></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td class="text-center">&gt;= X</td>
                <td class="text-center"><?= $rapor['nilai_IP10']; ?></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th class="text-center">IPK</th>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tfoot>
    </table>
    <br><br>
    <h4><b>8. Catatan dan Saran Pengurus</b></h4>
    <table width="50%" border="2" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>Catatan & Saran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"><?= $rapor['catatan_saran']; ?></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>9. Keputusan</b></h4>
    <div class="form-group">
        <h5>&emsp;Berdasarkan hasil pencapaian tersebut, maka santri yang bersangkutan dinilai</h5>
        <div class="col-lg-2">
            <select name="nilai" class="form-control" required>
                <option value="#">-- Nilai --</option>
                <option value="Sangat Baik">Sangat Baik</option>
                <option value="Baik">Baik</option>
                <option value="Cukup">Cukup</option>
            </select>
        </div>
    </div>
    <br><br><br>
    <div class="row pull-right">
        <div class="col-sm-12">
            <tr>
                <td>Malang, <?= date('d-m-Y') ?></td>
            </tr>
        </div>
    </div>
    <br><br><br>
    <center>
        <h4><b>Mengetahui</b></h4>
    </center>
    <br><br>
    <table class="table table-bordered">
        <tr height="180px">
            <td class="text-center">Ketua Pondok Pesantren</td>
            <td class="text-center">Orang Tua/Wali Santri</td>
            <td class="text-center">Guru Ma'had</td>
        </tr>
        <td class="text-center">(____________________________)</td>
        <td class="text-center">(____________________________)</td>
        <td class="text-center">(____________________________)</td>
    </table>
</section>