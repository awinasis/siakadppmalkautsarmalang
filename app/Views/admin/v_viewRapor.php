<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered">
            <tr>
                <th width="100px" class="text-center">
                    <h2><b>PONDOK PESANTREN MAHASISWA MALANG RAYA</b></h2>
                </th>
            </tr>

            <tr>
                <td width="100px" class="text-center">
                    <h4>Jl. Bend. Nawangan 13 Karang Besuki Sukun Telp. 0341 (553884) Kota Malang</h4>
                </td>
            </tr>

            <tr>
                <td width="100px" class="text-center">
                    <h4>E-mail: ppm_malangraya@yahoo.com Kode Pos 65145</h4>
                </td>
            </tr>
        </table>
    </div>
</div>
&emsp;<b>______________________________________________________________________________________________________________________________________________________________</b>
<tr>
    <th width="100px" class="text-center">
        <h3 class="text-center"><b>LAPORAN HASIL BELAJAR</b></h3>
    </th>
</tr>

<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered">
            <tr>
                <th width="100px">NIS</th>
                <th width="30px">:</th>
                <td><?= $rapor['NIS']; ?></td>
            </tr>

            <tr>
                <th width="100px">Nama Santri</th>
                <th width="30px">:</th>
                <td><?= $rapor['nama_santri']; ?></td>
            </tr>

            <tr>
                <th width="100px">Tgl. Masuk PPM</th>
                <th width="30px">:</th>
                <td></td>
            </tr>

            <tr>
                <th width="100px">Semester/Angkatan</th>
                <th width="30px">:</th>
                <td></td>
            </tr>
        </table>
    </div>
</div>
<br><br>
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
        <?php $no = 1;
        foreach ($rapor as $key => $value) { ?>
            <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        <?php } ?>
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
        <?php $no = 1;
        foreach ($rapor as $key => $value) { ?>
            <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        <?php } ?>
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
<table width="50%" border="2" cellpadding="7" cellspacing="0">
    <thead>
        <tr>
            <th class="text-center" rowspan='2'>No.</th>
            <th class="text-center" rowspan='2'>Jenis</th>
            <th class="text-center" rowspan='2'>Penilain</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($rapor as $key => $value) { ?>
            <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br><br>
<table width="50%" border="2" cellpadding="7" cellspacing="0">
    <thead>
        <tr>
            <th class="text-center" rowspan='2'>No.</th>
            <th class="text-center" rowspan='2'>Jenis</th>
            <th class="text-center" rowspan='2'>Penilain</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($rapor as $key => $value) { ?>
            <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br><br>
<table width="50%" border="2" cellpadding="7" cellspacing="0">
    <thead>
        <tr>
            <th class="text-center" rowspan='2'>No.</th>
            <th class="text-center" rowspan='2'>Kegiatan</th>
            <th class="text-center" rowspan='2'>Penilain</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($rapor as $key => $value) { ?>
            <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br><br>
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
            <td class="text-center"><?php echo $no++; ?></td>
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
        <?php $no = 1;
        foreach ($rapor as $key => $value) { ?>
            <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="2" class="text-center">IPK</th>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
    </tfoot>
</table>