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
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        section {
            width: 210mm;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
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
    <b>____________________________________________________________________________________________________________</b>
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
    <table width="100%" border="2" align="center" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Materi</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-center">&emsp; Prosentase Materi Klasikal</th>
                <td class="text-center"><input name="klasikal" class="form-control" type="number" required>%</td>
            </tr>
            <tr>
                <th colspan="3" class="text-center">&emsp; Prosentase Materi yang Wajib di Khatamkan</th>
                <td class="text-center"><input name="wajib" class="form-control" type="number" required>%</td>
            </tr>
        </tfoot>
    </table>
    <br><br>
    <h4><b>2. Pemahaman Konsep & Praktikum</b></h4>
    <table width="100%" border="2" align="center" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>No.</th>
                <th class="text-center" rowspan='2'>Materi</th>
                <th class="text-center" rowspan='2'>Kelas</th>
                <th class="text-center" colspan=" 9">Nilai</th>
            </tr>
            <tr>
                <th class="text-center">Angka</th>
                <th class="text-center">Huruf</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"><input name="huruf" class="form-control" required></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-center">&emsp; Jumlah</th>
                <td class="text-center"><input name="angka" class="form-control" required></td>
                <td class="text-center"><input name="angka1" class="form-control" required></td>
            </tr>1
            <tr>
                <th colspan="3" class="text-center">&emsp; Rata-rata</th>
                <td class="text-center"><input name="huruf" class="form-control" required></td>
                <td class="text-center"><input name="huruf1" class="form-control" required></td>
            </tr>
        </tfoot>
    </table>
    <br><br>
    <h4><b>3. Sikap & Perilaku</b></h4>
    <table width="50%" border="2" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan="2">Jenis</th>
                <th class="text-center" rowspan='2'>Penilaian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">Ketaatan</td>
                <td class="text-center"><?= $rapor['nl1']; ?></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>4. Lima Sukses Santri</b></h4>
    <table width="50%" border="2" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>No.</th>
                <th class="text-center" rowspan='2'>Jenis</th>
                <th class="text-center" rowspan='2'>Penilaian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>5. Kegiatan Ekstrakurikuler/Pengembangan Diri</b></h4>
    <table width="50%" border="2" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>Kegiatan</th>
                <th class="text-center" rowspan='2'>Penilaian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>6. Absensi/Keaktifan dalam Kegiatan</b></h4>
    <table width="100%" border="2" align="center" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>Jumlah Kegiatan</th>
                <th class="text-center" colspan=" 8">Keterangan</th>
                <th class="text-center" rowspan='2'>Prosentase</th>
            </tr>
            <tr>
                <th class="text-center">Hadir</th>
                <th class="text-center">Alpha</th>
                <th class="text-center">Belajar</th>
                <th class="text-center">Izin</th>
                <th class="text-center">Izin Terlambat</th>
                <th class="text-center">Nugas</th>
                <th class="text-center">Sakit</th>
                <th class="text-center">Terlambat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"><input class="col-lg-12" name="jumlah_kegiatan" class="form-control" required></td>
                <td class="text-center"><input class="col-lg-12" name="absen" class="form-control" required></td>
                </td>
                <td class="text-center"><input class="col-lg-12" name="absen1" class="form-control" required></td>
                </td>
                <td class="text-center"><input class="col-lg-12" name="absen2" class="form-control" required></td>
                </td>
                <td class="text-center"><input class="col-lg-12" name="absen3" class="form-control" required></td>
                </td>
                <td class="text-center"><input class="col-lg-12" name="absen4" class="form-control" required></td>
                </td>
                <td class="text-center"><input class="col-lg-12" name="absen5" class="form-control" required></td>
                </td>
                <td class="text-center"><input class="col-lg-12" name="absen6" class="form-control" required></td>
                </td>
                <td class="text-center"><input class="col-lg-12" name="absen7" class="form-control" required></td>
                </td>
                <td class="text-center"><input class="col-lg-10" name="prosentase" class="form-control" required>%</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4><b>7. Prestasi Kuliah</b></h4>
    <table width="50%" border="2" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>Semester</th>
                <th class="text-center" rowspan='2'>Indeks Prestasi</th>
                <th class="text-center" rowspan='2'>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"><input name="keterangan" class="form-control"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="1" class="text-center">IPK</th>
                <td class="text-center"><input name="IPK" class="form-control"></td>
                <td class="text-center"><input name="keterangan" class="form-control"></td>
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