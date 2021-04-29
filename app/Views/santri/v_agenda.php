data: {
labels: ['Hadir', 'Alpha', 'Belajar', 'Izin', 'Izin Terlambat', 'Nugas', 'Sakit', 'Terlambat'],
datasets: [{
'label': 'My First Dataset',
data: [
<?php
$jumlah_hadir = mysqli_query($konek, "select * from tbl_absen_santri where keterangan='hadir'");
echo mysqli_num_rows($jumlah_hadir);
?>,
<?php
$jumlah_alpha = mysqli_query($konek, "select * from tbl_absen_santri where keterangan='alpha'");
echo mysqli_num_rows($jumlah_alpha);
?>,
<?php
$jumlah_belajar = mysqli_query($konek, "select * from tbl_absen_santri where keterangan='belajar'");
echo mysqli_num_rows($jumlah_belajar);
?>,
<?php
$jumlah_izin = mysqli_query($konek, "select * from tbl_absen_santri where keterangan='izin'");
echo mysqli_num_rows($jumlah_izin);
?>,
<?php
$jumlah_izinTerlambat = mysqli_query($konek, "select * from tbl_absen_santri where keterangan='izin terlambat'");
echo mysqli_num_rows($jumlah_izinTerlambat);
?>,
<?php
$jumlah_nugas = mysqli_query($konek, "select * from tbl_absen_santri where keterangan='nugas'");
echo mysqli_num_rows($jumlah_nugas);
?>,
<?php
$jumlah_sakit = mysqli_query($konek, "select * from tbl_absen_santri where keterangan='sakit'");
echo mysqli_num_rows($jumlah_sakit);
?>,
<?php
$jumlah_terlambat = mysqli_query($konek, "select * from tbl_absen_santri where keterangan='terlambat'");
echo mysqli_num_rows($jumlah_terlambat);
?>
],
backgroundColor: ['rgb(242, 28, 17)',
'rgb(250, 238, 12)',
'rgb(99, 250, 12)',
'rgb(16, 40, 222)',
'rgb(227, 5, 123)',
'rgb(19, 203, 209)',
'rgb(129, 132, 133)',
],
}]
},