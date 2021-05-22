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
    </style>
</head>

</html>
<div class="box-body">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <table class="table table-bordered">
                <tr>
                    <td rowspan="3" class="text-center"><img src="<?= base_url('/uploads/LogoPPM_Hitam.png') ?>" height="120px"></td>
                    <td colspan="3" class="text-center">
                        <h3><b>PONDOK PESANTREN MAHASISWA MALANG RAYA</b></h3>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">
                        <h4>Jl. Bend. Nawangan 13 Karang Besuki Sukun Telp. 0341 (553884) Kota Malang</h4>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">
                        <h5>E-mail: ppm_malangraya@yahoo.com Kode Pos 65145</h5>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
    &emsp;<b>______________________________________________________________________________________________________________________________________________________________</b>
    <tr>
        <th width="100px" class="text-center">
            <h3 class="text-center"><b>LAPORAN HASIL BELAJAR</b></h3>
        </th>
    </tr>

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
                        <input class="col-lg-4" name="tanggal" type="date" class="form-control" placeholder="date" required>
                    </td>
                </tr>

                <tr>
                    <td width="100px">Semester/Angkatan</td>
                    <td width="30px">:</td>
                    <td><input class="col-lg-6" name="smt_angkatan" class="form-control" placeholder="Ex: Dua/2019" required></td>
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
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-center">&emsp; Prosentase Materi Klasikal</th>
                <td class="text-center"></td>
            </tr>
            <tr>
                <th colspan="3" class="text-center">&emsp; Prosentase Materi yang Wajib di Khatamkan</th>
                <td class="text-center"></td>
            </tr>
        </tfoot>
    </table>
    <br><br><br>
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
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2" class="text-center">&emsp; Jumlah</th>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <th colspan="2" class="text-center">&emsp; Rata-rata</th>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tfoot>
    </table>
    <br><br><br>
    <h4><b>3. Sikap & Perilaku</b></h4>
    <table width="50%" border="2" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>No.</th>
                <th class="text-center" rowspan='2'>Jenis</th>
                <th class="text-center" rowspan='2'>Penilain</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <h4><b>4. Lima Sukses Santri</b></h4>
    <table width="50%" border="2" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>No.</th>
                <th class="text-center" rowspan='2'>Jenis</th>
                <th class="text-center" rowspan='2'>Penilain</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <h4><b>5. Kegiatan Ekstrakurikuler/Pengembangan Diri</b></h4>
    <table width="50%" border="2" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>No.</th>
                <th class="text-center" rowspan='2'>Kegiatan</th>
                <th class="text-center" rowspan='2'>Penilain</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <h4><b>6. Absensi/Keaktifan dalam Kegiatan</b></h4>
    <table width="100%" border="2" align="center" cellpadding="7" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>No.</th>
                <th class="text-center" rowspan='2'>Jumlah Kegiatan</th>
                <th class="text-center" colspan=" 9">Keterangan</th>
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
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <h4><b>7. Prestasi Kuliah</b></h4>
    <table width="50%" border="2" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" rowspan='2'>No.</th>
                <th class="text-center" rowspan='2'>Semester</th>
                <th class="text-center" rowspan='2'>Indeks Prestasi</th>
                <th class="text-center" rowspan='2'>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2" class="text-center">IPK</th>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        </tfoot>
    </table>
</div>